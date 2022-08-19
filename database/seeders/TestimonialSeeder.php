<?php

namespace Database\Seeders;

use App\Models\Home\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class TestimonialSeeder extends Seeder
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
            Testimonial::create([
                "testimonial_home_profile" => "testimonial/TX4Wi2sk98ZUiYF4RclNgNqg0UdHlMsgxInWgqPb.png",
                "testimonial_home_name" => $faker->name,
                "testimonial_home_jobtitle" => $faker->jobTitle,
                "testimonial_home_caption" => $faker->text(200),
            ]);
        }
    }
}
