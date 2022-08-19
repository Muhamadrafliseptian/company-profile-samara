<?php

namespace App\Http\Controllers\Pengaturan;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan\WhyUs;
use Illuminate\Http\Request;

class WhyUsController extends Controller
{
    public function index()
    {
        $data = [
            "data_why_us" => WhyUs::get()
        ];

        return view("admin.pengaturan.why_us.index", $data);
    }

    public function store(Request $request)
    {
        $cek = WhyUs::where("why_us_name", $request->why_us_name)->count();

        if ($cek > 0) {
            return back()->with(["message" => '<script>swal("Gagal", "Tidak Boleh Duplikasi Data", "success");</script>']);
        } else {
            WhyUs::create($request->all());

            return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Tambahkan", "success");</script>']);
        }
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => WhyUs::where("id", $request->id)->first()
        ];

        return view("admin.pengaturan.why_us.edit", $data);
    }

    public function update(Request $request)
    {
        WhyUs::where("id", decrypt($request->id))->update([
            "why_us_icon" => $request->why_us_icon,
            "why_us_name" => $request->why_us_name,
            "why_us_deskripsi" => $request->why_us_deskripsi
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Simpan", "success");</script>']);
    }

    public function destroy($id)
    {
        WhyUs::where("id", decrypt($id))->delete();

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Hapus", "success");</script>']);
    }
}
