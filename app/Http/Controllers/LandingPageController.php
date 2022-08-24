<?php

namespace App\Http\Controllers;

use App\Models\Blog\Post;
use App\Models\Home\Testimonial;
use App\Models\Master\Milestone;
use App\Models\Master\Partner;
use App\Models\Master\StudyCase;
use App\Models\Pengaturan\Carousel;
use App\Models\Pengaturan\VisiMisi;
use App\Models\Pengaturan\WhyUs;
use App\Models\Pesan;
use App\Models\ProfilPerusahaan;
use App\Models\Solusi\GaleriSolusi;
use App\Models\Solusi\Solusi;
use Illuminate\Http\Request;


class LandingPageController extends Controller
{
    public function dashboard()
    {
        $data = [
            "data_carousel" => Carousel::paginate(3),
            "data_blog" => Post::paginate(4),
            "data_testimonial" => Testimonial::paginate(5),
            "profil_perusahaan" => ProfilPerusahaan::first()
        ];

        return view("user.menu.dashboard", $data);
    }

    public function about_us()
    {
        $data = [
            "milestone" => Milestone::where("milestone_status", 1)->paginate(6),
            "profil_perusahaan" => ProfilPerusahaan::first(),
            "visi_misi" => VisiMisi::first(),
            "data_partnert" => Partner::orderBy("created_at", "DESC")->paginate(6)
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
        $data = [
            "data_why_us" => WhyUs::get()
        ];

        return view("user.menu.why_us", $data);
    }

    public function detail_why_us($slug)
    {
        $data = [
            "detail" => WhyUs::where("why_us_slug", $slug)->first()
        ];

        return view("user.menu.why_us.detail_why_us", $data);
    }

    public function study_case()
    {
        $data = [
            "data_study_case" => StudyCase::orderBy("created_at", "DESC")->paginate(6)
        ];

        return view("user.menu.study_case", $data);
    }

    public function contact_us()
    {
        return view("user.menu.kontak_kami");
    }

    public function kirim_komentar(Request $request)
    {
        Pesan::create($request->all());

        return back();
    }
}
