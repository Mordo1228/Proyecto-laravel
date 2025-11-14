<?php

use App\Http\Controllers\EspacioController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\SolicitanteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('espacios.index');
});

Route::resource('espacios', EspacioController::class);
Route::resource('reservas', ReservaController::class);
Route::resource('solicitantes', SolicitanteController::class);
