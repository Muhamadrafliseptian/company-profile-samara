<?php

namespace App\Http\Controllers;

use App\Models\Home\Testimonial;
use App\Models\Parnert;
use App\Models\Pengaturan\Carousel;
use App\Models\Solusi\GaleriSolusi;
use App\Models\Solusi\Solusi;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function dashboard()
    {
        $data = [
            "data_carousel" => Carousel::paginate(3),
            "data_testimonial" => Testimonial::paginate(5),
        ];

        return view("user.menu.dashboard", $data);
    }

    public function about_us()
    {
        $data = [
            "data_partnert" => Parnert::orderBy("created_at", "DESC")->paginate(6)
        ];

        return view("user.menu.about_us", $data);
    }

    public function solusi($slug)
    {
        $data = [
            "detail" => Solusi::where("solusi_slug", $slug)->first(),
        ];

        $data["galeri_solusi"] = GaleriSolusi::where("id_solusi", $data["detail"]->id)->get();

        return view("user.menu.solusi", $data);
    }

    public function why_us()
    {
        return view("user.menu.why_us");
    }

    public function study_case()
    {
        return view("user.menu.study_case");
    }

    public function contact_us()
    {
        return view("user.menu.kontak_kami");
    }

    public function kirim_komentar()
    {
        echo "ada";
    }
}
