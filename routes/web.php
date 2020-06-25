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
    return view('pages.home');
});

Route::get('activiteiten', 'activiteitenController@getContent');

Route::get('/agenda', function () {
    return view('pages.agenda');
});

Route::get('/bijengezondheid', function () {
    return view('pages.bijengezondheid');
});

Route::get('bijenstal', 'bijenstalController@getContent');


Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/cursussen', function () {
    return view('pages.cursussen');
});

Route::get('/fotosvideos', function () {
    return view('pages.fotosvideos');
});

Route::get('/lidworden', function () {
    return view('pages.lidworden');
});

Route::get('/nieuws', function () {
    return view('pages.nieuws');
});

Route::get('/vereniging', function () {
    return view('pages.vereniging');
});

Route::get('/winkel', function () {
    return view('pages.winkel');
});

Route::get('/zwermgezien', function () {
    return view('pages.zwermgezien');
});

Route::get('/stretselaar', function () {
    return view('pages.stretselaar');
});
