<?php

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
    return view('painel.index');
});

Route::resource('/cliente', 'ClienteController');

Route::resource('/motorista', 'ClienteController');

Route::resource('/entrega', 'ClienteController');

    Route::get('/entrega/andamento', 'ClienteController@andamento')->name('entregaandamento');

    Route::get('/entrega/efetuada', 'ClienteController@efetuada')->name('entregaefetuada');

    Route::get('/entrega/problema', 'ClienteController@problema')->name('entregaproblema');

Route::resource('/categoria', 'ClienteController');

Route::resource('/produto', 'ClienteController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
