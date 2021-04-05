<?php

namespace App\Http\Controllers;

use App\Http\Resources\DrugsheetResource;
use App\Models\Batch;
use App\Models\Drugsheet;
use App\Models\PharmaCheck;
use Illuminate\Http\Request;

class DrugSheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Drugsheet::with(['base','status'])->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Drugsheet::with(['base','status'])->where('id',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getMissingPharmaChecksForBase($base_id) {
        // Get the active drugsheet for the given base
        $activeSheet = Drugsheet::where('base_id', $base_id)->whereHas('status', function ($q) {
            $q->where('slug', 'open');
        })->first();

        return $activeSheet->missingPharmaChecks();
    }

    public function pharmacheck(Request $request)
    {
        $batch = Batch::find($request->input('batch_id'));
        if (!$batch) return response('Unknown batch',400);

        $drugsheet = Drugsheet::find($request->input('drugsheet_id'));
        if (!$drugsheet) return response('Unknown drugsheet',400);

        $pharmacheck = PharmaCheck::where('date', $request->input('date'))
            ->where('batch_id', $batch->id)
            ->where('drugsheet_id', $drugsheet->id)->first();

        if (!$pharmacheck) { // Initialize new one
            $pharmacheck = new PharmaCheck();
            $pharmacheck->date = $request->input('date');
            $pharmacheck->batch_id = $batch->id;
            $pharmacheck->drugsheet_id = $this->id;
        }
        $pharmacheck->start = $request->input('start'); // TODO ignore redefinition of the values
        $pharmacheck->end = $request->input('end');
        $pharmacheck->save();

        return response('Ok');
    }
}
