<?php

use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Facade\Cookie;

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
// $screen = Cookie::get('screen');
// $screen = explode("x", $screen);
// $width = $screen[0];
// $height = $screen[0];

Route::get('/', function () {
    // $width = session('screenWidth');
    // if($width<480){
    //     return view('homeMobile');
    // }else{
    //     return view('home');
    // }
    return view('homeMobile');
});

Route::get('/about', function () {
    return view('aboutMobile');
});

Route::get('/votes', function () {
    return view('vote1');
});

Route::get('/vouchers', function () {
    return view('vouchers');
});

Route::get('/contact', function () {
    return view('contactMobile');
});