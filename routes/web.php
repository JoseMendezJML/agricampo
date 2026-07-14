<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CultivoController;
use App\Http\Controllers\ParcelaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClimaController;
use App\Http\Controllers\WeatherController;


Route::get('/', function () {
    return redirect()->route('dashboard');
});


Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');


    Route::resource('cultivos', CultivoController::class);


    Route::resource('parcelas', ParcelaController::class);


    Route::resource('productos', ProductoController::class);


    Route::get('/clima', [ClimaController::class, 'index'])->name('clima.index');
});


require __DIR__.'/auth.php';
