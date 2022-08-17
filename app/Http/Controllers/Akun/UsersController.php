<?php

namespace App\Http\Controllers\Akun;

use App\Http\Controllers\Controller;
use App\Models\Akun\Role;
use App\Models\User;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function index()
    {
        $data = [
            "data_users" => User::get()
        ];

        return view("admin.akun.users.index", $data);
    }

    public function create()
    {
        $data = [
            "data_role" => Role::get()
        ];

        return view("admin.akun.users.tambah", $data);
    }

    public function store(Request $request)
    {
        if ($request->file("foto")) {
            $data = $request->file("foto")->store("users");
        }

        User::create([
            "nama" => $request->nama,
            "email" => $request->email,
            "password" => bcrypt("password"),
            "foto" => $data,
            "created_by" => Auth::user()->id,
            "id_role" => $request->id_role
        ]);

        return redirect("/admin/akun/users")->with(["message" => '<script>swal("Berhasil", "Data Berhasil ditambahkan", "success");</script>']);
    }

    public function edit($id)
    {
        $data = [
            "data_role" => Role::get(),
            "edit" => User::where("id", decrypt($id))->first()
        ];

        return view("admin.akun.users.edit", $data);
    }

    public function update(Request $request, $id)
    {
        if ($request->file('foto')) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $data = $request->file("foto")->store("users");
        } else {
            $data = $request->gambarLama;
        }

        User::where("id", decrypt($id))->update([
            "nama" => $request->nama,
            "email" => $request->email,
            "id_role" => $request->id_role,
            "foto" => $data
        ]);

        return redirect("/admin/akun/users")->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Simpan", "success");</script>']);
    }

    public function destroy(Request $request, $id)
    {
        $users = User::where("id", decrypt($id))->first();

        Storage::delete($request->gambarLama);

        $users->delete();

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Berhasil", "success");</script>']);
    }
}
