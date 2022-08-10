<?php

use App\Http\Controllers\Akun\MenuRoleController;
use App\Http\Controllers\Akun\ProfilSayaController;
use App\Http\Controllers\Akun\RoleController;
use App\Http\Controllers\Akun\UsersController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\Autentikasi\LoginController;
use App\Http\Controllers\Blog\KategoriController;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\Blog\TagController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\Home\TestimonialController;
use App\Http\Controllers\IndexHomeController\VideoHomeController;
use App\Http\Controllers\IndexHomeController\BenefitHomeController;
use App\Http\Controllers\IndexHomeController\BlogHomeController;
use App\Http\Controllers\IndexHomeController\CarouselCaptionController;
use App\Http\Controllers\InformasiLoginController;
use App\Http\Controllers\ProfilPerusahaanController;
use App\Http\Controllers\IndexHomeController\TestimonialHomeController;
use App\Http\Controllers\LandingPageBlogController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LowonganKerjaController;
use App\Http\Controllers\ParnertController;
use App\Http\Controllers\Pengaturan\BenefitController;
use App\Http\Controllers\Pengaturan\CarouselController;
use App\Http\Controllers\Pengaturan\VisiMisiController;
use App\Http\Controllers\Solusi\KategoriSolusiController;
use App\Http\Controllers\Solusi\SolusiController;
use Illuminate\Support\Facades\Auth;

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

Route::get("admin/coba", function () {
    echo "ada";
})->middleware("cek_role");

Route::get("/coba-template", function () {
    return view("admin.layouts.template");
});

Route::get("/", [LandingPageController::class, "dashboard"]);
Route::get("/solusi/{slug}", [LandingPageController::class, "solusi"]);
Route::get("/about_us", [LandingPageController::class, "about_us"]);
Route::get("/contact_us", [LandingPageController::class, "contact_us"]);
Route::get("/why_us", [LandingPageController::class, "why_us"]);
Route::get("/study_case", [LandingPageController::class, "study_case"]);
Route::prefix("blog")->group(function () {
    Route::get("/event", [LandingPageBlogController::class, "event"]);
    Route::get("/berita", [LandingPageBlogController::class, "berita"]);
    Route::get("/berita/{slug}", [LandingPageBlogController::class, "detail_berita"]);
    Route::get("/lowongan_kerja", [LandingPageBlogController::class, "lowongan_kerja"]);
});

Route::post("/kirim_komentar", [LandingPageController::class, "kirim_pesan"]);

Route::get('/getstarted', function () {
    return view('layouts.partials.menu.get-started');
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


Route::get('inner-page', function () {
    return view('component.inner-page');
});

Route::get('portofolio-details', function () {
    return view('component.portfolio-details');
});

Route::get('solution', function () {
    return view('layouts.partials.menu.solution');
});

Route::get('business-solutions', function () {
    return view('layouts.partials.menu.submenu.business-solutions');
});

Route::get('study-case', function () {
    return view('layouts.partials.menu.study-case');
});

Route::get('single_partner', function () {
    return view('layouts.partials.menu.submenu.single_partner');
});

Route::get('blog-coba', function () {
    return view('layouts.partials.menu.blog-coba');
});

Route::get('why-us-details1-', function () {
    return view('layouts.partials.menu.why-us-details1-');
});

//sub menu blog
Route::get('blog-press', function () {
    return view('layouts.partials.menu.submenu.blog-press');
});

Route::get('blog-lowongan-kerja', function () {
    return view('layouts.partials.menu.submenu.blog-lowongan-kerja');
});

Route::get('blog-single', function () {
    return view('layouts.partials.menu.submenu.blog_single');
});

Route::get('free-download', function () {
    return view('layouts.partials.menu.free-download');
});

Route::get('coba-dropdown', function () {
    return view('layouts.partials.menu.coba-dropdown');
});

// Route::get('blog-event', function () {
//     return view('layouts.partials.menu.submenu.blog-event');
// });

Route::controller(FullCalenderController::class)->group(function () {
    Route::get('blog-event', 'index');
    Route::post('fullcalenderAjax', 'ajax')->middleware('auth');
});
// Route::get('login', [HomeController::class, 'login'])->name('login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('carousel-caption', CarouselCaptionController::class);
Route::resource('video-home-caption', VideoHomeController::class);
Route::resource('benefit-home-caption', BenefitHomeController::class);
Route::resource('testimonial-home-caption', TestimonialHomeController::class);
Route::resource('blog-home-caption', BlogHomeController::class);


Route::get('cobaan-index', [CarouselCaptionController::class, 'show']);

Route::prefix("admin")->group(function () {
    Route::group(["middleware" => "guest"], function () {
        // Data Login
        Route::get("/login", [LoginController::class, "login"]);
        Route::post("/post_login", [LoginController::class, "post_login"]);
    });

    Route::group(["middleware" => "autentikasi"], function () {
        Route::get("/", [AppController::class, "dashboard"]);
        Route::get("/dashboard", [AppController::class, "dashboard"]);
        Route::resource("tag", TagController::class);
        Route::resource("kategori", KategoriController::class);

        Route::prefix("blog")->group(function () {
            Route::prefix("lowongan_kerja")->group(function () {
                Route::get("/{id}/edit", [LowonganKerjaController::class, "edit"]);
                Route::put("{id}", [LowonganKerjaController::class, "update"]);
                Route::resource("/", LowonganKerjaController::class);
            });
        });

        Route::prefix("solusi")->group(function () {
            Route::prefix("kategori_solusi")->group(function () {
                Route::get("/edit", [KategoriSolusiController::class, "edit"]);
                Route::put("/simpan", [KategoriSolusiController::class, "update"]);
                Route::resource("/", KategoriSolusiController::class);
            });

            Route::prefix("solusi")->group(function () {
                Route::get("/edit", [SolusiController::class, "edit"]);
                Route::put("/simpan", [SolusiController::class, "update"]);
                Route::resource("/", SolusiController::class);
            });
        });

        Route::prefix("parnert")->group(function () {
            Route::get("/edit", [ParnertController::class, "edit"]);
            Route::put("/simpan", [ParnertController::class, "update"]);
            Route::resource("/", ParnertController::class);
        });

        Route::resource("blog", PostController::class);
        Route::resource("users", UsersController::class);
        Route::resource("profil_saya", ProfilSayaController::class);
        Route::get("informasi_login", [InformasiLoginController::class, "index"]);

        Route::resource("profil_perusahaan", ProfilPerusahaanController::class);
        Route::prefix("pengaturan")->group(function () {
            Route::post("visi_misi/tambah_visi", [VisiMisiController::class, "tambah_visi"]);
            Route::put("visi_misi/simpan_visi", [VisiMisiController::class, "simpan_visi"]);

            Route::post("visi_misi/tambah_misi", [VisiMisiController::class, "tambah_misi"]);
            Route::get("visi_misi/edit_misi", [VisiMisiController::class, "edit_misi"]);
            Route::put("visi_misi/simpan_misi", [VisiMisiController::class, "simpan_misi"]);

            Route::resource("testimonials", TestimonialController::class);
            Route::resource("visi_misi", VisiMisiController::class);
            Route::resource("carousel", CarouselController::class);

            Route::get("benefit/edit", [BenefitController::class, "edit"]);
            Route::put("benefit/simpan", [BenefitController::class, "update"]);
            Route::resource("benefit", BenefitController::class);

            Route::prefix("menu")->group(function () {
                Route::get("/{id}/edit", [MenuRoleController::class, "edit"]);
                Route::put("/{id}", [MenuRoleController::class, "update"]);
                Route::resource("/", MenuRoleController::class);
            });
        });

        Route::prefix("akun")->group(function () {
            Route::prefix("role")->group(function () {
                Route::get("edit", [RoleController::class, "edit"]);
                Route::put("simpan", [RoleController::class, "update"]);
                Route::resource("/", RoleController::class);
            });
        });

        Route::get("/hubungi_kami", [AppController::class, "hubungi_kami"]);

        Route::get("/logout", [LoginController::class, "logout"]);
    });
});
