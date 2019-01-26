<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('intro/intro', 'IntroController@intro');
Route::resource('almacen/categoria','CategoriaController');
Route::resource('almacen/producto','ProductoController');
Route::resource('ventas/cliente','ClienteController');
Route::resource('compras/ingresos','IngresoController');
Route::resource('ventas/ventas','VentaController');
Route::resource('almacen/proveedor','ProveedorController');
Route::resource('restauracion/categoria','RestauracionCategoriaController');
Route::resource('restauracion/producto','RestauracionProductoController');
Route::resource('restauracion/proveedor','RestauracionProveedorController');
Route::resource('restauracion/cliente','RestauracionClienteController');
Route::resource('restauracion/ingreso','RestauracionIngresoController');
Route::resource('restauracion/venta','RestauracionVentaController');
Route::resource('/store','TiendaController');
Route::resource('Perfil/edit','PrefileController@edit');
Route::resource('Perfil/show','PrefileController@show');
Route::resource('Perfil','PrefileController@update');
Route::get('/home', 'ExcelController@index')->name('home');
Route::post('/import-excel', 'ExcelController@importFile');
Route::post('/export', 'ExcelController@store');
