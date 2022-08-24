<?php

namespace Database\Seeders;

use App\Models\Pengaturan\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            "menu_nama" => "Dashboard",
            "menu_url" => "#",
            "menu_icon" => "fa fa-dashboard",
            "menu_aktif" => 1,
            "menu_id" => 0
        ]);

        Menu::create([
            "menu_nama" => "Laporan",
            "menu_url" => "admin/laporan",
            "menu_icon" => "fa fa-upload",
            "menu_aktif" => 1,
            "menu_id" => 0
        ]);

        Menu::create([
            "menu_nama" => "Dashboard V2",
            "menu_url" => "admin/dashboard/v2",
            "menu_icon" => "fa fa-dashboard",
            "menu_aktif" => 1,
            "menu_id" => 1
        ]);

        Menu::create([
            "menu_nama" => "Dashboard V3",
            "menu_url" => "admin/dashboard/v3",
            "menu_icon" => "fa fa-home",
            "menu_aktif" => 1,
            "menu_id" => 1
        ]);
    }
}
