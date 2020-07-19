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

Route::get("/", "PruebaController@index");
Route::get("/create", "PruebaController@create");
Route::get("/articles", "PruebaController@store");
Route::get("/show", "PruebaController@show");

Route::get("/contact", function(){
    return view("contact");
});

Route::get("/galery", "PruebaController@galery");

Route::get('/insert', function(){
    DB::insert("INSERT INTO articles (name_article, price, made_in, section, comments)
    VALUES (?,?,?,?,?)", ['Jarron',15.5,'Japon','Ceramica','Época feudal']);
});

Route::get('/select', function(){
    $resultados = DB::select("SELECT * FROM articles WHERE ID=?", [1]);
    foreach ($resultados as $article) {
        return $article->name_article . " " . $article->price;
    }
});
