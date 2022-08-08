<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function dashboard()
    {
        return view("user.menu.dashboard");
    }
}
