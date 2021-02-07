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

Route::view('/', 'home')->name('home');

Route::view('/nuevoproyecto', 'añadirProyecto')->name('añadirproyecto');

Route::post('/crearproyecto', 'proyectoController@create')->name('crearproyecto');

Route::get('/listaproyecto', 'proyectoController@show')->name('listaproyecto');

Route::get('/mostrarproyecto/{id}','proyectoController@mostrarproyecto')->name('mostrarproyecto');

Route::get('/mostrarproyecto/eliminar/{id}','proyectoController@destroy')->name('eliminarproyecto');

Route::get('/borrartodos','proyectoController@deleteall')->name('borrartodos');

Route::get('/mostrarproyecto/edit/{id}','proyectoController@edit')->name('editarproyecto');

Route::post('/mostrarproyecto/actualizar','proyectoController@update')->name('actualizarproyecto');

Route::post('/mostrarproyecto/crearestudiante/','estudianteController@create')->name('crearestudiante');

Route::get('/mostrarproyecto/eliminarEstudiante/{id}','estudianteController@destroy')->name('eliminarestudiante');

