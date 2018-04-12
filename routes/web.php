<?php

//Route::get('pdfview','pdfController@pdfview')->name('pdfview');


Route::get('/', function () {
    //return view('mapa.mapa');
    return view('inicio.inicio');
});

Route::post('/hacer_busqueda',
    'empresaController@hacer_busqueda')
    ->name('empresa.hacerbusqueda');

Route::get('/mostrar_sucursales{id}',
    'empresaController@mostrar_sucursales')
    ->name('empresa.mostrar_sucursales');

Route::resource('empresa','empresaController');
Route::resource('sucursal','sucursalController');
