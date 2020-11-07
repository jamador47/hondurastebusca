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
Route::get('/agregarrefugiado', 'App\Http\Controllers\refugiadosController@veragregarrefugiado');
Route::post('/agregarrefugiado', 'App\Http\Controllers\refugiadosController@agregarrefugiado')->name('agregar.ref');;
Route::get('/agregarrefugio', 'App\Http\Controllers\refugiadosController@veragregarrefugio');
Route::post('/agregarrefugio', 'App\Http\Controllers\refugiadosController@agregarrefugio');
Route::get('/resultado', 'App\Http\Controllers\refugiadosController@buscar');
Route::post('/fetch', 'App\Http\Controllers\refugiadosController@fetch')->name('dynamicdependent.fetch');
Route::get('/buscar', 'App\Http\Controllers\refugiadosController@verbusqueda')->name('buscar.ref');
Route::post('/buscar', 'App\Http\Controllers\refugiadosController@busqueda');
