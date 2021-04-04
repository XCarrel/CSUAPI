<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShiftSheetController;
use App\Http\Controllers\TodoSheetController;
use App\Http\Controllers\DrugSheetController;
use App\Http\Controllers\UserController;

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

Route::middleware('auth:api')->group(function () {
    Route::get('getreports',[UserController::class,'myReports']);
    Route::resources([
        'shiftsheets' => ShiftSheetController::class,
        'todosheets' => TodoSheetController::class,
        'drugsheets' => DrugSheetController::class,
    ]);
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
