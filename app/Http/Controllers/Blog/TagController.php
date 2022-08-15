<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $data = [
            "data_tag" => Tag::get()
        ];

        return view("admin.tag.index", $data);
    }

    public function store(Request $request)
    {
        $cek = Tag::where("nama", $request->nama)->count();

        if ($cek > 0) {
            return back()->with(["message" => '<script>swal("Gagal", "Tidak Boleh Duplikasi Data", "error");</script>']);
        } else {
            Tag::create($request->all());

            return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Tambahkan", "success");</script>']);
        }
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Tag::where("id", $request->id)->first()
        ];

        return view("admin.tag.edit", $data);
    }

    public function update(Request $request)
    {
        Tag::where("id", decrypt($request->id))->update([
            "nama" => $request->nama
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Simpan", "success");</script>']);
    }

    public function destroy($id)
    {
        Tag::where("id", decrypt($id))->delete();

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Hapus", "success");</script>']);
    }
}
