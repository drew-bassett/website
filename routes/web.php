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

Route::get('/newcastle', function () {
    return view('newcastle');
});

Route::get('/york', function () {
    return view('york');
});

Route::get('/coe', function () {
    return view('coe');
	
});
Route::get('/tryhackme', function () {
    return view('tryhackme');
});

Route::get('/cpd', function () {
    return view('cpd');
});

Route::get('/roxy', function () {
    return view('roxy');
});
