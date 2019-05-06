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
Route::get('/','utazasController@index');
Auth::routes();

Route::get('/uj','utazasController@ujShow');
Route::post('/uj', 'utazasController@store');

Route::get('/home', 'HomeController@index')->name('home');
Route:: get('/utazas/{id}', 'utazasController@show');
Route::post('/auth/register', 'RegisterController@create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/jelentkezes/{id}', 'utazasController@joinTravel');
Route::post('/lemond/{id}', 'utazasController@utazastLemond');
