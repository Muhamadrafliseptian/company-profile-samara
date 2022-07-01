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
    return view('component.index');
});

Route::get('about-us', function() {
    return view('component.about_us');
});

Route::get('study-case', function() {
    return view('component.study-case');
});

Route::get('inner-page', function() {
    return view('component.inner-page');
});

Route::get('portofolio-details', function() {
    return view('component.portfolio-details');
});
