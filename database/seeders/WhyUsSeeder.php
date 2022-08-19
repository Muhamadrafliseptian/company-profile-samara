<?php

namespace Database\Seeders;

use App\Models\Pengaturan\WhyUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WhyUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WhyUs::create([
            "why_us_icon" => "fa fa-users",
            "why_us_name" => "Forum Diskusi",
            "why_us_deskripsi" => "Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet"
        ]);

        WhyUs::create([
            "why_us_icon" => "fa fa-user",
            "why_us_name" => "Forum Diskusi",
            "why_us_deskripsi" => "Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet"
        ]);

        WhyUs::create([
            "why_us_icon" => "fa fa-image",
            "why_us_name" => "Forum Diskusi",
            "why_us_deskripsi" => "Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet"
        ]);

        WhyUs::create([
            "why_us_icon" => "fa fa-upload",
            "why_us_name" => "Forum Diskusi",
            "why_us_deskripsi" => "Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet"
        ]);
    }
}
