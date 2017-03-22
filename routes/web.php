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
Route::resource('batik','BatikController');
