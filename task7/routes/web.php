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

Auth::routes();

Route::get('/', 'ProductsController@index')->name('index');

Route::get('/create', 'ProductsController@create')->name('create')->middleware('auth');

Route::post('/store', 'ProductsController@store')->name('store')->middleware('auth');

Route::get('/{product}/edit', 'ProductsController@edit')->name('edit')->middleware('auth');

Route::post('/{product}/update', 'ProductsController@update')->name('update')->middleware('auth');

Route::get('/profile/{user}', 'ProductsController@profile')->name('profile')->middleware('auth');
