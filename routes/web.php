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
Route::get('activiteiten', 'PagesController@indexActiviteiten');
Route::get('bijengezondheid', 'PagesController@Indexbijengezondheid');
Route::get('bijenstal', 'PagesController@indexBijenstal');
Route::get('contact', 'PagesController@indexContact');
Route::get('cursussen', 'PagesController@indexCursussen');
Route::get('fotosvideos', 'PagesController@indexFotosvideos');
Route::get('lidworden', 'PagesController@indexLidworden');
Route::get('nieuws', 'PagesController@indexNieuws');
Route::get('vereniging', 'PagesController@indexVereniging');
Route::get('winkel', 'PagesController@indexWinkel');
Route::get('zwermgezien', 'PagesController@indexZwermgezien');
Route::get('stretselaar', 'PagesController@indexStretselaar');
Route::get('/adminpanel', 'PagesController@adminpanel');
Route::post('/adminpanel', 'PagesController@editPost');
