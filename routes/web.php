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
//Route::get('/rincian_info', 'RincianInfoBatikController@index');
//Route::get('/rincian_info/{id}', 'RincianInfoBatikController@show');
Route::resource('batiks','BatikController');
Route::resource('tag_batiks','TagBatikController');
Route::resource('pola_batiks','PolaBatikController');

