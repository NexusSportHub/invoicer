<?php

use Illuminate\Support\Facades\Route;
// use App\Models\FACT_METODOS_PAGO;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('FACT_METODOS_PAGO', function () {
//     return FACT_METODOS_PAGO::all();
// });
// Route::get('FACT_METODOS_PAGO/{id}', function ($id) {
//     return FACT_METODOS_PAGO::find($id);
// });
// Route::get('/hola', function () {
//     $metodos = DB::table('FACT_METODOS_PAGO')->get();
//     return view('FACT_METODOS_PAGO', ['FACT_METODOS_PAGO' => $metodos]);
// })->name('FACT_METODOS_PAGO');