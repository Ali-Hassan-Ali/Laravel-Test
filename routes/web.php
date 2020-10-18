<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('index');
Route::get('home', 'HomeController@home')->name('home');
Route::get('company', 'HomeController@company')->name('company');
Route::get('category', 'HomeController@category')->name('category');


Route::get('logoute', 'HomeController@logoute')->name('logoute');

Route::get('/login', function () {
    return view('auth.login');
});/*return view Login*/

Route::get('/register', function () {
    return view('auth.register');
});/*return view Register*/

Auth::routes();

