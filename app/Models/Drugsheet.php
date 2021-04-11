<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Drugsheet extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Returns all Drug reports where the user has contributed
     * @param User $user
     * @return mixed
     */
    static function filledBy(User $user)
    {
        return Drugsheet::whereHas('signers', function ($q) use ($user) {
            $q->where('users.id', $user->id);
        })->orWhereHas('pharmacheckers', function ($q) use ($user) {
            $q->where('users.id', $user->id);
        })->orWhereHas('novacheckers', function ($q) use ($user) {
            $q->where('users.id', $user->id);
        })->get();
    }

    public function base()
    {
        return $this->belongsTo(Base::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    /**
     * All users that have signed at least a day of the sheet
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function signers()
    {
        return $this->belongsToMany(User::class, 'drugsignatures')->distinct();
    }

    /**
     * Users who have entered a pharmacheck
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function pharmacheckers()
    {
        return $this->belongsToMany(User::class, 'pharmachecks')->distinct();
    }

    /**
     * Users who have entered a novacheck
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function novacheckers()
    {
        return $this->belongsToMany(User::class, 'novachecks')->distinct();
    }

    /**
     * The batches used in this sheet
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function batches()
    {
        return $this->belongsToMany(Batch::class, 'drugsheet_use_batch','drugsheet_id','batch_id')->orderBy('drug_id');
    }

    /**
     * The drugs used in this sheet
     */
    public function drugs()
    {
        return array_unique($this->batches()->with('drug')->get()->pluck('drug')->flatten()->toArray(), SORT_REGULAR);
    }

    /**
     * The novas used in this sheet
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function novas()
    {
        return $this->belongsToMany(Nova::class, 'drugsheet_use_nova');
    }

    /**
     * Returns all pharmachecks of the sheet that are:
     * - incomplete (missing start OR end value)
     * - not in the future
     * @return array
     */
    public function missingPharmaChecks()
    {
        // Compute first day of the sheet
        $year = 2000 + intdiv($this->week, 100);
        $week = $this->week % 100;
        $dayOfSheet = Carbon::create(date('Y-m-d', strtotime(sprintf("%4dW%02d", $year, $week))));

        $res = [];
        for ($dow = 0; $dow < 7; $dow++) {
            if ($dayOfSheet->greaterThan(Carbon::today())) break; // don't list future days
            foreach ($this->batches as $batch) {
                $pharmacheck = PharmaCheck::where('date', $dayOfSheet->toDateString('Y-m-d'))
                    ->where('batch_id', $batch->id)
                    ->where('drugsheet_id', $this->id)->first();
                if ($pharmacheck) {
                    if (!$pharmacheck->start || !$pharmacheck->end) { // start or end is missing. Just add display properties, the rest is fine
                        $pharmacheck->drug = $batch->drug->name;
                        $pharmacheck->batch_number = $batch->number;
                        unset ($pharmacheck->id,$pharmacheck->user_id); // prune useless attributes
                        $res[] = $pharmacheck;
                    }
                } else {
                    $pharmacheck = new PharmaCheck();
                    $pharmacheck->date = $dayOfSheet->toDateString('Y-m-d');
                    $pharmacheck->drug = $batch->drug->name;
                    $pharmacheck->batch_id = $batch->id;
                    $pharmacheck->batch_number = $batch->number;
                    $pharmacheck->drugsheet_id = $this->id;
                    unset ($pharmacheck->id,$pharmacheck->user_id); // prune useless attributes
                    $res[] = $pharmacheck;
                }
            }
            $dayOfSheet->addDay();
        }
        return($res);
    }

    /**
     * Returns all novachecks of the sheet that are:
     * - incomplete (missing start OR end value)
     * - not in the future
     * @return array
     */
    public function missingNovaChecks()
    {
        // Compute first day of the sheet
        $year = 2000 + intdiv($this->week, 100);
        $week = $this->week % 100;
        $dayOfSheet = Carbon::create(date('Y-m-d', strtotime(sprintf("%4dW%02d", $year, $week))));

        $res = [];
        for ($dow = 0; $dow < 7; $dow++) {
            if ($dayOfSheet->equalTo(Carbon::tomorrow())) break; // don't list future days
            foreach ($this->novas as $nova) {
                foreach ($this->drugs() as $drug) { // !!! drugs is not an eloquent relationship
                    $novacheck = novaCheck::where('date', $dayOfSheet->toDateString('Y-m-d'))
                        ->where('nova_id', $nova->id)
                        ->where('drug_id', $drug["id"])
                        ->where('drugsheet_id', $this->id)->first();
                    if ($novacheck) {
                        if (!$novacheck->start || !$novacheck->end) { // start or end is missing. Just add display properties, the rest is fine
                            $novacheck->nova = $nova->number;
                            $novacheck->drug = $drug["name"];
                            unset ($novacheck->id,$novacheck->user_id); // prune useless attributes
                            $res[] = $novacheck;
                        }
                    } else {
                        $novacheck = new novaCheck();
                        $novacheck->date = $dayOfSheet->toDateString('Y-m-d');
                        $novacheck->nova = $nova->number;
                        $novacheck->drug = $drug["name"];
                        $novacheck->drugsheet_id = $this->id;
                        unset ($novacheck->id,$novacheck->user_id); // prune useless attributes
                        $res[] = $novacheck;
                    }
                }
            }
            $dayOfSheet->addDay();
        }
        return($res);
    }

}
