<?php

namespace App\Http\Controllers\Akun;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        return redirect()->back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil disimpan", "success");</script>']);
    }

    public function ganti_password(Request $request)
    {
        if ($request->password_baru != $request->konfirmasi_password) {
            return back()->with(["message" => '<script>swal("Gagal", "Konfirmasi Password Tidak Sesuai", "error");</script>']);
        } else {
            User::where("id", Auth::user()->id)->update([
                "password" => bcrypt($request->password_baru)
            ]);

            return back()->with(["message" => '<script>swal("Berhasil", "Password Berhasil di Simpan", "success");</script>']);
        }
    }
}
