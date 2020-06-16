<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/', 'UtamaController@index')->middleware('auth');

Route::group(['prefix' => 'student', 'as' => 'student.', 'middleware' => 'auth', 'namespace' => 'Student'], function () {
        Route::get('/', 'StudentController@index')->name('index');
});

Auth::routes();

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => 'auth'], function () {
        Route::get('/create', 'profileController@create')->name('create');
        Route::post('/store', 'profileController@store')->name('store');
        Route::get('/', 'ProfileController@index')->name('index');
});

Route::get('/home', 'UtamaController@index')->middleware('auth');
