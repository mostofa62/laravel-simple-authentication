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

Route::get('/', array('uses' => 'HomeController@index'))->middleware('auth');

// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'))->name('login');;

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));


Route::any('logout', 'HomeController@logout')->middleware('auth');
