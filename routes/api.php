<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShiftSheetController;
use App\Http\Controllers\TodoSheetController;
use App\Http\Controllers\DrugSheetController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BaseController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('gettoken',[UserController::class,'getToken']);
Route::get('bases',[BaseController::class,'index']); // bases are needed for login -> route unprotected

Route::middleware('auth:api')->group(function () {
    Route::get('reports',[UserController::class,'myReports']);
    Route::get('unconfirmedworkplans',[UserController::class,'myUnconfirmedWorkplans']);
    Route::get('myactionsinshift/{id}',[UserController::class,'myActionsInShiftReport']);
    Route::get('activedrugsheet/{baseid}',[BaseController::class,'getActiveDrugsheet']);
    Route::get('missingchecks/{baseid}',[DrugSheetController::class,'getMissingChecksForBase']);
    Route::post('pharmacheck',[DrugSheetController::class,'pharmacheck']);
    Route::post('novacheck',[DrugSheetController::class,'novacheck']);
    Route::post('confirmworkplan',[UserController::class,'confirmWorkplan']);
    // Don't use Route::resources([]) because ->register() is needed for
    Route::resource('shiftsheets', ShiftSheetController::class)->register();
    Route::resource('todosheets', TodoSheetController::class)->register();
    Route::resource('drugsheets', DrugSheetController::class)->register();
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
