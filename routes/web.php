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

Route::resource('status', 'StatusController');
Route::resource('course', 'CourseController');
Route::resource('student', 'StudentController');
Route::resource('marital_status', 'Marital_statusController');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
