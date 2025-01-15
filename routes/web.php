<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MiController;
use \App\Http\Controllers\TareasController;
use \App\Http\Controllers\JuegosController;


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
Route::get('/mipagina', [MiController::class,'inicio']);

Route::get('/tareas', [TareasController::class,'index']);

Route::get('/juegos', [JuegosController::class,'index']);

//esto realiza el crud automaticamente
//Route::resource('/juegos', [JuegosController::class]);

