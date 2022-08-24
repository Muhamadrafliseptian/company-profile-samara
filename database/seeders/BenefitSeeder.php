<?php

namespace Database\Seeders;

use App\Models\Pengaturan\Benefit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Benefit::create([
            "benefit_judul" => "Forum Diskusi",
            "benefit_deskripsi" => "Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet"
        ]);

        Benefit::create([
            "benefit_judul" => "Forum Diskusi",
            "benefit_deskripsi" => "Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet"
        ]);

        Benefit::create([
            "benefit_judul" => "Forum Diskusi",
            "benefit_deskripsi" => "Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet"
        ]);

        Benefit::create([
            "benefit_judul" => "Forum Diskusi",
            "benefit_deskripsi" => "Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet"
        ]);
    }
}
