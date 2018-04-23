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
    //return redirect()->route('companies.index');
});

Route::resource('members','MemberController');

Route::resource('companies', 'CompaniesController');
Route::resource('employees', 'EmployeesController');

Route::get('user','UserController@index');

//------------------------------------------------

Route::prefix('admin')->group(function () {

	Route::get('dashboard','AdminController@dashboard');

	Route::get('/','AdminController@index');

	Route::get('/login','LoginController@index');

});


//Route::get('admin','AdminController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
