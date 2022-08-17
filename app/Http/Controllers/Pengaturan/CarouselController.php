<?php

namespace App\Http\Controllers\Pengaturan;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    public function index()
    {
        $data = [
            "data_carousel" => Carousel::get()
        ];

        return view("admin.pengaturan.carousel.index", $data);
    }

    public function create()
    {
        return view("admin.pengaturan.carousel.tambah");
    }

    public function store(Request $request)
    {
        if ($request->file("carousel_gambar")) {
            $data = $request->file("carousel_gambar")->store("carousel");
        }

        Carousel::create([
            "carousel_gambar" => $data,
            "carousel_judul" => $request->carousel_judul,
            "carousel_deskripsi" => $request->carousel_deskripsi
        ]);

        return redirect()->back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Tambahkan", "success");</script>']);
    }

    public function edit($id)
    {
        $data = [
            "edit" => Carousel::where("id", decrypt($id))->first()
        ];

        return view("admin.pengaturan.carousel.edit", $data);
    }

    public function update(Request $request, $id)
    {
        if ($request->file("carousel_gambar")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }
            $data = $request->file("carousel_gambar")->store("carousel");
        } else {
            $data = $request->gambarLama;
        }

        Carousel::where("id", decrypt($id))->update([
            "carousel_gambar" => $data,
            "carousel_judul" => $request->carousel_judul,
            "carousel_deskripsi" => $request->carousel_deskripsi
        ]);

        return redirect("/admin/pengaturan/carousel");
    }
    public function destroy($id)
    {
        Carousel::where("id", decrypt($id))->delete();

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Hapus", "success");</script>']);
    }
}
