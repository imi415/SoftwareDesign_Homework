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

Route::get('/', 'StaticController@index');
Route::get('/about', 'StaticController@about');

Route::get('/item', 'ItemController@index');
Route::get('/item/new', 'ItemController@new'); // It MUST above the '/item/{id}'
Route::post('/item/new', 'ItemController@create');
Route::get('/item/{id}', 'ItemController@show');
