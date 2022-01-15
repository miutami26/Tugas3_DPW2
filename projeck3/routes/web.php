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

Route::get('/', function () {
    return view('welcome');
});

Route::get('template', function () {
    return view('template.base');
});


Route::get('beranda', function () {
    return view('beranda');
});

Route::get('produk', function () {
    return view('produk');
});

Route::get('katagori', function () {
    return view('katagori');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('main', function () {
    return view('main');
});

Route::get('kontak', function () {
    return view('kontak');
});

Route::get('produk1', function () {
    return view('produk1');
});

Route::get('produk2', function () {
    return view('produk2');
});

Route::get('produk3', function () {
    return view('produk3');
});





