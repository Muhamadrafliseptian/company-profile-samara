<?php

namespace App\Http\Controllers\Akun;

use App\Http\Controllers\Controller;
use App\Models\Akun\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index()
    {
        $data = [
            "data_users" => User::get()
        ];

        return view("admin.users.index", $data);
    }

    public function create()
    {
        $data = [
            "data_role" => Role::get()
        ];

        return view("admin.users.tambah", $data);
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

      return redirect()->back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil ditambahkan", "success");</script>']);

    }
}
