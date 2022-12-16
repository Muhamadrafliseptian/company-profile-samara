<?php

namespace App\Http\Controllers\pengaturan;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\pengaturan\Projects;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index(){
        $data = [
            "data_project" => Projects::get(),
        ];

        return view("admin.pengaturan.projects.index", $data);
    }

     public function create()
    {
        $data = [
            "data_project" => Projects::get()
        ];

        return view("admin.pengaturan.projects.tambah", $data);
    }

    public function store(Request $request){
        $this->validate($request, [
            "image" => "required",
            "icon" => "required",
            "judul" => "required",
            "deskripsi" => "required",
        ]);

        if ($request->file("image")) {
            $data = $request->file("image")->store("projects");
        }

        Projects::create([
            "judul" => $request->judul,
            "icon" => $request->icon,
            "image" => $data,
            "deskripsi" => $request->deskripsi,
            "slug" => Str::slug($request->judul),
        ]);
         return redirect()->intended("/admin/pengaturan/projects")->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Tambahkan", "success");</script>']);
    }
    public function edit($id)
    {
        $data = [
            "data_project" => Projects::get(),
            "edit" => Projects::where("id", decrypt($id))->first()
        ];

        return view("admin.pengaturan.projects.edit", $data);
    }

    public function update(Request $request, $id)
    {

        if ($request->file("image")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $data = $request->file("image")->store("projects");
        } else {
            $data = $request->gambarLama;
        }

        Projects::where("id", decrypt($id))->update([
            "image" => $data,
            "judul" => $request->judul,
            "icon" => $request->icon,
            "deskripsi" => $request->deskripsi,
            "slug" => Str::slug($request->judul),
        ]);
        return redirect()->intended("/admin/pengaturan/projects")->with(["message" => '<script>swal("Berhasil", "Data Berhasil disimpan", "success");</script>']);
    }
    public function destroy($id)
    {
    Projects::where("id", decrypt($id))->delete();

    return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Hapus", "success");</script>']);
    }
}
