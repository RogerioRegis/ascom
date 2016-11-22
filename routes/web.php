<?php

use Illuminate\Http\Request;

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
//*-- Clipping da Imprensa--//
Route::resource('clipping', 'ClippingController');
Route::resource('clippingjornal', 'ClippingjornalController');
Route::resource('clippingradiotv', 'ClippingradiotvController');
Route::resource('clippingweb', 'ClippingwebController');
//*-------------------------//
Route::resource('perfil', 'PerfilController');

Route::resource('deadlines', 'DeadlinesController');
Route::resource('entrevistas', 'EntrevistasController');
Route::resource('calendario', 'CelendarioController');

Route::resource('relatorios', 'RelatoriosController');

Route::get('pdf', function () {
	$pdf = App::make('dompdf.wrapper');
	$pdf->loadHTML('<h3>RELATÓRIO DA ASSESSORIA DE COMINIÇÃO SMSA - BOA VISTA RR</h3>');
	return $pdf->download();
});

Route::get('relatorios', 'PdfController@index');
Route::get('criar_relatorio/{tipo}', 'PdfController@criar_relatorio');