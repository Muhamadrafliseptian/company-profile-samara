<?php

namespace App\Http\Controllers;

use App\Models\Master\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index()
    {
        $data = [
            "data_partner" => Partner::get()
        ];

        return view("admin.master.partner.index", $data);
    }

    public function store(Request $request)
    {
        if ($request->file("partner_logo")) {
            $data = $request->file("partner_logo")->store("partner");
        }

        Partner::create([
            "partner_logo" => $data,
            "partner_nama" => $request->partner_nama,
            "created_by" => Auth::user()->id
        ]);

        return redirect()->back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil ditambahkan", "success");</script>']);
    }

    public function edit($id)
    {
        $data = [
            "edit" => Partner::where("id", decrypt($id))->first(),
            "data_partner" => Partner::where("id", "!=", decrypt($id))->get()
        ];

        return view("admin.master.partner.edit", $data);
    }

    public function update(Request $request, $id)
    {
        if ($request->file("partner_logo")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }
            $data = $request->file("partner_logo")->store("partner");
        } else {
            $data = $request->gambarLama;
        }

        Partner::where("id", decrypt($id))->update([
            "partner_nama" => $request->partner_nama,
            "partner_logo" => $data,
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil disimpan", "success");</script>']);
    }
    public function destroy(Request $request, $id)
    {
        $partner = Partner::where("id", decrypt($id))->first();

        Storage::delete($request->gambarLama);
        $partner->delete();

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Hapus", "success");</script>']);
    }
}
