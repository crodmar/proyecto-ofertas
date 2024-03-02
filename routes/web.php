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

Route::get('/', [CholloController::class, 'index']);//Redirige al index pasando por el controlador
Route::get('/create', [CholloController::class, 'create'])->name('create');//Crear chollo
Route::post('/', [CholloController::class, 'store'])->name('store');//Guardar chollo
Route::get('/{id}', [CholloController::class, 'show'])->name('show');//Mostrar
Route::get('/{id}/edit', [CholloController::class, 'edit'])->name('edit');//Editar chollo
Route::put('/{id}', [CholloController::class, 'update'])->name('update');
//Route::delete('/{id}');
