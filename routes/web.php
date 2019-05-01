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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/lamanjualan', function () {
    return view('lamanjualan');
});

Route::get('/password', function () {  //inituh buat forgot password
    return view('password');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/display', function () {
    return view('display');
});

Route::get('/forgot', function () {
    return view('forgot');
});

Route::get('/gantipassword', function () { //buat ganti kata sandi waktu lupa password
    return view('gantipassword');
});

Route::get('/upload', function () {  //inituh buat forgot password
    return view('upload');
});

Route::get('/beli', function () {
    return view('beli');
});

Route::get('/editbuku', function () {
    return view('editbuku');
});

Route::get('/editprofile', function () {
    return view('editprofile');
});