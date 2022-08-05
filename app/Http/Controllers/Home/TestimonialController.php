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
}
