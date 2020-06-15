<?php

use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            'name' => 'Video Sample.mp4',
            // 'avatar' => file_get_contents('public/users/admin.jpeg'),
        ]);
    }
}
