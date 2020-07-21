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

/*      Example View
Route::get('/', function () {
    return view('welcome');
});
*/



/*      Practice views with Bootstrap
Route::get("/", "PruebaController@index");
Route::get("/create", "PruebaController@create");
Route::get("/articles", "PruebaController@store");
Route::get("/show", "PruebaController@show");
Route::get("/contact", function(){
    return view("contact");
});
Route::get("/galery", "PruebaController@galery");
*/



/*      Row SQL Query
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
Route::get('/update', function(){
    DB::update("UPDATE articles SET section='Decoracion' WHERE ID=?", [1]);
});
Route::get('/delete', function(){
    DB::delete("DELETE FROM articles WHERE ID=?", [1]);
});
*/



/*      ORM Eloquent
use App\Article;

Route::get('/select', function(){
    $articles = Article::all();
    foreach ($articles as $article) {
        echo "Nombre: " . $article->name_article . "<br>" . " Precio: " . $article->price;
    }
});
Route::get('/search', function(){
    $articles = Article::where('made_in', 'Japon')
                        ->orderBy('name_article', 'desc')
                        ->take(10)
                        ->get();
    foreach ($articles as $article) {
        echo "ID: " . $article->id . "<br>"
            . " Nombre: " . $article->name_article . "<br>"
            . " Hecho en: " . $article->made_in;
    }
});
Route::get('/insert', function(){
    $article = new Article;
    $article->name_article = "Pantalones";
    $article->price = 2.4;
    $article->made_in = "China";
    $article->section = "Vestuario";
    $article->comments = "Vestuario Oriental";

    $article->save();
});
Route::get('/update', function(){
    $article = Article::find(2);
    $article->comments = "Época Feudal";

    $article->save();
});
Route::get('/massupdate', function(){
    Article::where('section', 'Ceramica')
            ->where('made_in', 'Japon')
            ->update(['section'=>'Decoracion']);
});
Route::get('/delete', function(){
    $article = Article::find(2);
    $article->delete();
});
Route::get('/deleteByCriteria', function(){
    Article::where('section', 'vestuario')
            ->delete();
});
Route::get('/insertSeveral', function(){
    Article::create(['name_article'=>"Camisas", 'price'=>15.5,
                    'made_in'=>'Colombia', 'section'=>'Vestuario',
                    'comments'=>"Ropa"]);
});
Route::get('/softDelete', function(){
    Article::find(4)
            ->delete();
});
Route::get('/selectOnlyTrashed', function(){
    $article = Article::onlyTrashed()
                        ->where('id',4)
                        ->get();
    return $article;
});
Route::get('/restore', function(){
    $article = Article::onlyTrashed()
                        ->where('id',4)
                        ->restore();
});
Route::get('/forceDelete', function(){
    $article = Article::onlyTrashed()
                        ->where('id',4)
                        ->forceDelete();
});
*/



/*      Relaciones entre tablas       */
use App\Client;
use App\Article;
use App\Role;
use App\Opinion;

Route::get('/client/{id}/article', function($id){
    return Client::find($id)->article;
});
Route::get('/article/{id}/client', function($id){
    return Article::find($id)->client;
});
Route::get('/{id}/articles', function($id){
    $articles = Client::find($id)->articles
                                ->where('made_in', 'Japon');
    foreach ($articles as $article) {
        echo $article->name_article . "<br>";
    }
});
Route::get('/client/{id}/role', function($id){
    $client = Client::find($id);
    foreach ($client->roles as $role) {
        return $role->name_role;
    }
});
Route::get('/role/{id}/client', function($id){
    $role = Role::find($id);
    foreach ($role->clients as $client) {
        echo $client->name_client . "<br>";
    }
});
Route::get('/opinionsClient', function(){
    $client = Client::find(2);
    foreach ($client->opinions as $opinion) {
        return $opinion->opinion;
    }
});
Route::get('/opinionsArticle', function(){
    $article = Article::find(2);
    foreach ($article->opinions as $opinion) {
        return $opinion->opinion;
    }
});
