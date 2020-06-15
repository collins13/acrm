<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'name1' => 'African church',
            'name2' => 'African church',
            'name3' => 'African church',
            'email1' => 'acrm@gmail.com',
            'email2' => 'acrm@gmail.com',
            'email3' => 'acrm@gmail.com',
            'phone1' => '0722954539',
            'phone2' => '0722954539',
            'phone3' => '0722954539',
            // 'avatar' => file_get_contents('public/users/admin.jpeg'),
        ]);
    }
}
