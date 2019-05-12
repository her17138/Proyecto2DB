<?php

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
    return view('home');
}) -> name ('home');


Route::get('/atributos', function(){
    return view('atributosProducto');
}) -> name ('atributosProducto');

Route::get('/configurarTienda', function(){
    return view('configurarTienda');
}) -> name ('configTienda');
/*
Route::get('/facturacion', function(){
    return view('facturacion');
}) -> name ('facturacion');
*/
Route::resource('producto', 'ProductoController');
Route::resource('factura', 'FacturaController');
Route::resource('cliente', 'ClienteController');
Route::resource('atributo', 'AtributoController');

Route::resource('cliente', 'ClienteController');

Route::get('/fill', function() {
    Artisan::call('db:seed');
});

