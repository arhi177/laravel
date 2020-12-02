<?php

use Illuminate\Support\Facades\Route;

Route::get('/products', 'ProductController@all')->name('products');
Route::get('/product/add', 'ProductController@formAdd')->name('product.add');
Route::post('/product/add', 'ProductController@add');    
Route::get('/product/delete/{id}','ProductController@remove');
Route::post('/product/find', 'ProductController@search');