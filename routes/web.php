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

Route::get('/','IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'HomeController@users')->name('users');
Route::get('/leagues', 'HomeController@leagues')->name('leagues');
Route::post('/leagues/Store', 'HomeController@lstore')->name('league.add');
Route::post('/Categories/Store', 'HomeController@cstore')->name('categories');
Route::post('/Subscribers', 'HomeController@sstore')->name('subscribers');
Route::post('/Games/Store', 'HomeController@gStore')->name('games.post');
Route::get('/leagues/All', 'HomeController@AllLeagues')->name('leagues.all');
Route::get('/Categories/All', 'HomeController@categories')->name('categories.add');
Route::get('/AllGames', 'HomeController@AllGames')->name('AllGames.view');
Route::get('/Categories', 'HomeController@AllCategories')->name('categories.all');
Route::get('/viewers', 'HomeController@viewers');
Route::get('/Allviewers', 'HomeController@allViewers');
Route::get('/AddGames', 'HomeController@games');
Route::get('/flush/{id}', 'HomeController@destroy')->name('flush');
Route::get('/UpdateGame/{id}/{code}', 'HomeController@update')->name('ugame');
