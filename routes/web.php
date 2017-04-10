<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 3/17/17
 * Time: 2:32 PM
 */

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
Route::get('/show_category/{id}', 'PageController@show_category');
Route::resource('batik','BatikController');
Route::get('/rincian_info/{id}', 'PageController@rincian_informasi');
Route::get('/daftar_thread/', 'PageController@daftar_thread');
//Route::resource('batiks','BatikController');
Route::resource('tag_batiks','TagBatikController');
Route::resource('pola_batiks','PolaBatikController');
Route::resource('forum_threads','ThreadController');
Route::resource('useraccounts','UserAccountController');
Route::resource('comments','CommentController');
