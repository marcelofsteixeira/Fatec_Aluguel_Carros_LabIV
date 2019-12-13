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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/carros/disponibilizar/{placa}', function ($placa) {
// });
/*Rotas do app
Route::get('/carros', 'CarroController@index')->name('carros.index');

Route::get('/cadastroCarro', 'CarroController@index')->name('carros.create');*/

Route::get('/encerrarAluguel/{id}', 'AluguelController@encerrarAluguel')->name('encAlu');

Route::resource('carros', 'CarroController');

Route::get('/indisponibilizar/{placa}','CarroController@inserirInc')->name('indCar');

Route::resource('alugueis', 'AluguelController');

Route::resource('clientes', 'ClienteController');

Route::resource('funcionarios', 'FuncionarioController');

Route::resource('incidentes', 'IncidenteController');