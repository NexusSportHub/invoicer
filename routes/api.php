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
//Creacion de las routas para ejecutar los select de cada una de las paginas pasando como parametro cada uno de las columnas de las tablas
Route::get('/metodos/all', [TutorialController::class, 'metodosbyDate']);
Route::get('/periodo/all', [TutorialController::class, 'periodosByDate']);
Route::get('/suscripcion/all', [TutorialController::class, 'suscriptionByDate']);