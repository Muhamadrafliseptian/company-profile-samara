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

        return view("admin.kategori.index", $data);
    }

    public function store(Request $request)
    {
        Kategori::create([
            "nama_kategori" => $request->nama_kategori,
            "slug" => Str::slug($request->nama_kategori)
        ]);

        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Kategori::where("id", $request->id)->first()
        ];

        return view("admin.kategori.edit", $data);
    }

    public function update(Request $request)
    {
        Kategori::where("id", decrypt($request->id))->update([
            "nama_kategori" => $request->nama_kategori,
            "slug" => Str::slug($request->slug)
        ]);

        return back();
    }

    public function destroy($id)
    {
        Kategori::where("id", $id)->destroy();
    }
}
