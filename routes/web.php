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
    return view('index');
});
Route::get('/', 'LoginController@index');
Route::get('Login', 'LoginController@index');
Route::get('ApplyOnline', 'ApplyOnlineController@index');
Route::get('SchoolRegistration', 'ApplyOnlineController@schoolRegistration');