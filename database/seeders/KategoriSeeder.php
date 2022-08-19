<?php

namespace Database\Seeders;

use App\Models\Blog\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            "nama_kategori" => "Makanan",
            "slug" => "makanan"
        ]);

        Kategori::create([
            "nama_kategori" => "Diskusi Forum",
            "slug" => "diskusi-forum"
        ]);

        Kategori::create([
            "nama_kategori" => "Majalah Koran",
            "slug" => "majalah-koran"
        ]);
    }
}
