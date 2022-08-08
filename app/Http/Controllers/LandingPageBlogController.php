<?php

namespace App\Http\Controllers;

use App\Models\Blog\LowonganKerja;
use Illuminate\Http\Request;

class LandingPageBlogController extends Controller
{
    public function lowongan_kerja()
    {
        $data = [
            "data_lowongan_kerja" => LowonganKerja::paginate(3)
        ];

        return view("user.menu.blog.lowongan_kerja", $data);
    }
}
