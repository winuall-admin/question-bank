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
Route::match(['get'], 'register', 'Auth\RegisterController@index')->name('register');

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->middleware('isAdmin')->group(function () {
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::get('/users/{user}', 'AdminController@getUsers')->name('show_user');
});
