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

Route::get('/home', 'WelcomeController@index');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');    <- changing to welcome page but keeping the welcome controller

Route::get('/profile', ['as' => 'profile', 'uses' => 'UserController@show']);

Route::get('/profile/edit',  ['as' => 'edit_profile', 'uses' => 'UserController@edit']);
Route::patch('/profile/update',  ['as' => 'update_profile', 'uses' => 'UserController@update']);
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
