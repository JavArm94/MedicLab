<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoUsuarioController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('tipousuarios',TipoUsuarioController::class);

Route::resource('rols', App\Http\Controllers\RolController::class);

Route::resource('generos', App\Http\Controllers\GeneroController::class);

Route::resource('cargos', App\Http\Controllers\CargoController::class);

Route::resource('localidades', App\Http\Controllers\LocalidadController::class);

Route::resource('parentescos', App\Http\Controllers\ParentescoController::class);

Route::resource('medicos', App\Http\Controllers\MedicoController::class);