<?php

namespace App\Http\Controllers;

use App\Models\InformasiLogin;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class InformasiLoginController extends Controller
{
    public function index()
    {
        $data = [
            "data_informasi_login" => InformasiLogin::where("id", Auth::user()->id)->get()
        ];

        return view("admin.akun.informasi_login.index", $data);
    }
}
