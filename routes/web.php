<?php

Route::get('/', 'ProdutoController@lista');
Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/produtos/novo', 'ProdutoController@novo');
Auth::routes();
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove')->where('id', '[0-9]+');
