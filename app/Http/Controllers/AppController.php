<?php

namespace App\Http\Controllers;

use App\Models\Akun\MenuRole;
use App\Models\Blog\Post;
use App\Models\InformasiLogin;
use App\Models\ContactUs;
use App\Models\pengaturan\Client;
use App\Models\Pengaturan\Menu;
use App\Models\ProfilPerusahaan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function data_menu()
    {
        $data = [
            "menu_role" => MenuRole::where("id_role", Auth::user()->id_role)->get()
        ];

        foreach ($data["menu_role"] as $item) {
            $data["detail"] = Menu::where("menu_id", 0)->first();
        }

        return view("data_menu", $data);
    }

    public function dashboard()
    {
        $data = [
            "data_blog" => Post::count(),
            "data_client" => Client::count(),
            "data_users" => User::count(),
            "data_pesan" => ContactUs::count(),
            "data_informasi_login" => InformasiLogin::where("id", Auth::user()->id)->get(),
            "data_profil_perusahaan" => ProfilPerusahaan::count(),
            "data_profil" => ProfilPerusahaan::first()
        ];

        return view("admin.dashboard", $data);
    }

    public function hubungi_kami()
    {
        $data = [
            "data_pesan" => ContactUs::get()
        ];

        return view("admin.pengaturan.hubungi_kami.index", $data);
    }
}
