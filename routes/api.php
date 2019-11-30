<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/entregas/{id_motorista}', 'Api\ApiController@listaEntregas');
Route::post('/login', 'Api\ApiController@login');
Route::post('/geolocation', 'Api\ApiController@postGeolocation');
Route::post('/finalizaEntrega', 'Api\ApiController@finalizaEntrega');
Route::post('/advergencia', 'Api\ApiController@entregaComAdvergencia');