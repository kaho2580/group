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
            'body' => 'この辺りで一番おいしいと思います。',
            'user_id' => 1,
            'category_id' => 1,
            'visited_at' => date('2022-01-30'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
 
        ]);
        
        DB::table('reviews')->insert([
            'title' => '良い',
            'body' => '素材の味がしてすばらしい！',
            'user_id' => 1,
            'category_id' => 2,
            'visited_at' => date('2022-01-30'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
 
        ]);
        
        DB::table('reviews')->insert([
            'title' => '及第点',
            'body' => '美味しいといえば美味しい',
            'user_id' => 1,
            'category_id' => 3,
            'visited_at' => date('2022-01-30'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
 
        ]);
        
        DB::table('reviews')->insert([
            'title' => '最強',
            'body' => '今まで食べたラーメンで一番美味しいです。',
            'user_id' => 1,
            'category_id' => 1,
            'visited_at' => date('2022-01-30'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
 
        ]);
        
        DB::table('reviews')->insert([
            'title' => '微妙',
            'body' => '次はないかな...',
            'user_id' => 1,
            'category_id' => 2,
            'visited_at' => date('2022-01-30'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
 
        ]);
        
        DB::table('reviews')->insert([
            'title' => '待ち時間が長い',
            'body' => 'でも美味しいです。',
            'user_id' => 1,
            'category_id' => 3,
            'visited_at' => date('2022-01-30'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
 
        ]);
        
        DB::table('reviews')->insert([
            'title' => '想像と違う',
            'body' => '値段も納得いきません',
            'user_id' => 1,
            'category_id' => 4,
            'visited_at' => date('2022-01-30'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
 
        ]);
        
        DB::table('reviews')->insert([
            'title' => 'また行きたい',
            'body' => 'おいしい',
            'user_id' => 1,
            'category_id' => 4,
            'visited_at' => date('2022-01-30'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
 
        ]);
    }
}
