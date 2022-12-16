<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ParnertController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\Blog\TagController;
use App\Http\Controllers\Akun\RoleController;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\Akun\UsersController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Akun\MenuRoleController;
use App\Http\Controllers\Blog\KategoriController;
use App\Http\Controllers\LowonganKerjaController;
use App\Http\Controllers\Solusi\SolusiController;
use App\Http\Controllers\InformasiLoginController;
use App\Http\Controllers\Akun\ProfilSayaController;
use App\Http\Controllers\LandingPageBlogController;
use App\Http\Controllers\pengaturan\HeroController;
use App\Http\Controllers\Pengaturan\MenuController;
use App\Http\Controllers\Home\TestimonialController;
use App\Http\Controllers\Master\MilestoneController;
use App\Http\Controllers\Master\StudyCaseController;
use App\Http\Controllers\Pengaturan\WhyUsController;
use App\Http\Controllers\Autentikasi\LoginController;
use App\Http\Controllers\Pengaturan\BenefitController;
use App\Http\Controllers\Pengaturan\CarouselController;
use App\Http\Controllers\pengaturan\ClientController;
use App\Http\Controllers\Pengaturan\VisiMisiController;
use App\Http\Controllers\Solusi\GaleriSolusiController;
use App\Http\Controllers\Solusi\KategoriSolusiController;
use App\Http\Controllers\Pengaturan\ProfilPerusahaanController;
use App\Http\Controllers\pengaturan\ProjectController;

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
    return view('error');
});

Route::get("/blog-event", function () {
    return view("layouts.partials.menu.submenu.blog-event");
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
Route::get("/why_us/{slug}", [LandingPageController::class, "detail_why_us"]);
Route::get("/study_case", [LandingPageController::class, "study_case"]);
Route::get("/detail_studyCase/{slug}", [LandingPageController::class, "detail_study_case"]);
Route::prefix("blog")->group(function () {
    Route::get("/event", [LandingPageBlogController::class, "event"]);
    Route::get("/berita", [LandingPageBlogController::class, "berita"]);
    Route::get("/berita/{slug}", [LandingPageBlogController::class, "detail_berita"]);
    Route::post("/berita/{id}/kirim_komentar", [LandingPageBlogController::class, "kirim_komentar_artikel"]);
    Route::get("/lowongan_kerja", [LandingPageBlogController::class, "lowongan_kerja"]);
});

Route::prefix("/")->group(function () {
    Route::get("/projects/detail_projects/{slug}", [LandingPageController::class, "detail_projects"]);
});

Route::get("/single_partner", function () {
    return view("user.menu.detail_studyCase");
});

Route::post("/kirim_komentar", [LandingPageController::class, "kirim_komentar"]);

Route::prefix("admin")->group(function () {
    Route::group(["middleware" => "guest"], function () {
        // Data Login
        Route::get("/login", [LoginController::class, "login"]);
        Route::post("/post_login", [LoginController::class, "post_login"]);
    });

    Route::group(["middleware" => "autentikasi"], function () {
        Route::get("coba_menu", function () {
            return view("coba_menu");
        });

        Route::get("data_menu", [AppController::class, "data_menu"]);

        Route::get("menu_coba", function () {
            return view("menu_coba");
        });

        Route::get("/", [AppController::class, "dashboard"]);
        Route::get("/dashboard", [AppController::class, "dashboard"]);

        Route::prefix("blog")->group(function () {
            Route::resource("lowongan_kerja", LowonganKerjaController::class);
        });

        Route::prefix("solusi")->group(function () {
            Route::prefix("kategori_solusi")->group(function () {
                Route::get("/edit", [KategoriSolusiController::class, "edit"]);
                Route::put("/simpan", [KategoriSolusiController::class, "update"]);
                Route::resource("/", KategoriSolusiController::class);
            });

            Route::get("/solusi/edit", [SolusiController::class, "edit"]);
            Route::put("/solusi/simpan", [SolusiController::class, "update"]);
            Route::resource("solusi", SolusiController::class);

            Route::prefix("galeri_solusi")->group(function () {
                Route::resource("/", GaleriSolusiController::class);
            });
        });

        Route::prefix("master")->group(function () {
            Route::get("/tag/edit", [TagController::class, "edit"]);
            Route::put("/tag/simpan", [TagController::class, "update"]);
            Route::resource("tag", TagController::class);

            Route::get("/kategori/edit", [KategoriController::class, "edit"]);
            Route::put("/kategori/simpan", [KategoriController::class, "update"]);
            Route::resource("kategori", KategoriController::class);

            Route::get("/partner/edit", [PartnerController::class, "edit"]);
            Route::put("/partner/simpan", [PartnerController::class, "update"]);
            Route::resource("partner", PartnerController::class);

            Route::put("/milestone/{id}/aktifkan", [MilestoneController::class, "aktifkan"]);
            Route::put("/milestone/{id}/non_aktifkan", [MilestoneController::class, "non_aktifkan"]);
            Route::resource("milestone", MilestoneController::class);

            Route::resource("study_case", StudyCaseController::class);
        });


        Route::get("/blog/{id}/komentar", [PostController::class, "lihat_komentar"]);
        Route::get("/blog/view_pesan", [PostController::class, "view_pesan"]);
        Route::post("/blog/balas_komentar/", [PostController::class, "balas_komentar"]);
        Route::resource("blog", PostController::class);

        Route::prefix("pengaturan")->group(function () {
            Route::resource("profil_perusahaan", ProfilPerusahaanController::class);
            Route::resource("hero", HeroController::class);
            Route::resource("visi_misi", VisiMisiController::class);
            Route::resource("testimonials", TestimonialController::class);
            Route::resource("visi_misi", VisiMisiController::class);
            Route::resource("carousel", CarouselController::class);

            Route::resource("client", ClientController::class);
            Route::get("/client/{id}/edit", [ClientController::class, "edit"]);
            Route::put("/client/simpan", [ClientController::class, "update"]);

            Route::resource("projects", ProjectController::class);
            Route::get("projects/{id}/edit", [ProjectController::class,"edit"]);
            Route::get("projects/simpan/", [ProjectController::class,"update"]);

            Route::get("benefit/edit", [BenefitController::class, "edit"]);
            Route::put("benefit/simpan", [BenefitController::class, "update"]);
            Route::resource("benefit", BenefitController::class);

            Route::resource("why_us", WhyUsController::class);

            Route::prefix("menu")->group(function () {
                Route::get("/{id}/edit", [MenuRoleController::class, "edit"]);
                Route::put("/{id}", [MenuRoleController::class, "update"]);
                Route::resource("/", MenuController::class);
            });
            Route::get("/hubungi_kami", [AppController::class, "hubungi_kami"]);
        });


        Route::prefix("akun")->group(function () {
            Route::prefix("role")->group(function () {
                Route::get("/menu_role", [RoleController::class, "menu_role"]);
            });
            Route::get("/role/edit", [RoleController::class, "edit"]);
            Route::put("/role/simpan", [RoleController::class, "update"]);
            Route::resource("role", RoleController::class);

            Route::post("/pengaturan/menu_role", [MenuRoleController::class, "store"]);
            Route::resource("users", UsersController::class);
            Route::get("informasi_login", [InformasiLoginController::class, "index"]);
            Route::put("profil_saya/simpan", [ProfilSayaController::class, "ganti_password"]);
            Route::resource("profil_saya", ProfilSayaController::class);
        });


        Route::get("/logout", [LoginController::class, "logout"]);
    });
});
