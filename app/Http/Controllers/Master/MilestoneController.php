<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\Milestone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MilestoneController extends Controller
{
    public function index()
    {
        $data = [
            "data_milestone" => Milestone::get()
        ];

        return view("admin.master.milestone.index", $data);
    }

    public function store(Request $request)
    {
        if ($request->file("milestone_gambar")) {
            $data = $request->file("milestone_gambar")->store("milestone");
        }

        Milestone::create([
            "milestone_judul" => $request->milestone_judul,
            "milestone_gambar" => $data,
            "milestone_status" => 0
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Tambahkan", "success");</script>']);
    }

    public function edit($id)
    {
        $data = [
            "edit" => Milestone::where("id", decrypt($id))->first(),
            "data_milestone" => Milestone::where("id", "!=", decrypt($id))->get()
        ];

        return view("admin.master.milestone.edit", $data);
    }

    public function update(Request $request, $id)
    {
        if ($request->file("milestone_gambar")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }
            $data = $request->file("milestone_gambar")->store("milestone");
        } else {
            $data = $request->gambarLama;
        }

        Milestone::where("id", decrypt($id))->update([
            "milestone_judul" => $request->milestone_judul,
            "milestone_gambar" => $data
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Simpan", "success");</script>']);
    }

    public function destroy(Request $request, $id)
    {
        $milestone = Milestone::where("id", decrypt($id))->first();

        Storage::delete($request->gambarLama);

        $milestone->delete();

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Hapus", "success");</script>']);
    }

    public function aktifkan($id)
    {
        Milestone::where("id", decrypt($id))->update([
            "milestone_status" => 1
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Aktifkan", "success");</script>']);
    }

    public function non_aktifkan($id)
    {
        Milestone::where("id", decrypt($id))->update([
            "milestone_status" => 0
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Aktifkan", "success");</script>']);
    }
}
