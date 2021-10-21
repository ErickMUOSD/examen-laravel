<?php

Route::get('/clientes/editar', function () {
      return view('clientes.editar');
 });


Route::get('/clientes','ClientesController@index');
Route::post('/clientes','ClientesController@store')->name('clientes.store');
Route::delete('/clientes/{id}','ClientesController@delete')->name('clientes.destroy');
