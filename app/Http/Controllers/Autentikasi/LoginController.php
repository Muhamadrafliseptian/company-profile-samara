<?php

namespace App\Http\Controllers\Autentikasi;

use App\Http\Controllers\Controller;
use App\Models\InformasiLogin;
use App\Models\ProfilPerusahaan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        $data = [
            "profil" => ProfilPerusahaan::first()
        ];

        return view("autentikasi.login", $data);
    }

    public function post_login(Request $request)
    {
        $credentials = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        $password = $request->password;

        $user = User::where("email", $request->email)->first();

        if ($user) {
            $cek_password = Hash::check($password, $user->password);

            if (!$cek_password) {
                return back();
            } else {
                if (Auth::attempt($credentials)) {

                    InformasiLogin::create([
                        "id_user" => Auth::user()->id,
                        "nama" => Auth::user()->nama
                    ]);

                    $request->session()->regenerate();

                    return redirect()->intended("/admin/dashboard")->with(["message" => '<script>swal("Berhasil", "Login Berhasil", "success");</script>']);
                } else {

                    return redirect()->back();
                }
            }
        } else {
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect("/admin/login");
    }
}
