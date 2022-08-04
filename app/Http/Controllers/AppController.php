<?php

namespace App\Http\Controllers;

use App\Models\InformasiLogin;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function dashboard()
    {
        $data = [
            "data_informasi_login" => InformasiLogin::where("id", Auth::user()->id)->get()
        ];

        return view("admin.dashboard", $data);
    }
}
