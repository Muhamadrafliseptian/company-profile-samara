<?php

namespace App\Http\Controllers;

use App\Models\ProfilPerusahaan;

use Illuminate\Http\Request;

class ProfilPerusahaanController extends Controller
{
    public function index()
    {
        $data = [
            "profil_perusahaan" => ProfilPerusahaan::first()
        ];

        return view("admin.profil_perusahaan.index", $data);
    }

    public function store(Request $request)
    {
        if ($request->file("logo")) {
            $data = $request->file("logo")->store("profil_perusahaan");
        }

        ProfilPerusahaan::create([
            "logo" => url('/storage') . "/" . $data,
            "nama_perusahaan" => $request->nama_perusahaan,
            "no_hp" => $request->no_hp,
            "email" => $request->email,
            "negara" => $request->negara,
            "kode_pos" => $request->kode_pos,
            "peta" => $request->peta,
            "alamat" => $request->alamat
        ]);

            return redirect()->back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil ditambahkan", "success");</script>']);

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

        ProfilPerusahaan::where("id", encrypt($id))->update([
            "logo" => url('/storage') . "/" . $data,
            "nama_perusahaan" => $request->nama_perusahaan,
            "no_hp" => $request->no_hp,
            "email" => $request->email,
            "negara" => $request->negara,
            "kode_pos" => $request->kode_pos,
            "peta" => $request->peta,
            "alamat" => $request->alamat
        ]);

            return redirect()->back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil disimpan", "success");</script>']);

    }
}
