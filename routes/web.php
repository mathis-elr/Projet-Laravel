<?php

use App\Http\Controllers\EmployesController;
use App\Http\Controllers\VoituresController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.layout');
});

/* EMPLOYE  */
Route::get('/employes', [EmployesController::class, 'index'])
    ->name('employes.index');
Route::get('/employe/{id}', [EmployesController::class, 'show'])
    ->middleware('employe.voiture')
    ->middleware('employe.campuse')
    ->name('employes.show');
Route::get('/employe/{id}/verifier', [EmployesController::class, 'verifier'])
    ->middleware('employe.campuse')
    ->name('employes.verifier');

/* VOITURE */
Route::get('/voiture/create/{id_employe}', [VoituresController::class, 'create'])
    ->name('voitures.create');
Route::post('/voiture/create/{id_employe}', [VoituresController::class, 'store'])
    ->name('voitures.store');
Route::get('/voiture/{id}', [VoituresController::class, 'show'])
    ->middleware('voiture.count')
    ->name('voitures.show');


