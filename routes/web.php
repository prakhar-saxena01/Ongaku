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

Route::get('/', 'HomepageController@index')->name('homepage');

Route::get('/fbsub', 'LoginController@fbsubmit');
Route::get('/fbres', 'LoginController@fbres');
Route::get('/albums-store', 'AlbumstoreController@index')->name('album-store');
Route::get('/news', 'NewsController@index')->name('news');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/elements', 'ElementsController@index')->name('elements');
Route::get('/events', 'EventsController@index')->name('events');
Route::get('/index', 'IndexController@index')->name('index');
Route::get('/logout', 'LoginController@logout');
Route::get('login', 'LoginController@login');
Route::get('/music-player', 'MusicPlayerController@musicplayer')->name('musicplayer');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




