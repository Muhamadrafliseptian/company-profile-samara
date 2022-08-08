<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function dashboard()
    {
        return view("user.menu.dashboard");
    }

    public function about_us()
    {
        return view("user.menu.about_us");
    }

    public function why_us()
    {
        return view("user.menu.why_us");
    }

    public function contact_us()
    {
        return view("user.menu.kontak_kami");
    }
}
