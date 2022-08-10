<?php

namespace App\Http\Controllers\Pengaturan;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan\Misi;
use App\Models\Pengaturan\Visi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index()
    {
        $data = [
            "data_visi" => Visi::first(),
            "data_misi" => Misi::paginate(3)
        ];

        return view("admin.pengaturan.visi_misi.index", $data);
    }

    public function tambah_visi(Request $request)
    {
        Visi::create($request->all());

         return redirect()->back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil ditambahkan", "success");</script>']);
    }

    public function simpan_visi(Request $request)
    {
        Visi::where("id", decrypt($request->id))->update([
            "judul" => $request->judul,
            "deskripsi" => $request->deskripsi
        ]);

         return redirect()->back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil ditambahkan", "success");</script>']);
    }

    public function tambah_misi(Request $request)
    {
        Misi::create($request->all());

         return redirect()->back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil disimpan", "success");</script>']);
    }

    public function edit_misi(Request $request)
    {
        $data = [
            "edit" => Misi::where("id", $request->id)->first()
        ];

        return view("admin.pengaturan.visi_misi.edit", $data);
    }

    public function simpan_misi(Request $request)
    {
        Misi::where("id", decrypt($request->id))->update([
            "judul" => $request->judul,
            "deskripsi" => $request->deskripsi
        ]);

         return redirect()->back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil disimpan", "success");</script>']);
    }
}
