<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get( '/login', 'App\Http\Controllers\LoginController@index');
Route::get( '/hello', 'App\Http\Controllers\HelloController@index');
Route::get('/categories', 'App\Http\Controllers\CategoryController@index');