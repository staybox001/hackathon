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

Route::get('/', 'HomeController@index')->name('inicio')->middleware('auth');

Route::get('/home', function(){
    return redirect('/');
});

Route::resource('/cliente', 'ClienteController')->middleware('auth');

Route::resource('/motorista', 'MotoristaController')->middleware('auth');

Route::resource('/entrega', 'EntregaController')->middleware('auth');

    Route::get('/andamento', 'EntregaController@andamento')->name('entregaandamento')->middleware('auth');

    Route::get('/efetuada', 'EntregaController@efetuada')->name('entregaefetuada')->middleware('auth');

    Route::get('/divergencia', 'EntregaController@divergencia')->name('entregadivergencia')->middleware('auth');

Route::resource('/categoria', 'CategoriaController')->middleware('auth');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout')->middleware('auth');

Route::resource('/produto', 'ProdutoController')->middleware('auth');

Auth::routes();
