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

Route::get('/BlogPost' , 'PageController@blogPost');
Route::get('/About' , 'PageController@about');
Route::get('/' , 'PageController@homeSite');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
