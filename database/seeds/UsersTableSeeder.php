<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('users')->insert([
            'name' => 'ねこ',
            'email' => 'nekoneko@gmail.com',
            'password' => 'nekoneko',
            'profile' => 'こんにちは',
            'image_path' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
