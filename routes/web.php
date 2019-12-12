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

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::get('/home', 'HomeController@index')->name('home');


Route::get('/First', 'FirstController@index');
Route::get('/', 'FirstController@homepage');
Route::post('/registration', 'CustomerController@store');
Route::post('/signin', 'CustomerController@authenticate');
Route::get('/parcel', 'FirstController@Parcel');
Route::get('/courier', 'FirstController@Courier');
Route::get('/us', 'FirstController@contact');
Route::get('/register', 'FirstController@register');
Route::get('/admin_signin', 'AdminController@index');
Route::post('/SigninPerform', 'AdminController@authenticate');
Route::get('/branch', 'FirstController@branch');
Route::get('/request', 'ParcelRequestController@index');
Route::post('/requestStore', 'ParcelRequestController@store');
