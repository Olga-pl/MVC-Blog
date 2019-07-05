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

Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('/comment/create/{id}', 'CommentController@create')->name('my.comment.create');
Route::get('/comment/store/{id}', 'CommentController@store')->name('my.comment.store');
Route::post('/comment/store/{id}', 'CommentController@store')->name('my.comment.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inscription', 'Auth\RegisterController@showRegistrationForm')->name('inscription');
Route::post('/inscription', 'Auth\RegisterController@register')->name('inscription');

// Route::get('/user/{id}/delete', 'Auth\RegisterController@destroy')->name('user.destroy');
// Route::post('/user/{id}/delete', 'Auth\RegisterController@destroy')->name('user.destroy');

Route::get('/billet/new', 'PostsController@create');
Route::get('billet/{id}/edit', 'PostsController@edit'); 
Route::resource('posts', 'PostsController');
Route::resource('comment', 'CommentController');