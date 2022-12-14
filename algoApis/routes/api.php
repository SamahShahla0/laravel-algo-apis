<?php

use App\Http\Controllers\AlgoApisController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/strings',[AlgoApisController::class, 'sortMixedString']);
Route::post('/place_values',[AlgoApisController::class, 'arrayOfPlaceValues']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
