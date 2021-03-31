<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drugsheet extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function base() {
        return $this->belongsTo(Base::class);
    }

    public function status() {
        return $this->belongsTo(Status::class);
    }


}
