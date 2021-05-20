<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ShiftTeam extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = "shiftteams";

}
