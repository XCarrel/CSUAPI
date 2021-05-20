<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Shiftsheet extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Returns all Shift reports where the user is referenced as bos or teammate, day or night
     * @param User $user
     * @return mixed
     */
    static function employing(User $user)
    {
        return Shiftsheet::whereHas('teams', function ($q) use($user) {
            $q->where('boss_id', $user->id);
        })->orWhereHas('teams', function ($q) use($user) {
            $q->where('id', $user->id);
        })->get();
    }

    function myActions ()
    {
        return ShiftCheck::where('shiftsheet_id',$this->id)->where('user_id',Auth::user()->id)->with('action')->get();
    }

    //=========================== Basic Eloquent relationships
    public function status() {
        return $this->belongsTo(Status::class);
    }

    public function base()
    {
        return $this->belongsTo(Base::class);
    }

    public function teams() {
        return $this->hasMany(ShiftTeam::class);
    }

}
