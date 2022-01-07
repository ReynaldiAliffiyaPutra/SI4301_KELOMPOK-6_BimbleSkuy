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
    return view('LandingPage');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/berlangganan', function () {
    return view('berlangganan');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/program', function () {
    return view('program');
});

