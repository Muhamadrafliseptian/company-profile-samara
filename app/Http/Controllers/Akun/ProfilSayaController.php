<?php

namespace App\Http\Controllers\Akun;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilSayaController extends Controller
{
    public function index()
    {
        return view("admin.profil_saya.index");
    }

    public function update(Request $request, $id)
    {
        if ($request->file("foto")) {
            if (empty($request->gambarLama)) {
                $data = $request->file("foto")->store("users");
            } else {
                Storage::delete($request->gambarLama);

                $data = $request->file("foto")->store("users");
            }
        } else {
            $data = $request->gambarLama;
        }

        User::where("id", decrypt($id))->update([
            "nama" => $request->nama,
            "email" => $request->email,
            "foto" => $data
        ]);

        return back();
    }
}
