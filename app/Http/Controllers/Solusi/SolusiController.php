<?php

namespace App\Http\Controllers\Solusi;

use App\Http\Controllers\Controller;
use App\Models\Solusi\KategoriSolusi;
use App\Models\Solusi\Solusi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SolusiController extends Controller
{
    public function index()
    {
        $data = [
            "data_solusi" => Solusi::get()
        ];

        return view("admin.solusi.solusi.index", $data);
    }

    public function create()
    {
        $data = [
            "data_kategori_solusi" => KategoriSolusi::get()
        ];

        return view("admin.solusi.solusi.tambah", $data);
    }

    public function store(Request $request)
    {
        if ($request->file("solusi_gambar")) {
            $data = $request->file("solusi_gambar")->store("solusi");
        }

        if ($request->file("solusi_video")) {
            $video = $request->file("solusi_video")->store("solusi_video");
        }

        Solusi::create([
            "solusi_nama" => $request->solusi_nama,
            "solusi_slug" => Str::slug($request->solusi_nama),
            "solusi_gambar" => $data,
            "solusi_deskripsi" => $request->solusi_deskripsi,
            "solusi_video" => $video,
            "id_kategori_solusi" => $request->id_kategori_solusi
        ]);

        return redirect("/admin/solusi/solusi");
    }

    public function edit($id)
    {
        $data = [
            "data_kategori_solusi" => KategoriSolusi::get(),
            "edit" => Solusi::where("id", decrypt($id))->first()
        ];

        return view("admin.solusi.solusi.edit", $data);
    }
}
