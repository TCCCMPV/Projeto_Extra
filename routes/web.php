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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/produtos/novo-produto','novoProduto')->name('novoProduto');
Route::get('/produtos','ProdutosController@exibirProdutos')->name('produtos');
Route::get('/produtos/{id}','ProdutosController@exibirProduto')->name('produto');
Route::get('/users/{id}','UsersController@exibirUser')->name('user');
Route::get('/teste','ProdutosController@teste');