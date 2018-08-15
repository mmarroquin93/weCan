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
Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog/{titulo}', 'Posts@getpost');

Route::get('/contactanos', function () {
    return view('contact-us');
});



Route::get('/tienda','Tienda@listar');



//blog

Route::get('/controlpanel/blog', 'Posts@listar');

Route::get('/controlpanel/nuevopost', function () {
    return view('controlpanel.newpost');
});

Route::post('/controlpanel/nuevopost/add','Posts@add');

Route::get('/ejemplito','Posts@listar');

//termina blog



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
