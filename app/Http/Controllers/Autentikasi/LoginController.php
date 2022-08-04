<?php

namespace App\Http\Controllers\Autentikasi;

use App\Http\Controllers\Controller;
use App\Models\InformasiLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view("autentikasi.login");
    }

    public function post_login(Request $request)
    {
        $credentials = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if (Auth::attempt($credentials)) {

            InformasiLogin::create([
                "id_user" => Auth::user()->id,
                "nama" => Auth::user()->nama
            ]);

            $request->session()->regenerate();

            return redirect()->intended("/admin/dashboard");
        } else {

            return redirect()->back();
        }
    }
}