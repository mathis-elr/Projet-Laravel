<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('employes', App\Http\Controllers\Api\EmployesController::class);
Route::apiResource('voitures', App\Http\Controllers\Api\VoituresController::class);
Route::apiResource('campuses', App\Http\Controllers\Api\CampusesController::class);
Route::apiResource('trajets', App\Http\Controllers\Api\TrajetsController::class);
