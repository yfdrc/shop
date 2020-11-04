<?php

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('departments')->insert([
            'parent_id' => null,
            'name' => '总店',
            'description' => '用于管理各店铺',
            'telephone' => '138*****',
            'email' => 'zd@qq.com',
            'address' =>'总店地址',
        ]);
        DB::table('departments')->insert([
            'parent_id' => 1,
            'name' => 'xx分店',
            'description' => '用于管理分店',
            'telephone' => '138*****',
            'email' => 'fd@qq.com',
            'address' =>'分店地址',
        ]);

    }
}
