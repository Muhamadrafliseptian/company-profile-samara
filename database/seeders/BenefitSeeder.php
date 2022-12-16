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
            "benefit_icon" => "bi bi-activity icon",
            "benefit_judul" => "Strategic Thinking",
            "benefit_deskripsi" => "We focuses on the strategic needs of your businesses to determine the technology capabilities needed to support long-term goals."
        ]);

        Benefit::create([
            "benefit_icon" => "bi bi-activity icon",
            "benefit_judul" => "Technology Solutions",
            "benefit_deskripsi" => "We help companies confidently address technology-related decisions, agile & effective to create their firm of the future."
        ]);

        Benefit::create([
            "benefit_icon" => "bi bi-activity icon",
            "benefit_judul" => "Business Partner",
            "benefit_deskripsi" => "We’re more than just techies, or consultants, We’re dedicated professionals as passionate about business as we are about technology."
        ]);

        Benefit::create([
            "benefit_icon" => "bi bi-activity icon",
            "benefit_judul" => "Problem Solver",
            "benefit_deskripsi" => "We love challenges. There will always be another problem to solve, another innovation to implement, but we’re not about giving up."
        ]);
    }
}
