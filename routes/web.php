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
    return view('login');
});

Route::get('/excel', 'UsuarioController@importExport');
Route::get('/pdf', 'UsuarioController@ExportPDF');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('/usuario', 'UsuarioController');

Route::resource('/angular-usuario', 'AngularUserController');


Route::group(['prefix' => 'perfil', 'as'=>'perfil.'], function () {

	Route::resource('usuario', 'PerfilController');
});


Route::group(['prefix' => 'imagenes', 'as'=>'imagen.'], function () {

	Route::resource('usuario', 'UsuarioController');
	//Route::get('/imagen', 'UsuarioController@imagen');
	//Route::post('imagen', 'UsuarioController@imagen_store');   
	Route::resource('imagen', 'ImagenController');
});






Route::get('api',
	['uses' => function () { return "Mi Api";},
    'as'   => 'administrador'
]);	