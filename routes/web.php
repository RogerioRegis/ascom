<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/perfil', 'PerfilController@index');

Route::get('/demandas', 'DemandasController@index');

Route::get('/deadlines', 'DeadlinesController@index');

Route::get('/entrevistas', 'EntrevistasController@index');

Route::get('/calendario', 'CelendarioController@index');

Route::get('/relatorios', 'RelatoriosController@index');
