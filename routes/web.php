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

Route::get('/coupons', function () {
    return view('coupons');
});

Route::get('/printable', function () {
    return view('printable');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/stores', function () {
    return view('stores');
});

Route::get('/user-dashboard', function () {
    return view('user-dashboard');
});

Route::get('/user-favorites', function () {
    return view('user-favorites');
});

Route::get('/user-saved', function () {
    return view('user-saved');
});

Route::get('/user-submit', function () {
    return view('user-submit');
});

Route::get('/coupon-single', function () {
    return view('coupon-single');
});

Route::get('/store-single', function () {
    return view('store-single');
});


use App\Http\Controllers\AuthController;

Route::match(['get', 'post'], '/signin', [AuthController::class, 'signin']);
Route::get('/signout', [AuthController::class, 'signout']);

Route::get('/forget', function () { return view('forget'); });
Route::get('/signup', function () { return view('signup'); });