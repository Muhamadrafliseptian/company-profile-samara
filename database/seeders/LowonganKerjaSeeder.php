<?php

namespace Database\Seeders;

use App\Models\Blog\LowonganKerja;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class LowonganKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 20; $i++) {
            LowonganKerja::create([
                "lowongan_nama" => $faker->jobTitle,
                "lowongan_alamat" => $faker->address,
                "lowongan_gaji" => "500000",
                "lowongan_deskripsi" => $faker->paragraph(3, true),
                "lowongan_foto" => $faker->imageUrl(640, 480, 'job')
            ]);
        }
    }
}
