<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Home\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $data = [
            "data_testimonials" => Testimonial::get()
        ];

        return view("admin.pengaturan.testimonial.index", $data);
    }

    public function create()
    {
        return view("admin.pengaturan.testimonial.tambah");
    }

    public function store(Request $request)
    {
        if ($request->file("testimonial_home_profile")) {
            $data = $request->file("testimonial_home_profile")->store("testimonial");
        }

        Testimonial::create([
            "testimonial_home_profile" => $data,
            "testimonial_home_name" => $request->testimonial_home_name,
            "testimonial_home_jobtitle" => $request->testimonial_home_jobtitle,
            "testimonial_home_caption" => $request->testimonial_home_caption
        ]);

       return redirect()->intended('admin/pengaturan/testimonials')->with(["message" => '<script>swal("Berhasil", "Data Berhasil ditambahkan", "success");</script>']);
    }
    public function destroy($id)
    {
        Testimonial::where("id", decrypt($id))->delete();

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Hapus", "success");</script>']);
    }
}
