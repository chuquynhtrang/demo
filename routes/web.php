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

	Route::get('/profile/{user}', 'UserController@profile');
	Route::put('/profile/{user}', 'UserController@updateProfile');

	Route::resource('/subjects', 'SubjectController');

	Route::resource('/groups', 'GroupController');

	Route::resource('/councils', 'CouncilController');

	Route::resource('/projects', 'ProjectController');

	Route::resource('/forms', 'FormController');

	Route::get('/users/{role}', 'UserController@index');
	Route::get('/users/{role}/create', 'UserController@create');
	Route::post('/users/{role}/store', 'UserController@store');
	Route::get('/users/{role}/show/{user}', 'UserController@show');
	Route::post('/projects/importExcel', 'ProjectController@importExcel');
	Route::post('/forms/upload', 'FormController@upload');
});

Route::group(['middleware' => 'staff', 'prefix' => 'staff', 'namespace' => 'Staff'], function() {
	Route::get('/', 'StaffController@index');
});

Route::group(['prefix' => 'user', 'namespace' => 'User'], function() {
	Route::get('/', 'UserController@index');

	Route::get('/projects', 'ProjectController@index');
	Route::get('/projects/{project}', 'ProjectController@show');
	Route::post('/projects/register/{project}', 'ProjectController@register');
	Route::get('/forms', 'FormController@index');
	Route::post('/forms/upload', 'FormController@upload');
	Route::delete('/forms/{form}', 'FormController@destroy');
});
