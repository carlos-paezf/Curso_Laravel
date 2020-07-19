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

/*
Route::get('string', function() {
    return "No solo retorna vistas, tambien simples cadenas de texto";
});

Route::get('parameter/{id}', function($id){
    return "Aqui esta el parametro " . $id . " pasado en ruta";
});

Route::get('parameter/{id}/{name}', function($id, $name){
    return "Este es el id " . $id . ", con el nombre " . $name;
});

Route::get('parameter/{name?}', function($name = null){
    return "Este es un parametro opcional, el nombre es: " . $name;
});

Route::get('restrictedParameter/{id}/{name}', function ($id, $name) {
    return "Este es un parametro con restricciones y no opcional, id: " . $id .
            ", nombre: " . $name . ". Si se pasa un parametro incorrecto se vera
            una alerta de 404 | Not Found";
})->where(['id' => '[0-9]+', 'name' => '[a-zA-Z]+']);
*/

/*
Route::get('example', 'EjemploController@inicio');

Route::get('example/{id}', 'EjemploRecursosController@index');

Route::get('index/', 'PaginasController@index');
Route::get('about/', 'PaginasController@aboutUs');
Route::get('where/', 'PaginasController@whereWeAre');
Route::get('forum/', 'PaginasController@forum');
*/

Route::resource("posts", "PaginasRecursosController");
