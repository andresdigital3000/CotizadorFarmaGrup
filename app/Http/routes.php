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

Route::auth();
Route::get('/', 'HomeController@index');
Route::resource('usuario','UsuarioController');
Route::resource('perfiles','PerfilesController');
Route::resource('dependencias','DependenciasController');
Route::resource('paginas','PaginasController');
Route::resource('menus','MenusController');
Route::resource('clientes','ClientesController');
Route::resource('proveedores','ProveedoresController');
Route::resource('productos','ProductosController');
Route::resource('cotizaciones','CotizacionesController');
Route::resource('reportes','ReportesController');