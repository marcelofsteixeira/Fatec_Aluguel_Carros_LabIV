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

/*Rotas do app
Route::get('/carros', 'CarroController@index')->name('carros.index');

Route::get('/cadastroCarro', 'CarroController@index')->name('carros.create');*/

Route::resource('carros', 'CarroController');

Route::resource('alugueis', 'AluguelController');

Route::resource('clientes', 'ClienteController');

Route::resource('funcionarios', 'FuncionarioController');