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


Route::get('/home', function () {
    return view('home');
}) -> name ('home');

Route::get('/atributos', function(){
    return view('atributosProducto');
}) -> name ('atributosProducto');

Route::get('/configurarTienda', function(){
    return view('configurarTienda');
}) -> name ('configurarTienda');
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
Route::get('verClientes', 'ClienteController@cliente');
Route::get('verProducto', 'ProductoController@producto');


Route::get('/home', function() {
    exec('composer dump-autoload');
    Artisan::call('db:seed' ,['--force' => true]);
    return view('home');
});

Route::get('/verFactura', 'FacturaController@index_through');
Route::post('verFactura/fetch', 'FacturaController@fetch')->name('FacturaController.fetch');
Route::post('verFactura/populateTable', 'FacturaController@populateTable')->name('FacturaController.populateTable');
Route::post('/error', 'FacturaController@store');
Route::post('/error', 'ProductoController@store');