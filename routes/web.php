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

Route::resource('demandas', 'DemandasController');

Route::resource('clipping', 'ClippingController');
Route::resource('clippingjornal', 'ClippingJornalController');
Route::resource('clippingradiotv', 'ClippingRadiotvController');
Route::resource('clippingweb', 'ClippingWebController');

Route::resource('perfil', 'PerfilController');

Route::resource('deadlines', 'DeadlinesController');

Route::resource('entrevistas', 'EntrevistasController');

Route::resource('calendario', 'CelendarioController');

Route::resource('relatorios', 'RelatoriosController');
