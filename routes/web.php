<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrabajoController;

Route::get('/', [TrabajoController::class, 'index'])->name('index');
Route::post('/', [TrabajoController::class, 'guardarTrabajo'])->name('guardar');


Route::view('crear', 'crear');


