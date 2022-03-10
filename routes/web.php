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
    //return view('welcome');
    return view('frontend.index');
});

Route::get('/frontend', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get("/cardpay", function(){
    return view("frontend.cardpayment");
});

Route::get("/mobilepay", function(){
    return view("frontend.mobilepayment");
});

Route::get("recentpayment", function(){
    return view("frontend.recentpayment");
});

Route::get('dashboard/my', function(){
    return view("my.myadmin");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
