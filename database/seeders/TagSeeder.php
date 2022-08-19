<?php

namespace Database\Seeders;

use App\Models\Blog\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            "nama" => "Forum"
        ]);

        Tag::create([
            "nama" => "Diskusi"
        ]);

        Tag::create([
            "nama" => "Makanan"
        ]);
    }
}
