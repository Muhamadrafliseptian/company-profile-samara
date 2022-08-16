<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\Milestone;
use Illuminate\Http\Request;

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
            "milestone_gambar" => $data,
            "milestone_status" => 0
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Tambahkan", "success");</script>']);
    }
}
