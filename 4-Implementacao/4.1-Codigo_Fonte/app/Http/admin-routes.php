<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'as' => 'dashboard.',
], function () {

    Route::get('/home', 'DashboardController@home')
        ->name('home');

});

Route::resource('produtos', 'ProdutoController');

Route::resource('categorias', 'CategoriaController');

Route::resource('departamentos', 'DepartamentoController');

Route::resource('subcategorias', 'SubcategoriaController');

Route::resource('marcas', 'MarcaController');

Route::resource('clientes', 'ClienteController');

Route::resource('pedidos', 'PedidoController');

Route::resource('enderecos', 'EnderecoController');
