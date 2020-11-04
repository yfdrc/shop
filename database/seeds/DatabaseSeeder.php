<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

require_once "SystemTableSeeder.php";
require_once "PermissionTableSeeder.php";
require_once "RoleTableSeeder.php";
require_once "DepartmentTableSeeder.php";
require_once "UserTableSeeder.php";
require_once "UserRoleTableSeeder.php";
require_once "RolePermissionTableSeeder.php";
require_once "ShopTableSeeder.php";

class DatabaseSeeder extends Seeder
{
    public function run()
    {
//        Model::unguard();
//
//        $this->call(SystemTableSeeder::class);
//        $this->call(departmentTableSeeder::class);
//        $this->call(UserTableSeeder::class);
//        $this->call(PermissionTableSeeder::class);
//        $this->call(RoleTableSeeder::class);
//        $this->call(RolePermissionTableSeeder::class);
//        $this->call(UserRoleTableSeeder::class);
//        $this->call(ShopTableSeeder::class);
//
//        Model::reguard();

        factory(\App\Models\Buy::class,50)->create();
        factory(\App\Models\Sell::class,500)->create();
    }
}
