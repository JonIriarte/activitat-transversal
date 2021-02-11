<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscripcionController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Página principal
Route::get('/', function () {
    return view('home');
});
//Redirección a la página de inscripción
Route::get('/inscripcion', [InscripcionController::class, 'create']);
//Redirección a la página en la que se insertan los datos en la BD
Route::post('/inscrito', [InscripcionController::class,'store']); 