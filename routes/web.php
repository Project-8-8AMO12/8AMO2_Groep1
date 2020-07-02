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

//Route::get('/', function () {
//    return view('pages.home');
//});

Route::get('/', 'PagesController@index');


Route::get('activiteiten', 'PagesController@activiteitenArticles');

Route::get('/agenda', function () {
    return view('pages.agenda');
});

Route::get('/bijengezondheid', function () {
    return view('pages.bijengezondheid');
});

Route::get('/bijenstal', 'PagesController@bijenstalArticles');


Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/cursussen', 'PagesController@cursussenArticles');

Route::get('/fotosvideos', 'PagesController@fotosvideosArticles');

Route::get('/lidworden', function () {
    return view('pages.lidworden');
});

Route::get('/nieuws', function () {
    return view('pages.nieuws');
});

Route::get('/vereniging', 'PagesController@verenigingArticles');

Route::get('/winkel', 'PagesController@winkelArticles');

Route::get('/zwermgezien', function () {
    return view('pages.zwermgezien');
});

Route::get('/stretselaar', function () {
    return view('pages.stretselaar');
});

Route::get('/adminpanel', 'PagesController@adminpanel');
Route::post('/adminpanel', 'PagesController@editPost');
