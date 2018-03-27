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

Route::group(['middleware' => ['web']], function () {

    // Route::get('/', function () {
    //     return view('welcome');
    // });

    Route::get('/','Lms@login');

    Route::post('/checklogin','LoginController@checklogin');

    Route::get('/home','Lms@home');

    Route::get('/logout','Lms@logout');

});
