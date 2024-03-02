<?php

use App\Http\Controllers\CholloController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('chollos.index');
});*/

//Redirige al index pasando por el controlador
Route::get('/', [CholloController::class, 'index']);

//Comprobar si funciona más adelante
Route::resource('chollos', 'CholloController');
