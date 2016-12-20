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

Event::listen('illuminate.query', function ($query) {
//    var_dump($query);
});

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'OrderController@index');
Route::get('/orders', 'OrderController@index')->name('home');
Route::get('/order/show/{id?}', 'OrderController@show')->name('showOrder');
Route::put('/order/store', 'OrderController@store')->name('storeOrder');
