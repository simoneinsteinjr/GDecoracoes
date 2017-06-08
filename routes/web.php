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


Route::get('admin', function () {
    return view('admin');
});

Route::get('/', 'FrontController@index');

Route::get('adicionar-ao-carinho/{id}', 'FrontController@adicionarAoCarinho');

Route::get('reservar', 'ReservaController@create');
Route::resource('reservas', 'ReservaController');

Route::get('material', 'MaterialController@create');
Route::resource('materiais', 'MaterialController');

Route::get('tipo', 'TipoController@create');
Route::resource('tipos', 'TipoController');


Auth::routes();

Route::get('/home', 'HomeController@index');
