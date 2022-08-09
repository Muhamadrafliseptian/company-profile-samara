<?php

namespace App\Http\Controllers;

use App\Models\Blog\Counter;
use App\Models\Blog\Kategori;
use App\Models\Blog\LowonganKerja;
use App\Models\Blog\Post;
use App\Models\Blog\Tag;
use Illuminate\Http\Request;

class LandingPageBlogController extends Controller
{
    public function event()
    {
        return view("user.menu.blog.event");
    }

    public function berita()
    {
        $data = [
            "data_kategori" => Kategori::get(),
            "data_tag" => Tag::get(),
            "data_blog" => Post::orderBy("created_at", "ASC")->paginate(3),
            "data_blog_terkini" => Post::orderBy("created_at", "DESC")->paginate(4)
        ];

        return view("user.menu.blog.berita", $data);
    }

    public function detail_berita($slug)
    {
        $data = [
            "data_kategori" => Kategori::get(),
            "data_tag" => Tag::get(),
            "detail" => Post::where("slug", $slug)->first(),
            "data_blog_terkini" => Post::orderBy("created_at", "DESC")->paginate(4)
        ];

        Counter::create([
            'id_post' => $data['detail']->id,
            'address' => $_SERVER['REMOTE_ADDR']
        ]);

        return view("user.menu.blog.detail_berita", $data);
    }

    public function lowongan_kerja()
    {
        $data = [
            "data_lowongan_kerja" => LowonganKerja::paginate(3)
        ];

        return view("user.menu.blog.lowongan_kerja", $data);
    }
}
