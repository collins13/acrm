<?php

use Illuminate\Database\Seeder;

class Slider3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slider3s')->insert([
            'image1' => 'color_background_surface_solid_18481_2560x1080.jpg',
            'image2' => 'color_background_surface_solid_18481_2560x1080.jpg',
            'image3' => 'color_background_surface_solid_18481_2560x1080.jpg',
            // 'avatar' => file_get_contents('public/users/admin.jpeg'),
        ]);
    }
}
