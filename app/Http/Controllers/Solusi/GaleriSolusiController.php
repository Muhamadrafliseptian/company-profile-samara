<?php

namespace App\Http\Controllers\Solusi;

use App\Http\Controllers\Controller;
use App\Models\Solusi\GaleriSolusi;
use App\Models\Solusi\Solusi;
use Illuminate\Http\Request;

class GaleriSolusiController extends Controller
{
    public function index()
    {
        $data = [
            "data_solusi" => Solusi::get(),
            "data_galeri_solusi" => GaleriSolusi::get()
        ];

        return view("admin.solusi.galeri_solusi.index", $data);
    }

    public function store(Request $request)
    {
        if ($request->file("galeri_gambar")) {
            $data = $request->file("galeri_gambar")->store("galeri_gambar");
        }

        GaleriSolusi::create([
            "id_solusi" => $request->id_solusi,
            "galeri_gambar" => $data
        ]);

        return back();
    }
}
