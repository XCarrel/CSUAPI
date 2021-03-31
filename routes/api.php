<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShiftSheetController;
use App\Http\Controllers\TodoSheetController;
use App\Http\Controllers\DrugSheetController;

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

Route::resources([
    'shiftsheets' => ShiftSheetController::class,
    'todosheets' => TodoSheetController::class,
    'drugsheets' => DrugSheetController::class,
]);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
