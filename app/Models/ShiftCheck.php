<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShiftCheck extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $table = "shiftchecks";

    public function action()
    {
        return $this->belongsTo(ShiftAction::class,'shiftaction_id');
    }
}
