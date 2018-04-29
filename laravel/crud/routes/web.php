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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile', 'ProfileController@update');


Route::resource('post', 'PostController');
Route::get('myposts', 'PostController@myposts');

Route::get('ajaxtest', 'PostController@ajaxtest');
Route::post('ajaxtest', 'PostController@ajaxtest');


/*Route::get('/post/create', 'PostController@create');
Route::post('/post/create', 'PostController@create');*/
