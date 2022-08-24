<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\Partner;
use App\Models\Master\StudyCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StudyCaseController extends Controller
{
    public function index()
    {
        $data = [
            "data_partner" => Partner::get(),
            "data_study_case" => StudyCase::get()
        ];

        return view("admin.master.study_case.index", $data);
    }

    public function create()
    {
        $data = [
            "data_partner" => Partner::get()
        ];

        return view("admin.master.study_case.tambah", $data);
    }

    public function store(Request $request)
    {
        $cek = StudyCase::where("study_case_judul", $request->study_case_judul)->count();

        if ($cek > 0) {
            return back()->with(['message' => '<script>swal("Error", "Tidak Boleh Duplikasi Data", "error");</script>']);
        } else {
            if ($request->file("study_case_gambar")) {
                $data = $request->file("study_case_gambar")->store("study_case");
            }

            StudyCase::create([
                "id_partner" => $request->id_partner,
                "study_case_gambar" => $data,
                "study_case_judul" => $request->study_case_judul,
                "study_case_slug" => Str::slug($request->study_case_judul),
                "study_case_kutipan" => Str::limit($request->study_case_deskripsi, 500),
                "study_case_deskripsi" => $request->study_case_deskripsi,
                "id_user" => Auth::user()->id
            ]);

            return redirect("/admin/master/study_case")->with(['message' => '<script>swal("Berhasil", "Data Berhasil di Tambahkan", "success");</script>']);
        }
    }

    public function edit($id)
    {
        $data = [
            "data_partner" => Partner::get(),
            "edit" => StudyCase::where("id", decrypt($id))->first()
        ];

        return view("admin.master.study_case.edit", $data);
    }

    public function update(Request $request, $id)
    {
        if ($request->file("study_case_gambar")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }
            $data = $request->file("study_case_gambar")->store("study_case");
        } else {
            $data = $request->gambarLama;
        }

        StudyCase::create([
            "study_case_gambar" => $data,
            "study_case_judul" => $request->study_case_judul,
            "study_case_slug" => Str::slug($request->study_case_judul),
            "study_case_kutipan" => Str::limit($request->deskripsi, 500),
            "study_case_deskripsi" => $request->study_case_deskripsi
        ]);

        return back()->with(['message' => '<script>swal("Berhasil", "Data Berhasil di Tambahkan", "success");</script>']);
    }

    public function destroy(Request $request, $id)
    {
        Storage::delete($request->gambarLama);

        StudyCase::where("id", decrypt($id))->delete();

        return back()->with(['message' => '<script>swal("Berhasil", "Data Berhasil di Hapus", "success");</script>']);
    }
}
