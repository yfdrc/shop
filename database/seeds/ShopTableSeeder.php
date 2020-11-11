<?php

use Illuminate\Database\Seeder;

class ShopTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cats')->insert([
            'name' => '未指定',
            'description' => '未指定的商品类型。',
        ]);
        DB::table('customers')->insert([
            'name' => '未指定',
            'description' => '未指定的大客户。',
        ]);
        DB::table('suppliers')->insert([
            'name' => '未指定',
            'description' => '未指定的供货商。',
        ]);

    }
}
