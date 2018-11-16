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

// Route::get('/profile', 'ProfileController@index');
// Route::post('/profile', 'ProfileController@store');
// Route::resource('/photos', 'PhotosController', ['only' => ['create', 'store']]);
// Route::resource('/posts', 'PostsController', ['only' => ['create', 'store']]);
Route::get('/', 'PostsController@index');
Route::get('rando', 'PostsController@rando');
Route::get('create', 'PostsController@create');
Route::post('create', 'PostsController@store');
Route::get('edit/{id}', 'PostsController@edit');
Route::post('edit', 'PostsController@update');
Route::get('delete/{id}', 'PostsController@show');
Route::post('delete', 'PostsController@delete');

Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@store');

Route::get('pcreate', 'PathController@create');
Route::post('pcreate', 'PathController@store');