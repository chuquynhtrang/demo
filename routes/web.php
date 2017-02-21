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

Route::group(['middleware' => 'admin', 'prefix' => 'admin', 'namespace' => 'Admin'], function() {
	Route::get('/', 'AdminController@index');

	Route::get('/profile/{user}', 'UserController@show');
	Route::put('/profile/{user}', 'UserController@update');

	Route::resource('/subjects', 'SubjectController');

	Route::resource('/groups', 'GroupController');

	Route::resource('/councils', 'CouncilController');
});