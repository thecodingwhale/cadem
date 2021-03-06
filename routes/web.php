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
Route::resource('admin/users', 'Admin\\UsersController');
Route::resource('admin/schools', 'Admin\\SchoolsController');
Route::resource('admin/subjects', 'Admin\\SubjectsController');
Route::resource('admin/courses', 'Admin\\CoursesController');
Route::resource('admin/curriculum', 'Admin\\CurriculumController');

Route::resource('admin/enrollment', 'Admin\\EnrollmentController');
