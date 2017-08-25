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

Route::get('/', function(){return view('welcome');});
Route::get('/desktop', '\App\Http\Controllers\DeviceController@getDesktopForm');
Route::get('/laptop', '\App\Http\Controllers\DeviceController@getLaptopForm');
Route::get('/get-first-question', '\App\Http\Controllers\DeviceController@getFirstQuestion');
Route::post('/submit-option', '\App\Http\Controllers\DeviceController@submitOption');
Route::post('/register', '\App\Http\Controllers\DeviceController@register');

Route::get('/admin', '\App\Http\Controllers\AdminController@login');
Route::post('/login', '\App\Http\Controllers\AdminController@loginCheck');
Route::get('/home', '\App\Http\Controllers\AdminController@home');
Route::get('/logout', '\App\Http\Controllers\AdminController@logout');