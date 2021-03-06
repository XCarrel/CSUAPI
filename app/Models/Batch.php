<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function drug()
    {
        return $this->belongsTo(Drug::class);
    }
}
