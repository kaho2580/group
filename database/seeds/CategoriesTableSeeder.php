<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
            'id' => '1',
            'name' => 'こってり',
            'created_at' => now(),
            'updated_at' => now(),
                ],
                [
            'id' => '2',
            'name' => 'あっさり',
            'created_at' => now(),
            'updated_at' => now(),
                ],
                [
            'id' => '3',
            'name' => '高い',
            'created_at' => now(),
            'updated_at' => now(),
                ]
                ,
                [
            'id' => '4',
            'name' => '安い',
            'created_at' => now(),
            'updated_at' => now(),
                ]
            ]);
    }
}
