<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'title' => '素晴らしい',
            'body' => 'おいしい',
            'user_id' => 1,
            'category_id' => 1,
            'visited_at' => date('2022-01-30'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
 
        ]);
        
        DB::table('reviews')->insert([
            'title' => '素晴らしい',
            'body' => 'おいしい',
            'user_id' => 1,
            'category_id' => 2,
            'visited_at' => date('2022-01-30'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
 
        ]);
        
        DB::table('reviews')->insert([
            'title' => '素晴らしい',
            'body' => 'おいしい',
            'user_id' => 1,
            'category_id' => 3,
            'visited_at' => date('2022-01-30'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
 
        ]);
        
        DB::table('reviews')->insert([
            'title' => '素晴らしい',
            'body' => 'おいしい',
            'user_id' => 1,
            'category_id' => 4,
            'visited_at' => date('2022-01-30'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
 
        ]);
    }
}
