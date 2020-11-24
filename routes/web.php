<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', 'HelloController@hello');
Route::get('/tic', 'HelloController@tic');
