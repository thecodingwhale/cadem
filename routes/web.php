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

Route::get('/management/accounts', 'Management\AccountController@index');
Route::get('/management/accounts/{userId}/details', 'Management\AccountController@accountDetails');
Route::get('/management/accounts/create', 'Management\AccountController@create');
Route::post('/management/accounts/store', 'Management\AccountController@store');

Route::get('/management/grades/{userId}', 'Management\GradeController@index');

Route::get('/management/schools', 'Management\SchoolController@index');

Route::get('/management/subjects', 'Management\SubjectController@index');
Route::get('/management/subjects/create', 'Management\SubjectController@create');
Route::post('/management/subjects/store', 'Management\SubjectController@store');
