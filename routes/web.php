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

Route::get('/', 'PagesController@home');
//Route::get('/home', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('users/register', 'Auth\RegisterController@register');
Route::get('users/logout', 'Auth\LoginController@logout');
Route::get('users/login', 'Auth\LoginController@showLoginForm');
Route::post('users/login', 'Auth\LoginController@login');

Route::group(array('middleware' => 'manager'), function () {
    Route::get('/create', 'InformationController@create');
    Route::post('/create', 'InformationController@store');
    Route::get('/information', 'InformationController@index');
    Route::get('/information/{slug?}', 'InformationController@show');
    Route::get('/information/{slug?}/edit','InformationController@edit');
    Route::post('/information/{slug?}/edit','InformationController@update');
    Route::post('/information/{slug?}/delete','InformationController@destroy');
});

