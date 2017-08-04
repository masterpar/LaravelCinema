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

Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin')->name('admin');
Route::get('agregar_usuario','UsuarioController@create')->name('agregar_usuario');
//Route::delete('delete','UsuarioController@delete');

Route::resource('usuario','UsuarioController');
Route::resource('log','LogController');
Route::resource('genero','GeneroController');

Route::get('logout','LogController@logout');
