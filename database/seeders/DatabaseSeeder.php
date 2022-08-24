<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(BenefitSeeder::class);
        $this->call(ProfilPerusahaanSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(KategoriSolusiSeeder::class);
        $this->call(LowonganKerjaSeeder::class);
        $this->call(WhyUsSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(MenuRoleSeeder::class);
    }
}
