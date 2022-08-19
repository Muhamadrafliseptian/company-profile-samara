<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "nama" => "Super Admin",
            "email" => "super_admin@gmail.com",
            "password" => bcrypt("super_admin"),
            "created_by" => 0,
            "id_role" => 1,
        ]);

        User::create([
            "nama" => "Administrator",
            "email" => "administrator@gmail.com",
            "password" => bcrypt("admin"),
            "created_by" => 0,
            "id_role" => 1,
        ]);
    }
}
