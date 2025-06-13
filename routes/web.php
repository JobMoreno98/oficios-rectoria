<?php

use App\Http\Controllers\OficiosController;
use App\Http\Middleware\CheckArchivoAccess;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ver-oficio/{oficio}', [OficiosController::class, 'descargar'])
    ->name('descargar.sftp')
    ->middleware(CheckArchivoAccess::class); // o el middleware de Filament