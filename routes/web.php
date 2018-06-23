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


Route::get('/','HomePageController@index'); 

Route::get('category/{id}','HomePageController@adsByCategory');

Route::get('addPost','PostController@create');

Route::post('addPost','PostController@store');

Route::get('showDetail/{id}','HomePageController@adsDetails'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/post','admin\PostController')->middleware('isadmin');
