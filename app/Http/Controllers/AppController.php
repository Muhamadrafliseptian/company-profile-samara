<?php

namespace App\Http\Controllers;

use App\Models\Blog\Post;
use App\Models\InformasiLogin;
use App\Models\ContactUs;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function dashboard()
    {
        $data = [
            "data_blog" => Post::count(),
            "data_users" => User::count(),
            "data_pesan" => ContactUs::count(),
            "data_informasi_login" => InformasiLogin::where("id", Auth::user()->id)->get()
        ];

        return view("admin.dashboard", $data);
    }

    public function hubungi_kami()
    {
        $data = [
            "data_pesan" => ContactUs::get()
        ];

        return view("admin.hubungi_kami.index", $data);
    }
}
