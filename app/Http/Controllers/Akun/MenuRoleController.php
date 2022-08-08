<?php

namespace App\Http\Controllers\Akun;

use App\Http\Controllers\Controller;
use App\Models\Akun\MenuRole;
use App\Models\Akun\Role;
use Illuminate\Http\Request;

class MenuRoleController extends Controller
{
    public function index()
    {
        $data = [
            "data_menu_role" => MenuRole::get()
        ];

        return view("admin.pengaturan.menu.index", $data);
    }

    public function create()
    {
        $data = [
            "data_role" => Role::get()
        ];

        return view("admin.pengaturan.menu.tambah", $data);
    }

    public function store(Request $request)
    {
        MenuRole::create($request->all());

        return redirect("/admin/pengaturan/menu");
    }

    public function edit($id)
    {
        $data = [
            "data_role" => Role::get(),
            "edit" => MenuRole::where("id", decrypt($id))->first()
        ];

        return view("admin.pengaturan.menu.edit", $data);
    }

    public function update(Request $request, $id)
    {
        MenuRole::where("id", decrypt($id))->update([
            "menu_nama" => $request->menu_nama,
            "menu_icon" => $request->menu_icon,
            "menu_url" => $request->menu_url,
            "menu_aktif" => $request->menu_aktif,
            "menu_akses" => $request->menu_akses
        ]);

        return redirect("/admin/pengaturan/menu");
    }
}
