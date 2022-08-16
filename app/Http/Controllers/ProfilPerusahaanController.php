<?php

namespace App\Http\Controllers;

use App\Models\ProfilPerusahaan;
use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;

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
        $foto = $request->file("logo");

        if ($foto) {
            $nama_gambar = "mohammad-" . time() . $foto->getClientOriginalName();

            $lebar_gambar = Image::make($request->file("logo"))->width();
            $lebar_gambar -= $lebar_gambar * 50 / 100;


            Image::make($request->file("logo"))->resize($lebar_gambar, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save("coba/" . $nama_gambar);

            return back();
        }

        die();
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
