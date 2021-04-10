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
        return Shiftsheet::whereHas('dayBoss', function ($q) use($user) {
            $q->where('id', $user->id);
        })->orWhereHas('nightBoss', function ($q) use($user) {
            $q->where('id', $user->id);
        })->orWhereHas('dayTeammate', function ($q) use($user) {
            $q->where('id', $user->id);
        })->orWhereHas('nightTeammate', function ($q) use($user) {
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

    public function dayBoss()
    {
        return $this->belongsTo(User::class, 'dayboss_id');
    }

    public function nightBoss()
    {
        return $this->belongsTo(User::class, 'nightboss_id');
    }

    public function dayTeammate()
    {
        return $this->belongsTo(User::class, 'dayteammate_id');
    }

    public function nightTeammate()
    {
        return $this->belongsTo(User::class, 'nightteammate_id');
    }

}
