<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\Route as RoutingRoute;

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

// Route::get('about-us', function() {
//     return view('component.about_us');
// });

// Route::get('blog', function () {
//     return view('component.blog');
// });

Route::get('/', function () {
    return view('layouts.partials.menu.index-coba');
});

Route::get('about-us-coba', function () {
    return view('layouts.partials.menu.about-us-coba');
});

Route::get('geosplatial-platforming', function () {
    return view('layouts.partials.menu.submenu.geosplatial-platforming');
});

Route::get('transportation-logistik', function () {
    return view('layouts.partials.menu.submenu.transportation-logistik');
});

Route::get('geosplatial-aset-management', function () {
    return view('layouts.partials.menu.submenu.geosplatial-aset-management');
});

Route::get('smart-plantation', function () {
    return view('layouts.partials.menu.submenu.smart-plantation');
});

Route::get('geosplatial-homan-resourch', function () {
    return view('layouts.partials.menu.submenu.geosplatial-homan-resourch');
});

Route::get('multimedia-ondemand', function () {
    return view('layouts.partials.menu.submenu.multimedia-ondemand');
});

Route::get('project-management', function () {
    return view('layouts.partials.menu.submenu.project-management');
});

Route::get('other-solution', function () {
    return view('layouts.partials.menu.submenu.other-solution');
});

Route::get('developer-modules', function () {
    return view('layouts.partials.menu.submenu.developer-modules');
});


Route::get('contact-us', function() {
    return view('layouts.partials.menu.contact-us');
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

Route::get('solution', function() {
    return view('layouts.partials.menu.solution');
});

Route::get('business-solutions', function() {
    return view('layouts.partials.menu.submenu.business-solutions');
});

Route::get('study-case', function() {
    return view('layouts.partials.menu.study-case');
});

Route::get('why-us', function() {
    return view('layouts.partials.menu.why-us');
});


Route::get('blog-coba', function () {
    return view('layouts.partials.menu.blog-coba');
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

Auth::routes();


// Route::get('login', [HomeController::class, 'login'])->name('login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
