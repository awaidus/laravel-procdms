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

Route::group(['middleware' => ['web']], function () {
    Route::resource('order', 'OrderController', ['names' => [
        'create' => 'order.show',
        'edit' => 'order.show',
        'destroy' => 'order.destroy'
    ]]);
});

//Route::get('/', 'OrderController@index');

Route::get('/orderList', function () {
    return App\Order::withTrashed()->with('local_supplier', 'foreign_supplier')->get();
});

Route::get('/orders', 'OrderController@index')->name('home');
Route::get('/order/show/{id?}', 'OrderController@show')->name('showOrder');
Route::post('/order/store', 'OrderController@store')->name('storeOrder');
Route::delete('/order/destroy/{id}', 'OrderController@destroy')->name('destroyOrder');
Route::post('/order/restore/{id}', 'OrderController@restore')->name('restoreOrder');

