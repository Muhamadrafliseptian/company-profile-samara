<?php

namespace App\Http\Controllers\pengaturan;

use Illuminate\Http\Request;
use App\Models\pengaturan\Hero;
use App\Models\ProfilPerusahaan;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    public function index()
    {
       $data = [
            "data_hero" => Hero::first()
        ];

        return view("admin.pengaturan.hero.index", $data);
    }

    public function store(Request $request)
    {
        if ($request->file("image")) {
            $data = $request->file("image")->store("hero");
        }

        Hero::create([
            "image" => $data,
            "deskripsi" => $request->deskripsi,
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Tambahkan", "success");</script>']);

    }
     public function update(Request $request, $id)
    {
        if ($request->file("image")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }
            $data = $request->file("image")->store("hero");
        } else {
            $data = $request->gambarLama;
        }

        Hero::where("id", decrypt($id))->update([
            "image" => $data,
            "deskripsi" => $request->deskripsi,
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Tambahkan", "success");</script>']);
    }

}
