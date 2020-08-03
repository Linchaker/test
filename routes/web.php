<?php

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

Route::get('/', 'Auth\RegisterController@showRegistrationForm')->name('registration');
Route::get('area', 'AreaController@index')->name('area');
Route::get('area/{link}', 'AreaController@link')->name('link')->middleware('auth');

Route::get('create-link', 'AreaController@create')->name('createLink')->middleware('auth');
Route::post('deactivate-link', 'AreaController@deactivate')->name('deactivateLink')->middleware('auth');
Route::get('play', 'AreaController@play')->name('play')->middleware('auth');
Route::get('history', 'AreaController@history')->name('history')->middleware('auth');

Route::resource('user', 'UserController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
