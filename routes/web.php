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
})->name('inicio');

Route::resource('/cliente', 'ClienteController');

Route::resource('/motorista', 'MotoristaController');

Route::resource('/entrega', 'EntregaController');

    Route::get('/andamento', 'EntregaController@andamento')->name('entregaandamento');

    Route::get('/efetuada', 'EntregaController@efetuada')->name('entregaefetuada');

    Route::get('/divergencia', 'EntregaController@divergencia')->name('entregadivergencia');

Route::resource('/categoria', 'CategoriaController');

Route::resource('/produto', 'ProdutoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
