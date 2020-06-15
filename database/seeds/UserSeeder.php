<?php

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
        DB::table('users')->insert([
            'name' => 'Kardesh Admin',
            'email' => 'acrm@gmail.com',
            // 'avatar' => file_get_contents('public/users/admin.jpeg'),
            'password' => bcrypt('123456')
        ]);
    }
}
