<?php

use Illuminate\Database\Seeder;

class ShopTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cats')->insert([
            'name' => '茶叶',
            'description' => '各类茶叶',
        ]);
        DB::table('cats')->insert([
            'name' => '酒类',
            'description' => '各类酒',
        ]);

        DB::table('goods')->insert([
            'cat_id' => '1',
            'name' => '红茶01',
            'from' => '广东',
            'buy' => '2000',
            'sell' => '6500',
            'howlong' => '24',
        ]);
        DB::table('goods')->insert([
            'cat_id' => '1',
            'name' => '绿茶01',
            'from' => '广西',
            'buy' => '1500',
            'sell' => '3500',
            'howlong' => '24',
        ]);
        DB::table('goods')->insert([
            'cat_id' => '1',
            'name' => '铁观音',
            'from' => '云南',
            'buy' => '2000',
            'sell' => '5000',
            'howlong' => '36',
        ]);

    }
}
