<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [ 'as' => 'home', 'uses' => 'PagesController@index' ]);
Route::post('/contact', 'PagesController@contact');
Route::group(['middleware' => 'auth'], function () {
	Route::get('/admin', [ 'as' => 'admin', 'uses' => 'AdminController@index' ]);
	Route::resource('works', 'WorksController', ['except' => ['index', 'show']]);
	Route::resource('posts', 'PostsController', ['except' => ['index', 'show']]);
});
Route::get('works/getmore/{excludes}', 'WorksController@getMore');
Route::get('posts/getmore/{excludes}', 'PostsController@getMore');
Route::resource('works', 'WorksController', ['only' => ['index', 'show']]);
Route::resource('posts', 'PostsController', ['only' => ['index', 'show']]);

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');
