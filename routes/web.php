<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
    // return view('home', "HomeControler@index");
// });

Route::group(["prefix"=> "payment"], function(){
    Route::get("index", "PaymentsController@index");
    Route::post('cart', 'PaymentsController@cart');
    Route::get('checkout', 'PaymentsController@checkout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/stripe', 'PaymentsController@payWithCard')->name('stripe.pay');
Route::get('/search','HomeController@search');


Route::get('/', 'HomeController@index');
