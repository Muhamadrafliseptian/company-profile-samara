<?php

namespace App\Http\Controllers;

use App\Models\Parnert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ParnertController extends Controller
{
    public function index()
    {
        $data = [
            "data_parnert" => Parnert::get()
        ];

        return view("admin.master.parnert.index", $data);
    }

    public function store(Request $request)
    {
        if ($request->file("parnert_logo")) {
            $data = $request->file("parnert_logo")->store("parnert");
        }

        Parnert::create([
            "parnert_logo" => $data,
            "parnert_nama" => $request->parnert_nama,
            "created_by" => Auth::user()->id
        ]);

        return redirect()->back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil ditambahkan", "success");</script>']);
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Parnert::where("id", $request->id)->first()
        ];

        return view("admin.master.parnert.edit", $data);
    }

    public function update(Request $request)
    {
        if ($request->file("parnert_logo")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }
            $data = $request->file("parnert_logo")->store("parnert");
        } else {
            $data = $request->gambarLama;
        }

        Parnert::where("id", decrypt($request->id))->update([
            "parnert_nama" => $request->parnert_nama,
            "parnert_logo" => $data,
        ]);

        return redirect()->back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil disimpan", "success");</script>']);
    }
     public function destroy($id)
    {
        Parnert::where("id", decrypt($id))->delete();
        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Hapus", "success");</script>']);
    }
}
