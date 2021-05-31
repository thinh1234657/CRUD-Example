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
    return view('master');
});

Route::resource('categories', \App\Http\Controllers\CategoryController::class);
Route::resource('products', \App\Http\Controllers\ProductController::class);


Route::get('pay' , 'App\Http\Controllers\PayOrderController@store');
Route::get('account' , 'App\Http\Controllers\AccountController@store');
Route::get('payment-form','App\Http\Controllers\PaymentFormController@store');