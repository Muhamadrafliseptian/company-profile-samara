<?php

namespace App\Http\Controllers;

use App\Models\Blog\LowonganKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LowonganKerjaController extends Controller
{
    public function index()
    {
        $data = [
            "data_lowongan_kerja" => LowonganKerja::get()
        ];

        return view("admin.blog.lowongan_kerja.index", $data);
    }

    public function create()
    {
        return view("admin.blog.lowongan_kerja.tambah");
    }

    public function store(Request $request)
    {
        if ($request->file("lowongan_foto")) {
            $data = $request->file("lowongan_foto")->store("lowongan_kerja");
        }

        LowonganKerja::create([
            "lowongan_foto" => $data,
            "lowongan_nama" => $request->lowongan_nama,
            "lowongan_alamat" => $request->lowongan_alamat,
            "lowongan_gaji" => $request->lowongan_gaji,
            "lowongan_deskripsi" => $request->lowongan_deskripsi
        ]);

        return redirect("/admin/blog/lowongan_kerja");
    }

    public function edit($id)
    {
        $data = [
            "edit" => LowonganKerja::where("id", decrypt($id))->first()
        ];

        return view("admin.blog.lowongan_kerja.edit", $data);
    }

    public function update(Request $request, $id)
    {
        if ($request->file("lowongan_foto")) {
            if ($request->gambarlama) {
                Storage::delete($request->gambarLama);
            }
            $data = $request->file("lowongan_foto")->store("lowongan_kerja");
        } else {
            $data = $request->gambarLama;
        }

        LowonganKerja::where("id", decrypt($id))->update([
            "lowongan_foto" => $data,
            "lowongan_nama" => $request->lowongan_nama,
            "lowongan_alamat" => $request->lowongan_alamat,
            "lowongan_gaji" => $request->lowongan_gaji,
            "lowongan_deskripsi" => $request->lowongan_deskripsi
        ]);

        return redirect("/admin/blog/lowongan_kerja");
    }
}
