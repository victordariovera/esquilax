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

/*
Route::get('/', function () {
    return view('welcome');
});

*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/guardias', 'HomeController@guardias')->name('guardias');
Route::get('/integraciones', 'HomeController@integraciones')->name('integraciones');
Route::get('/remediaciones', 'HomeController@remediaciones')->name('remediaciones');
Route::get('/ajustes', 'HomeController@configuracion')->name('configuracion');
