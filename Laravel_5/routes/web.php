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

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    //return view('welcome');
    $data = [
        'title' => 'Curso en Laravel',
        'content' => 'Prueba de envio'
    ];
    Mail::send('email.test', $data, function($message){
        $message->to('cursoendjango@gmail.com', 'David')
                ->subject('Mensaje de Prueba');
    });
});
