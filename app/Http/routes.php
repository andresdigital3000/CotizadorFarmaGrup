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

Route::get('/','FrontController@index');

Route::resource('front','FrontController');

Route::resource('empleados','EmpleadosController');
Route::post('registro',['as'=>'empleados.registro','uses'=>'EmpleadosController@registro']);
Route::post('perfil',['as'=>'empleados.perfil','uses'=>'EmpleadosController@perfil']);
Route::post('dependencia',['as'=>'empleados.dependencia','uses'=>'EmpleadosController@dependencia']);
Route::get('vperfil',['as'=>'empleados.vperfil','uses'=>'EmpleadosController@viewperfil']);
Route::get('vdependencia',['as'=>'empleados.vdependencia','uses'=>'EmpleadosController@viewdependencia']);
/*
Route::resource('empleado','EmpleadoController');

Route::resource('lara','LaravelController');
Route::resource('dependencia','DependenciaController');
Route::resource('perfil','PerfilController');
Route::resource('pagina','PaginaController');
Route::resource('perfpagi','Perf_PagiController');
Route::get('/', function () {
    return view('index');
});


Route::auth();

Route::get('/', 'HomeController@index');
*/