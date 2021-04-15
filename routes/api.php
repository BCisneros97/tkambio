<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoCambioController;

Route::group(['prefix' => 'v1'], function () {
    Route::apiResource('tipo-cambio', TipoCambioController::class)
        ->parameter('tipo-cambio', 'tipoCambio');
});


Route::get('/tipo-cambio/{apiKey}', [TipoCambioController::class, 'getTcActual'])
    ->middleware('api.key');
