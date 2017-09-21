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
Route::get('/forbidden', 'StaticController@forbidden');
Route::get('/lost', 'StaticController@lost');


Route::get('/item', 'ItemController@index');
Route::get('/item/new', 'ItemController@new'); // It MUST above the '/item/{id}'
Route::post('/item/new', 'ItemController@create');
Route::get('/item/{id}/edit', 'ItemController@edit');
Route::put('/item/{id}/edit', 'ItemController@update');
Route::get('/item/{id}/delete', 'ItemController@delete');
Route::delete('/item/{id}/delete', 'ItemController@destroy');
Route::get('/item/{id}', 'ItemController@show');

Route::get('/item/{id}/order', 'OrderController@new');
Route::post('/item/{id}/order', 'OrderController@create');

Route::get('/logout', 'UserController@logout');
Auth::routes();

Route::get('/home', 'UserController@home')->name('home');
Route::get('/home/item', 'UserController@item');

Route::get('/order', 'OrderController@index');
Route::get('/order/{id}', 'OrderController@show');

Route::get('/order/{id}/pay', 'PaymentController@show');
Route::post('/order/{id}/pay', 'PaymentController@pay');
