<?php

namespace App\Http\Controllers\Pengaturan;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan\Visi;
use App\Models\Pengaturan\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index()
    {
        $data = [
            "visi_misi" => VisiMisi::first()
        ];

        return view("admin.pengaturan.visi_misi.index", $data);
    }

    public function store(Request $request)
    {
        VisiMisi::create($request->all());

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Tambahkan", "success");</script>']);
    }

    public function update(Request $request, $id)
    {
        VisiMisi::where("id", decrypt($id))->update([
            "visi" => $request->visi,
            "misi" => $request->misi
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Simpan", "success");</script>']);
    }
}
