<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return Drugsheet::whereHas('signers', function ($q) use($user) {
            $q->where('users.id', $user->id);
        })->orWhereHas('pharmacheckers', function ($q) use($user) {
            $q->where('users.id', $user->id);
        })->orWhereHas('novacheckers', function ($q) use($user) {
            $q->where('users.id', $user->id);
        })->get();
    }

    public function base() {
        return $this->belongsTo(Base::class);
    }

    public function status() {
        return $this->belongsTo(Status::class);
    }

    /**
     * All users that have signed at least a day of the sheet
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function signers() {
        return $this->belongsToMany(User::class,'drugsignatures')->distinct();
    }

    /**
     * Users who have entered a pharmacheck
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function pharmacheckers() {
        return $this->belongsToMany(User::class,'pharmachecks')->distinct();
    }

    /**
     * Users who have entered a novacheck
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function novacheckers() {
        return $this->belongsToMany(User::class,'novachecks')->distinct();
    }

    /**
     * The batches used in this sheet
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function batches() {
        return $this->belongsToMany(Batch::class,'drugsheet_use_batch')->orderBy('drug_id');
    }

    /**
     * The novas used in this sheet
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function novas() {
        return $this->belongsToMany(Nova::class,'drugsheet_use_nova');
    }

}
