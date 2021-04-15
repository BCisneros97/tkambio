<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\AuthController;
use App\Http\Controllers\api\v1\TipoCambioController;

Route::group(['prefix' => 'v1'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', [AuthController::class, 'login']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('me', [AuthController::class, 'me']);
    });

    Route::group(['middleware' => 'jwt'], function () {
        Route::apiResource('tipo-cambio', TipoCambioController::class)
            ->parameter('tipo-cambio', 'tipoCambio');
    });
});


Route::get('/tipo-cambio/{apiKey}', [TipoCambioController::class, 'getTcActual'])
    ->middleware('api.key');
