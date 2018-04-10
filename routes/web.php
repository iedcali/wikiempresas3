<?php

//Route::get('pdfview','pdfController@pdfview')->name('pdfview');

Route::get('/', function () {
    return view('inicio.inicio');
});

Route::post('/hacer_busqueda',
    'empresaController@hacer_busqueda')
    ->name('empresa.hacerbusqueda');

Route::resource('empresa','empresaController');
Route::resource('sucursal','sucursalController');
