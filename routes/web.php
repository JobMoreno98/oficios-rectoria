<?php

use App\Http\Controllers\OficiosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ver-oficio/{oficio}', [OficiosController::class, 'descargar'])
    ->name('descargar.sftp')
    ->middleware(['auth']); // o el middleware de Filament