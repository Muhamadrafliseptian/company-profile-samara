<?php

namespace App\Http\Controllers\Akun;

use App\Http\Controllers\Controller;
use App\Models\Akun\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $data = [
            "data_role" => Role::get()
        ];

        return view("admin.akun.role.index", $data);
    }

    public function store(Request $request)
    {
        Role::create($request->all());

      return redirect()->back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil ditambahkan", "success");</script>']);

    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Role::where("id", $request->id)->first()
        ];

        return view("admin.akun.role.edit", $data);
    }

    public function update(Request $request)
    {
        Role::where("id", decrypt($request->id))->update([
            "role" => $request->role
        ]);

        return redirect()->back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil disimpan", "success");</script>']);
    }

    public function destroy($id)
    {
        Role::where("id", $id)->delete();

        return back();
    }
}
