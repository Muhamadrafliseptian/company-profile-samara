<?php

namespace Database\Seeders;

use App\Models\Akun\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            "role" => "Super Admin"
        ]);

        Role::create([
            "role" => "Administrator"
        ]);

        Role::create([
            "role" => "admin"
        ]);
    }
}
