<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/settings/profile', 'SettingsController@profile');
Route::get('/management/users', 'Management\UserController@index');
Route::get('/management/users/create', 'Management\UserController@create');
Route::post('/management/users/store', 'Management\UserController@store');
