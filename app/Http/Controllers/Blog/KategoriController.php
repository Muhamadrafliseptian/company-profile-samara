<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function index()
    {
        $data = [
            "data_kategori" => Kategori::get()
        ];

        return view("admin.master.kategori.index", $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "nama_kategori" => "required",
        ]);

        $cek = Kategori::where("nama_kategori", $request->nama_kategori)->count();

        if ($cek > 0) {
            return back()->with(["message" => '<script>swal("Gagal", "Tidak Boleh Duplikasi Data", "error");</script>']);
        } else {
            Kategori::create([
                "nama_kategori" => $request->nama_kategori,
                "slug" => Str::slug($request->nama_kategori)
            ]);

            return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Tambahkan", "success");</script>']);
        }
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Kategori::where("id", $request->id)->first()
        ];

        return view("admin.master.kategori.edit", $data);
    }

    public function update(Request $request)
    {
        Kategori::where("id", decrypt($request->id))->update([
            "nama_kategori" => $request->nama_kategori,
            "slug" => Str::slug($request->nama_kategori)
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Simpan", "success");</script>']);
    }

    public function destroy($id)
    {
        Kategori::where("id", decrypt($id))->delete();

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Hapus", "success");</script>']);
    }
}
