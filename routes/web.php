<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::post('/login', 'App\Http\Controllers\LoginController@auth');

Route::get('/Inventory', 'App\Http\Controllers\InventoryController@index');

Route::get('/register', 'App\Http\Controllers\RegisterController@index');
