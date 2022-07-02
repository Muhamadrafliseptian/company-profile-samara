<?php

use Illuminate\Routing\Route as RoutingRoute;
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
//     return view('component.index');
// });

Route::get('about-us', function() {
    return view('component.about_us');
});

Route::get('blog', function () {
    return view('component.blog');
});

Route::get('contact-us', function() {
    return view('component.contact_us');
});

Route::get('inner-page', function() {
    return view('component.inner-page');
});

Route::get('login', function() {
    return view('component.login');
});

Route::get('portofolio-details', function() {
    return view('component.portfolio-details');
});

Route::get('solutions', function() {
    return view('component.solutions');
});

Route::get('study-case', function() {
    return view('component.study-case');
});

Route::get('why-us', function() {
    return view('component.why_us');
});


Route::get('blog-coba', function () {
    return view('layouts.partials.menu.blog-coba');
});

Route::get('/', function () {
    return view('layouts.partials.menu.index-coba');
});

Route::get('about-us-coba', function () {
    return view('layouts.partials.menu.about-us-coba');
});

//sub menu blog
Route::get('blog-press', function () {
    return view('layouts.partials.menu.submenu.blog-press');
});

Route::get('blog-lowongan-kerja', function () {
    return view('layouts.partials.menu.submenu.blog-lowongan-kerja');
});

Route::get('blog-event', function () {
    return view('layouts.partials.menu.submenu.blog-event');
});
