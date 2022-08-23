<?php

namespace App\Http\Controllers\Pengaturan;

use App\Http\Controllers\Controller;
use App\Models\ProfilPerusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilPerusahaanController extends Controller
{
    public function index()
    {
        $data = [
            "profil_perusahaan" => ProfilPerusahaan::first()
        ];

        return view("admin.pengaturan.profil_perusahaan.index", $data);
    }

    public function store(Request $request)
    {
        if ($request->file("logo")) {
            $data = $request->file("logo")->store("profil_perusahaan");
        }

        if (empty($request->peta)) {
            $peta = "NULL";
        } else {
            $peta = $request->peta;
        }

        ProfilPerusahaan::create([
            "logo" => $data,
            "nama_perusahaan" => $request->nama_perusahaan,
            "no_hp" => $request->no_hp,
            "email" => $request->email,
            "negara" => $request->negara,
            "kode_pos" => $request->kode_pos,
            "peta" => $peta,
            "alamat" => $request->alamat,
            "deskripsi" => $request->deskripsi
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Tambahkan", "success");</script>']);
    }

    public function update(Request $request, $id)
    {
        if ($request->file("logo")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }
            $data = $request->file("logo")->store("profil_perusahaan");
        } else {
            $data = $request->gambarLama;
        }

        if (empty($request->peta)) {
            $peta = "NULL";
        } else {
            $peta = $request->peta;
        }

        ProfilPerusahaan::where("id", decrypt($id))->update([
            "logo" => $data,
            "nama_perusahaan" => $request->nama_perusahaan,
            "no_hp" => $request->no_hp,
            "email" => $request->email,
            "negara" => $request->negara,
            "kode_pos" => $request->kode_pos,
            "peta" => $peta,
            "alamat" => $request->alamat,
            "deskripsi" => $request->deskripsi
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Tambahkan", "success");</script>']);
    }
}
