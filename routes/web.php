<?php

Route::get('/', function () {
     return view('/clientes/index');
 });
Route::get('/clientes','ClientesController@index');
Route::post('/clientes','ClientesController@store')->name('clientes.store');
Route::delete('/clientes/{id}','ClientesController@delete')->name('clientes.destroy');
