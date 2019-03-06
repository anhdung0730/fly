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

// index
Route::get('/', [
  'uses' => 'SearchFlightController@index',
  'as' => 'index'
]);

// flight-list
Route::get('/flight-list', [
  'uses' => 'SearchFlightController@search',
  'as' => 'search'
]);


Auth::routes();
Route::get('user/update', 'Auth\UpdateController@index')->name('user.update');
Route::post('user/update', 'Auth\UpdateController@update')->name('user.update');

Route::get('/home', 'HomeController@index')->name('home');
