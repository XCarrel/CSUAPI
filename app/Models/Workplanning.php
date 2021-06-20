<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workplanning extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function isUnconfirmed()
    {
        return !($this->confirmation === 1);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
