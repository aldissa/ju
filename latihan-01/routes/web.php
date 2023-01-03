<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'UserController@home')->name('home');

Route::get('/detail/{produk}', 'UserController@detail')->name('detail');

Route::get('/login', 'UserController@login')->name('login');
Route::post('/postlogin', 'UserController@postlogin')->name('postlogin');

Route::get('/reg', 'UserController@reg')->name('reg');

Route::get('/keranjang', 'UserController@keranjang')->name('keranjang');

Route::get('/bayar', 'UserController@bayar')->name('bayar');

Route::get('/summary', 'UserController@summary')->name('summary');
