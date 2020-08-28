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

Route::get('/', 'PagesController@index');
//Route::get('/tfjs', 'PagesController@tfjs');

Route::get('/users/{id}', 'PagesController@user');
Route::post('/users/about', 'PagesController@userabout');

//Auth::routes();
Route::post('logout', ['as' => 'logout','uses' => 'Auth\LoginController@logout']);
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/redirect', 'Auth\LoginController@redirectToProvider');
Route::get('/callback', 'Auth\LoginController@handleProviderCallback');

Route::resource('forum', 'TopicsController');
Route::post('forum/{id}/reply', 'TopicsController@reply');

Route::get('/levels', 'LevelsController@index');
Route::get('/levels/{id}', 'LevelsController@show');
Route::get('/levels/{id}/start', 'LevelsController@start');
Route::post('/levels/done', 'LevelsController@done');

Route::get('/stats', 'LevelsController@stats');
