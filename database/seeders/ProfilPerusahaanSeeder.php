<?php

namespace Database\Seeders;

use App\Models\ProfilPerusahaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilPerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProfilPerusahaan::create([
            "logo" => "http://127.0.0.1:8000/storage/profil_perusahaan/xc1KC2Uc30uXCGL3563PUbwUbhP4nPfDK2rbBInp.png",
            "nama_perusahaan" => "PT. Cidhayu Brenchmarking",
            "no_hp" => "085224503737",
            "email" => "admin@gmail.com",
            "negara" => "Indonesia",
            "kode_pos" => "45052",
            "peta" => "NULL",
            "alamat" => "Bandung",
            "deskripsi" => "Lorem ipsum dolor sit amet"
        ]);
    }
}
