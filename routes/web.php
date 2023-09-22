<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/vote', function () {
    return view('vote');
});

Route::get('/vote1', function () {
    return view('vote1');
});

Route::get('/vouchers', function () {
    return view('vouchers');
});

Route::get('/contact', function () {
    return view('contact');
});