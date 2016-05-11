<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('produtos', 'ProdutoController');

Route::resource('categorias', 'CategoriaController');

Route::resource('departamentos', 'DepartamentoController');

Route::resource('subcategorias', 'SubcategoriaController');

Route::resource('marcas', 'MarcaController');

Route::resource('clientes', 'ClienteController');

Route::resource('pedidos', 'PedidoController');

Route::resource('enderecos', 'EnderecoController');