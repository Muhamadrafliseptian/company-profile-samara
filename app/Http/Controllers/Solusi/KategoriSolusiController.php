<?php

namespace App\Http\Controllers\Solusi;

use App\Http\Controllers\Controller;
use App\Models\Solusi\KategoriSolusi;
use Illuminate\Http\Request;

class KategoriSolusiController extends Controller
{
    public function index()
    {
        $data = [
            "data_kategori_solusi" => KategoriSolusi::get()
        ];

        return view("admin.solusi.kategori_solusi.index", $data);
    }

    public function store(Request $request)
    {
        KategoriSolusi::create($request->all());

      return redirect()->back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil ditambahkan", "success");</script>']);
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => KategoriSolusi::where("id", $request->id)->first()
        ];

        return view("admin.solusi.kategori_solusi.edit", $data);
    }

    public function update(Request $request)
    {
        KategoriSolusi::where("id", decrypt($request->id))->update([
            "kategori_solusi" => $request->kategori_solusi
        ]);

      return redirect()->back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil disimpan", "success");</script>']);
    }

    public function destroy($id)
    {
        KategoriSolusi::where("id", decrypt($id))->delete();

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Hapus", "success");</script>']);
    }
}
