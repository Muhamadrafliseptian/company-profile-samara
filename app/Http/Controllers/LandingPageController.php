<?php

namespace App\Http\Controllers;

use App\Models\Parnert;
use App\Models\Pengaturan\Carousel;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function dashboard()
    {
        $data = [
            "data_carousel" => Carousel::paginate(3)
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
