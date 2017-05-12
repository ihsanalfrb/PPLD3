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
Route::get('/categories', 'PageController@categories');
Route::get('/show_tag/{id}', 'PageController@show_tag');
Route::get('/rincian_info/{id}', 'PageController@rincian_informasi');
Route::get('/rincian_info/', 'PageController@rincian_informasi');
Route::get('/daftar_thread/', 'PageController@daftar_thread');
Route::get('/daftar_thread/', 'PageController@daftar_thread');

Route::resource('forum_threads','ThreadController');
Route::resource('comments','CommentController');
Route::resource('identify','IdentifyBatikController');

//Route::resource('forum_threads','ThreadController');
//Route::resource('useraccounts','UserAccountController');
//Route::resource('comments','CommentController');
Route::get('/daftar_batik/{cluster}/{asal_daerah}/{tag}', 'PageController@daftar_batik_filter');
Route::get('/daftar_batik/cluster/{cluster}', 'PageController@daftar_batik_cluster');
Route::get('/daftar_batik/cluster', 'PageController@daftar_batik_uncategorized');
Route::get('/daftar_batik/asal/{asal_daerah}', 'PageController@daftar_batik_daerah');
Route::get('/daftar_batik/tag/{tag}', 'PageController@daftar_batik_tag');
Route::get('/daftar_batik/', 'PageController@daftar_batik_all');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/dashboard', 'DashboardController@home');
Route::get('/search_batik/{keywords?}', 'PageController@search_batik');
