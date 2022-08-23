<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\BalasKomentar;
use App\Models\Blog\Counter;
use App\Models\Blog\Kategori;
use App\Models\Blog\Post;
use App\Models\Komentar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $data = [
            "data_blog" => Post::get(),
        ];

        return view("admin.blog.index", $data);
    }

    public function create()
    {
        $data = [
            "count_kategori" => Kategori::count(),
            "data_kategori" => Kategori::get()
        ];

        return view("admin.blog.tambah", $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "gambar" => "required",
            "title" => "required",
        ]);

        if ($request->file("gambar")) {
            $data = $request->file("gambar")->store("post");
        }

        Post::create([
            "id_kategori" => $request->id_kategori,
            "id_user" => Auth::user()->id,
            "title" => $request->title,
            "slug" => Str::slug($request->title),
            "gambar" => $data,
            "kutipan" => Str::limit(strip_tags($request->deskripsi, 200)),
            "deskripsi" => $request->deskripsi
        ]);

        return redirect()->intended("/admin/blog")->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Tambahkan", "success");</script>']);
    }

    public function edit($id)
    {
        $data = [
            "data_kategori" => Kategori::get(),
            "edit" => Post::where("id", decrypt($id))->first()
        ];

        return view("admin.blog.edit", $data);
    }

    public function update(Request $request, $id)
    {
        if ($request->file("gambar")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $data = $request->file("gambar")->store("post");
        } else {
            $data = $request->gambarLama;
        }

        Post::where("id", decrypt($id))->update([
            "id_kategori" => $request->id_kategori,
            "id_user" => Auth::user()->id,
            "title" => $request->title,
            "slug" => Str::slug($request->title),
            "gambar" => $data,
            "kutipan" => Str::limit(strip_tags($request->deskripsi, 200)),
            "deskripsi" => $request->deskripsi
        ]);
        return redirect()->intended("/admin/blog")->with(["message" => '<script>swal("Berhasil", "Data Berhasil disimpan", "success");</script>']);
    }
    public function destroy(Request $request, $id)
    {
        $post = Post::where("id", decrypt($id))->first();

        Storage::delete($request->gambarLama);
        $post->delete();

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Hapus", "success");</script>']);
    }

    public function lihat_komentar($id)
    {
        $data = [
            "data_komentar" => Komentar::where("id", decrypt($id))->get()
        ];

        return view("admin.blog.komentar", $data);
    }

    public function view_pesan(Request $request)
    {
        $data = [
            "detail" => Komentar::where("id", $request->id)->first()
        ];

        return view("admin.blog.view_komentar", $data);
    }

    public function balas_komentar(Request $request)
    {
        BalasKomentar::create([
            "id_komentar" => decrypt($request->id_komentar),
            "id_user" => Auth::user()->id,
            "pesan" => $request->pesan
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Simpan", "success");</script>']);
    }
}
