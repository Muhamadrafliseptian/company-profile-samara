<?php

namespace App\Http\Controllers\pengaturan;

use Illuminate\Http\Request;
use App\Models\Master\Partner;
use App\Models\pengaturan\Client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    //
    public function index(){
        $data = [
            "data_clients" => Client::get()
        ];

        return view("admin.pengaturan.client.index", $data);
    }
     public function store(Request $request)
    {
        if ($request->file("image")) {
            $data = $request->file("image")->store("client");
        }

        Client::create([
            "image" => $data,
            "nama" => $request->nama,
            "deskripsi" => $request->deskripsi,
            "created_by" => Auth::user()->id
        ]);

        return redirect()->back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil ditambahkan", "success");</script>']);
    }
    public function edit($id)
    {
        $data = [
            "edit" => Client::where("id", decrypt($id))->first(),
            "data_clients" => Client::where("id", "!=", decrypt($id))->get(),
            "data_clients" => Client::get()

        ];

        return view("admin.pengaturan.client.edit", $data);
    }

    public function update(Request $request, $id)
    {
        if ($request->file("image")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }
            $data = $request->file("image")->store("client");
        } else {
            $data = $request->gambarLama;
        }

        Client::where("id", decrypt($id))->update([
            "nama" => $request->nama,
            "deskripsi" => $request->deskripsi,
            "image" => $data,
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil disimpan", "success");</script>']);
    }
    public function destroy(Request $request, $id)
    {
        $clients = Client::where("id", decrypt($id))->first();

        Storage::delete($request->gambarLama);
        $clients->delete();

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Hapus", "success");</script>']);
    }
}
