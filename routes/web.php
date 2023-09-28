<?php

use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Facade\Cookie;
use hisorange\BrowserDetect\Parser as Browser;

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
    $isDesktop = Browser::isDesktop();
    if(!$isDesktop){
        return view('homeMobile');
    }else{
        return view('home');
    }
});

Route::get('/about', function () {
    $isDesktop = Browser::isDesktop();
    if(!$isDesktop){
        return view('aboutMobile');
    }else{
        return view('about');
    }
});

Route::get('/votes', function () {
    $isDesktop = Browser::isDesktop();
    if(!$isDesktop){
        return view('vote1Mobile');
    }else{
        return view('vote1');
    }
});

Route::get('/vouchers', function () {
    $isDesktop = Browser::isDesktop();
    if(!$isDesktop){
        return view('vouchersMobile');
    }else{
        return view('vouchers');
    }
});

Route::get('/contact', function () {
    $isDesktop = Browser::isDesktop();
    if(!$isDesktop){
        return view('contactMobile');
    }else{
        return view('contact');
    }
});