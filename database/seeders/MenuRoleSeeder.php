<?php

namespace Database\Seeders;

use App\Models\Akun\MenuRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuRole::create([
            "id_menu" => 2,
            "id_role" => 1
        ]);

        MenuRole::create([
            "id_menu" => 3,
            "id_role" => 1,
        ]);

        MenuRole::create([
            "id_menu" => 4,
            "id_role" => 1,
        ]);

        MenuRole::create([
            "id_menu" => 2,
            "id_role" => 2
        ]);
    }
}
