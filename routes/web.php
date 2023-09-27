<?php

use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Facade\Cookie;
// use Browser;
// use hisorange\BrowserDetect\Parser as Browser;

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

use hisorange\BrowserDetect\Parser;

Route::get('/', function () {
    $browser = new Parser(null, null, [
        'cache' => [
            'interval' => 86400 // This will override the default configuration.
        ]
    ]);
    $result = $browser->detect();
    $isDesktop = $result->isDesktop();
    if(!$isDesktop){
        return view('homeMobile');
    }else{
        return view('home');
    }
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