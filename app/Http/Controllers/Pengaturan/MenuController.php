<?php

namespace App\Http\Controllers\Pengaturan;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $data = [
            "data_menu" => Menu::get()
        ];

        return view("admin.pengaturan.menu.index", $data);
    }

    public function create()
    {
        $data = [
            "data_menu" => Menu::get()
        ];

        return view("admin.pengaturan.menu.tambah", $data);
    }

    public function store(Request $request)
    {
        if (empty($request->menu_id)) {
            $menu_id = 0;
        } else {
            $menu_id = 1;
        }

        Menu::create([
            "menu_nama" => $request->menu_nama,
            "menu_url" => $request->menu_url,
            "menu_icon" => $request->menu_icon,
            "menu_aktif" => 1,
            "menu_id" => $menu_id
        ]);

        return redirect("/admin/pengaturan/menu");
    }
}
