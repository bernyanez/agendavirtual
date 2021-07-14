<?php

use App\Http\Controllers\BuscaServicioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [App\Http\Controllers\EventoController::class, 'index']);

Route::get('/home/mostrar', [App\Http\Controllers\EventoController::class, 'show']);

Route::post('/home/agregar', [App\Http\Controllers\EventoController::class, 'store']);

Route::post('/home/editar/{id}', [App\Http\Controllers\EventoController::class, 'edit']);

Route::post('/home/actualizar/{evento}', [App\Http\Controllers\EventoController::class, 'update']);

Route::post('/home/borrar/{id}', [App\Http\Controllers\EventoController::class, 'destroy']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user/index', [App\Http\Controllers\BuscaServicioController::class, 'index']);

Route::get('/calendarioprofesional', [App\Http\Controllers\EventoController::class, 'calendarioprofesional']);

Route::get('quienessomos', function(){
    return view('quienessomos');
});




