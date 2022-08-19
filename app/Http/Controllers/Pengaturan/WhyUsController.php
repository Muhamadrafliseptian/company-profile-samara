<?php

namespace App\Http\Controllers\Pengaturan;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan\WhyUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WhyUsController extends Controller
{
    public function index()
    {
        $data = [
            "data_why_us" => WhyUs::get()
        ];

        return view("admin.pengaturan.why_us.index", $data);
    }

    public function create()
    {
        return view("admin.pengaturan.why_us.tambah");
    }

    public function store(Request $request)
    {
        $cek = WhyUs::where("why_us_name", $request->why_us_name)->count();

        if ($cek > 0) {
            return back()->with(["message" => '<script>swal("Gagal", "Tidak Boleh Duplikasi Data", "success");</script>']);
        } else {

            if ($request->file("why_us_image")) {
                $data = $request->file("why_us_image")->store("why_us");
            }

            WhyUs::create([
                "why_us_icon" => $request->why_us_icon,
                "why_us_name" => $request->why_us_name,
                "why_us_slug" => Str::slug($request->why_us_name),
                "why_us_image" => $data,
                "why_us_deskripsi" => $request->why_us_deskripsi
            ]);

            return redirect("/admin/pengaturan/why_us")->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Tambahkan", "success");</script>']);
        }
    }

    public function edit($id)
    {
        $data = [
            "edit" => WhyUs::where("id", decrypt($id))->first()
        ];

        return view("admin.pengaturan.why_us.edit", $data);
    }

    public function update(Request $request, $id)
    {
        if ($request->file("why_us_image")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }
            $data = $request->file("why_us_image")->store("why_us");
        } else {
            $data = $request->gambarLama;
        }

        WhyUs::where("id", decrypt($id))->update([
            "why_us_icon" => $request->why_us_icon,
            "why_us_name" => $request->why_us_name,
            "why_us_slug" => Str::slug($request->why_us_name),
            "why_us_image" => $data,
            "why_us_deskripsi" => $request->why_us_deskripsi
        ]);

        return redirect("/admin/pengaturan/why_us")->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Simpan", "success");</script>']);
    }

    public function destroy(Request $request, $id)
    {
        $why_us = WhyUs::where("id", decrypt($id))->first();

        if (empty($request->gambarLama)) {
        } else {
            Storage::delete($request->gambarLama);
        }

        $why_us->delete();

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Hapus", "success");</script>']);
    }
}
