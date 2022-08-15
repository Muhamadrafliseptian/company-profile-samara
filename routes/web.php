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
use App\Http\Controllers\Pengaturan\MenuController;
use App\Http\Controllers\Pengaturan\VisiMisiController;
use App\Http\Controllers\Solusi\GaleriSolusiController;
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

Route::get("/data_template", function () {
    return view('data_template');
});

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

Route::prefix("admin")->group(function () {
    Route::group(["middleware" => "guest"], function () {
        // Data Login
        Route::get("/login", [LoginController::class, "login"]);
        Route::post("/post_login", [LoginController::class, "post_login"]);
    });

    Route::group(["middleware" => "autentikasi"], function () {
        Route::get("/", [AppController::class, "dashboard"]);
        Route::get("/dashboard", [AppController::class, "dashboard"]);

        Route::get("/tag/edit", [TagController::class, "edit"]);
        Route::put("/tag/simpan", [TagController::class, "update"]);
        Route::resource("tag", TagController::class);

        Route::get("/kategori/edit", [KategoriController::class, "edit"]);
        Route::put("/kategori/simpan", [KategoriController::class, "update"]);
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

            Route::prefix("galeri_solusi")->group(function () {
                Route::resource("/", GaleriSolusiController::class);
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
                Route::resource("/", MenuController::class);
            });
        });


        Route::prefix("akun")->group(function () {
            Route::prefix("role")->group(function () {
                Route::get("/menu_role", [RoleController::class, "menu_role"]);
                Route::get("edit", [RoleController::class, "edit"]);
                Route::put("simpan", [RoleController::class, "update"]);
                Route::resource("/", RoleController::class);
            });

            Route::post("/pengaturan/menu_role", [MenuRoleController::class, "store"]);
        });

        Route::get("/hubungi_kami", [AppController::class, "hubungi_kami"]);

        Route::get("/logout", [LoginController::class, "logout"]);
    });
});
