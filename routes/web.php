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
    return view('welcome');
});

Route::post('/registrar', 'HomeController@registrar')->name('registrar')->middleware('guest');


Auth::routes();
Route::middleware(['auth', 'active'])->group(function () {

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/perfil', 'HomeController@perfil')->name('perfil');
Route::post('/home', 'HomeController@perfilPost')->name('perfilPost');
Route::post('/retirar', 'HomeController@retirarPost')->name('retirarPost');
Route::post('/editar', 'HomeController@editarPost')->name('editarPost');

});

Route::post('/reenviar', 'HomeController@reenviar')->name('reenviar')->middleware('auth');
Route::get('/verificar', 'HomeController@verificar')->name('verificar')->middleware('auth');
Route::get('/verificar/{code}', 'HomeController@activar')->name('activar')->middleware('auth');

Route::get('/{code}', 'HomeController@referido')->name('referido')->middleware('guest');
Route::post('/referido', 'HomeController@referidoPost')->name('referidoPost')->middleware('guest');

Route::get('/prueba/info', 'HomeController@prueba');
