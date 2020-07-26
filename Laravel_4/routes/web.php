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
    /*if(Auth::check()){
        return "Ya has hecho el Login";
    }else{
        return "No has hecho Login";
    }*/

    /*$user = Auth::user();
    if ($user->isAdmin()){
        echo "ADMIN";
    }
    else{
        echo "USER";
    }*/
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index');
