<?php

namespace Database\Seeders;

use App\Models\Solusi\KategoriSolusi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSolusiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriSolusi::create([
            "kategori_solusi" => "Forum"
        ]);

        KategoriSolusi::create([
            "kategori_solusi" => "Diskusi"
        ]);
    }
}
