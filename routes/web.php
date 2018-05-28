<?php

Route::get('/', function(){
    return "<h1>Listagem</h1>";
});

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/produtos/novo', 'ProdutoController@novo')->middleware('auth');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona')->middleware('auth');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove')->where('id', '[0-9]+')->middleware('auth');