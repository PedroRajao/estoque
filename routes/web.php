<?php

Route::get('/', function(){
    return "<h1>Listagem</h1>";
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove')->where('id', '[0-9]+');