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

Route::get('products', 'ProductsController@index')->name('products-index');
Route::post('products/add', 'ProductsController@add')->name('product-add');
Route::get('products/list', 'ProductsController@list')->name('products-list');
Route::get('products/update/{id}', 'ProductsController@update')->name('products-update');