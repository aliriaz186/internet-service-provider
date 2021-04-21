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
Auth::routes();
Route::get('/', "UserController@home");
Route::get('/pricing', "UserController@pricing");
Route::get('/aboutus', "UserController@aboutus");
Route::get('/services', "UserController@services");
Route::get('/contactus', "UserController@contactus");
Route::post('send-email', "UserController@sendEmail");

