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
            'name1' => 'President: Daniel Masaka',
            'name2' => 'Grace Momadi',
            'name3' => 'Enoch Mogusu',
            'email1' => 'acrm@gmail.com',
            'email2' => 'acrm@gmail.com',
            'email3' => 'acrm@gmail.com',
            'phone1' => '+908 343 3022',
            'phone2' => '+908-343-3022',
            'phone3' => '+214-897-0088',
            // 'avatar' => file_get_contents('public/users/admin.jpeg'),
        ]);
    }
}
