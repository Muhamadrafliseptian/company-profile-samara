<?php

namespace App\Http\Controllers\Pengaturan;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan\Benefit;
use Illuminate\Http\Request;

class BenefitController extends Controller
{
    public function index()
    {
        $data = [
            "data_benefit" => Benefit::get()
        ];

        return view("admin.pengaturan.benefit.index", $data);
    }

    public function store(Request $request)
    {
        Benefit::create($request->all());

    return redirect()->back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil ditambahkan", "success");</script>']);

    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Benefit::where("id", $request->id)->first()
        ];

        return view("admin.pengaturan.benefit.edit", $data);
    }

    public function update(Request $request)
    {
        Benefit::where("id", decrypt($request->id))->update([
            "benefit_icon" => $request->benefit_icon,
            "benefit_judul" => $request->benefit_judul,
            "benefit_deskripsi" => $request->benefit_deskripsi
        ]);

           return redirect()->back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil disimpan", "success");</script>']);
    }
}
