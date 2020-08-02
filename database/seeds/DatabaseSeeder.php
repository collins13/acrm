<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(Slider1Seeder::class);
        $this->call(Slider2Seeder::class);
        $this->call(Slider3Seeder::class);
    }
}
