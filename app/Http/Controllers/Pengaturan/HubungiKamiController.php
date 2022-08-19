<?php

namespace App\Http\Controllers\Pengaturan;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan\HubungiKami;
use Illuminate\Http\Request;

class HubungiKamiController extends Controller
{
    //
    public function index()
    {
        $data = [
            "data_hubungi_kami" => HubungiKami::get(),
        ];
        return view("/", $data);
    }
    public function create()
    {
        return view("/");
    }
    public function store(Request $request)
    {
        HubungiKami::create([
            "nama" => $request->nama,
            "email" => $request->email,
            "subjek" => $request->subjek,
            "pesan" => $request->pesan,
        ]);
        return redirect()->intended("/")->with(["message" => '<script>swal("Berhasil", "Form Pesan Berhasil dikirim", "success");</script>']);
    }
}
