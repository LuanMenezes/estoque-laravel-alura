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
    //return 'Listagem de produtos';
});

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra', 'ProdutoController@mostra');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostras');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

//Route::get('/produtos', 'ProdutoController@lista');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/login', 'LoginEstoqueController@form');
Route::post('/login', 'LoginEstoqueController@login');