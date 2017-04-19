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

Route::get('/', 'PageController@index');
Route::get('/daftar_kategori', 'PageController@list_kategori');
Route::get('/rincian_info/{id}', 'PageController@rincian_informasi');
Route::resource('batiks','BatikController');
Route::resource('tag_batiks','TagBatikController');
Route::resource('pola_batiks','PolaBatikController');


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/dashboard', 'DashboardController@home');

