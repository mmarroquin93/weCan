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

Route::get('/', function () {
    return view('index');
});
Route::get('/nosotros', function () {
    return view('about');
});
Route::get('/galeria', function () {
    return view('services');
});
Route::get('/gracias-a-ti', function () {
    return view('index');
});
Route::get('/servicios', function () {
    return view('error');
});
Route::get('/blog', 'Posts@postsblog');
Route::get('/blog/tag/{url}', 'Tags@tagindex');

Route::get('/blog/{titulo}', 'Posts@getpost');

Route::get('/contactanos', function () {
    return view('contact-us');
});



Route::get('/tienda','Tienda@listar');



//blog

Route::get('/controlpanel/blog', 'Posts@listar')->name('blog');


Route::get('/controlpanel/nuevopost', 'Posts@addshow');

Route::post('/controlpanel/nuevopost/add','Posts@add');

Route::get('/ejemplito','Posts@listar');


Route::get('blogsearch','SearchController@search');

//termina blog

//categorias
Route::get('/controlpanel/blog/categorias', 'Categories@listar')->name('categorias');
Route::get('/controlpanel/blog/categorias/new', 'Categories@addview');
Route::post('/controlpanel/blog/categorias/add', 'Categories@add');
Route::get('/controlpanel/blog/categorias/modificar/{id}', 'Categories@updateview');
Route::post('/controlpanel/blog/categorias/modificar', 'Categories@update');
//termina categorias

//Tags
Route::get('/controlpanel/blog/tags', 'Tags@listar')->name('tags');
Route::get('/controlpanel/blog/tags/new', 'Tags@addview');
Route::post('/controlpanel/blog/tags/add', 'Tags@add');
Route::get('/controlpanel/blog/tags/modificar/{id}', 'Tags@updateview');
Route::post('/controlpanel/blog/tags/modificar', 'Tags@update');
//termina Tags

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
