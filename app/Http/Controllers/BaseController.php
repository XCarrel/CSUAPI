<?php

namespace App\Http\Controllers;

use App\Models\Drugsheet;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function getActiveDrugsheet($baseid)
    {
        $res = Drugsheet::where('base_id', $baseid)->whereHas('status', function ($q) {
            $q->where('slug', 'open');
        })->with(['batches', 'novas', 'batches.drug'])->get();
        return $res;
    }
}
