<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('/products', 'ProductsController');

/*
Route::get('/index', 'ProductsController@index');
Route::get('/create', 'ProductsController@create');
Route::get('/store', 'ProductsController@store');
Route::get('/update', 'ProductsController@update');
Route::get('/destroy', 'ProductsController@destroy');
*/
