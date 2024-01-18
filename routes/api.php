<?php

use App\Http\Controllers\MetodosController;
use App\Http\Controllers\TutorialController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\FACT_METODOS_PAGO;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/metodos', [TutorialController::class, 'obtenerMetodos']);
Route::get('/periodo', [TutorialController::class, 'obtenerPeriodo']);
Route::get('/suscripcion', [TutorialController::class, 'obtenerSuscripcion']);
