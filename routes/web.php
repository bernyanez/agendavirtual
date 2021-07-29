<?php

use Illuminate\Support\Facades\Route;

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

Route::get('quienessomos', function(){
    return view('quienessomos');
});

Route::GET('/auth/registerCliente', [App\Http\Controllers\Auth\RegisterController::class, 'create']);

Auth::routes();

//Route::resource('evento',[App\Http\Controllers\EventoProfesionalController::class], '');

Route::get('/home', [App\Http\Controllers\EventoController::class, 'index']);

Route::get('/home/mostrar', [App\Http\Controllers\EventoController::class, 'show']);

Route::post('/home/agregar', [App\Http\Controllers\EventoController::class, 'store']);

Route::post('/home/editar/{id}', [App\Http\Controllers\EventoController::class, 'edit']);

Route::post('/home/actualizar/{evento}', [App\Http\Controllers\EventoController::class, 'update']);

Route::post('/home/borrar/{id}', [App\Http\Controllers\EventoController::class, 'destroy']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user/index', [App\Http\Controllers\BuscaServicioController::class, 'index']);

Route::get('evento/calendarioprofesional', [App\Http\Controllers\EventoProfesionalController::class, 'index']);
Route::post('evento/calendarioprofesional/agregar', [App\Http\Controllers\EventoProfesionalController::class, 'store']);
Route::get('evento/calendarioprofesional/mostrar', [App\Http\Controllers\EventoProfesionalController::class, 'show']);

Route::get('home/{user}/editar', [App\Http\Controllers\HomeController::class,'editar'])->name('home.editar');
Route::put('home/{user}', [App\Http\Controllers\HomeController::class,'update'])->name('home.update');








