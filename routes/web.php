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
    return view('welcome');
});
Auth::routes();

//user
Route::get('/users', 'UserController@index')->name('users');
Route::get('/users/create', 'UserController@create')->name('users.create');
Route::post('/users/create', 'UserController@store')->name('users.store');

//article
Route::get('/articles', 'ArticleController@index')->name('articles');
Route::get('/articles/create', 'ArticleController@create')->name('articles.create');
Route::post('/articles/create', 'ArticleController@store')->name('articles.store');
Route::get('/articles/search/{user_id}', 'ArticleController@search')->name('articles.search');

Route::get('/home', 'HomeController@index')->name('home');
