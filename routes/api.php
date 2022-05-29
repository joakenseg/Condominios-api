<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//residentes
Route::get('/residentes', 'App\Http\Controllers\ResidenteController@index');
Route::get('/residentes/{id}', 'App\Http\Controllers\ResidenteController@show');
Route::post('/residentes', 'App\Http\Controllers\ResidenteController@store');
Route::put('/residentes/{id}', 'App\Http\Controllers\ResidenteController@update');
Route::delete('/residentes/{id}', 'App\Http\Controllers\ResidenteController@destroy');

//condominios
Route::get('/condominios', 'App\Http\Controllers\CondominioController@index');
Route::get('/condominios/{id}', 'App\Http\Controllers\CondominioController@show');
Route::post('/condominios', 'App\Http\Controllers\CondominioController@store');
Route::put('/condominios/{id}', 'App\Http\Controllers\CondominioController@update');
Route::delete('/condominios/{id}', 'App\Http\Controllers\CondominioController@destroy');

//espacios comunes
Route::get('/espacioscomunes', 'App\Http\Controllers\Espacio_comunController@index');
Route::get('/espacioscomunes/{id}', 'App\Http\Controllers\Espacio_comunController@show');
Route::post('/espacioscomunes', 'App\Http\Controllers\Espacio_comunController@store');
Route::put('/espacioscomunes/{id}', 'App\Http\Controllers\Espacio_comunController@update');
Route::delete('/espacioscomunes/{id}', 'App\Http\Controllers\Espacio_comunController@destroy');


//reserva espacios comunes
Route::get('/reservasespacioscomunes', 'App\Http\Controllers\Reserva_espacio_comunController@index');
Route::get('/reservasespacioscomunes/{id}', 'App\Http\Controllers\Reserva_espacio_comunController@show');
Route::post('/reservasespacioscomunes', 'App\Http\Controllers\Reserva_espacio_comunController@store');
Route::put('/reservasespacioscomunes/{id}', 'App\Http\Controllers\Reserva_espacio_comunController@update');
Route::delete('/reservasespacioscomunes/{id}', 'App\Http\Controllers\Reserva_espacio_comunController@destroy');