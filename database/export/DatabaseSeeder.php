<?php



use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run()
    {
        
        DB::table('departments')->insert([
            
            [
                'id' => 1,
                'parent_id' => NULL,
                'name' => '总公司',
                'description' => '用于管理各店铺',
                'telephone' => '138*****',
                'email' => 'zf@qq.com',
                'address' => '总公司地址',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

            [
                'id' => 2,
                'parent_id' => 1,
                'name' => 'xx分公司',
                'description' => '用于管理分公司各店铺',
                'telephone' => '138*****',
                'email' => 'test1@qq.com',
                'address' => '分公司地址',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

            [
                'id' => 3,
                'parent_id' => 2,
                'name' => 'xx分公司01店',
                'description' => 'xx分公司01店',
                'telephone' => '2869xxxx',
                'email' => 'test2@qq.com',
                'address' => '店铺地址',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

        ]);
        DB::table('permission_role')->insert([
            
            [
                'permission_id' => 1,
                'role_id' => 1,
            ],

            [
                'permission_id' => 1,
                'role_id' => 2,
            ],

            [
                'permission_id' => 2,
                'role_id' => 2,
            ],

            [
                'permission_id' => 1,
                'role_id' => 3,
            ],

            [
                'permission_id' => 2,
                'role_id' => 3,
            ],

            [
                'permission_id' => 3,
                'role_id' => 3,
            ],

            [
                'permission_id' => 1,
                'role_id' => 4,
            ],

            [
                'permission_id' => 2,
                'role_id' => 4,
            ],

            [
                'permission_id' => 3,
                'role_id' => 4,
            ],

            [
                'permission_id' => 4,
                'role_id' => 4,
            ],

            [
                'permission_id' => 1,
                'role_id' => 5,
            ],

            [
                'permission_id' => 2,
                'role_id' => 5,
            ],

            [
                'permission_id' => 3,
                'role_id' => 5,
            ],

            [
                'permission_id' => 4,
                'role_id' => 5,
            ],

            [
                'permission_id' => 5,
                'role_id' => 5,
            ],

            [
                'permission_id' => 6,
                'role_id' => 6,
            ],

            [
                'permission_id' => 1,
                'role_id' => 7,
            ],

            [
                'permission_id' => 2,
                'role_id' => 7,
            ],

            [
                'permission_id' => 3,
                'role_id' => 7,
            ],

            [
                'permission_id' => 4,
                'role_id' => 7,
            ],

            [
                'permission_id' => 5,
                'role_id' => 7,
            ],

            [
                'permission_id' => 6,
                'role_id' => 7,
            ],

            [
                'permission_id' => 7,
                'role_id' => 7,
            ],

            [
                'permission_id' => 1,
                'role_id' => 8,
            ],

            [
                'permission_id' => 2,
                'role_id' => 8,
            ],

            [
                'permission_id' => 3,
                'role_id' => 8,
            ],

            [
                'permission_id' => 4,
                'role_id' => 8,
            ],

            [
                'permission_id' => 5,
                'role_id' => 8,
            ],

            [
                'permission_id' => 6,
                'role_id' => 8,
            ],

            [
                'permission_id' => 7,
                'role_id' => 8,
            ],

            [
                'permission_id' => 8,
                'role_id' => 8,
            ],

            [
                'permission_id' => 1,
                'role_id' => 9,
            ],

            [
                'permission_id' => 2,
                'role_id' => 9,
            ],

            [
                'permission_id' => 3,
                'role_id' => 9,
            ],

            [
                'permission_id' => 4,
                'role_id' => 9,
            ],

            [
                'permission_id' => 5,
                'role_id' => 9,
            ],

            [
                'permission_id' => 6,
                'role_id' => 9,
            ],

            [
                'permission_id' => 7,
                'role_id' => 9,
            ],

            [
                'permission_id' => 8,
                'role_id' => 9,
            ],

            [
                'permission_id' => 9,
                'role_id' => 9,
            ],

            [
                'permission_id' => 1,
                'role_id' => 10,
            ],

            [
                'permission_id' => 2,
                'role_id' => 10,
            ],

            [
                'permission_id' => 3,
                'role_id' => 10,
            ],

            [
                'permission_id' => 4,
                'role_id' => 10,
            ],

            [
                'permission_id' => 5,
                'role_id' => 10,
            ],

            [
                'permission_id' => 6,
                'role_id' => 10,
            ],

            [
                'permission_id' => 7,
                'role_id' => 10,
            ],

            [
                'permission_id' => 8,
                'role_id' => 10,
            ],

            [
                'permission_id' => 9,
                'role_id' => 10,
            ],

            [
                'permission_id' => 10,
                'role_id' => 10,
            ],

        ]);
        DB::table('permissions')->insert([
            
            [
                'id' => 1,
                'name' => 'index',
                'label' => '列表权限',
                'description' => '可以列表基本数据',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

            [
                'id' => 2,
                'name' => 'show',
                'label' => '查阅权限',
                'description' => '可以查阅基本数据',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

            [
                'id' => 3,
                'name' => 'create',
                'label' => '新建权限',
                'description' => '可以新建基本数据',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

            [
                'id' => 4,
                'name' => 'edit',
                'label' => '编辑权限',
                'description' => '可以编辑基本数据',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

            [
                'id' => 5,
                'name' => 'delete',
                'label' => '删除权限',
                'description' => '可以删除基本数据',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

            [
                'id' => 6,
                'name' => 'caiwu',
                'label' => '财务人员权限',
                'description' => '可以操作财务数据',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

            [
                'id' => 7,
                'name' => 'dianpu',
                'label' => '店长权限',
                'description' => '可以操作店铺基本和财务数据',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

            [
                'id' => 8,
                'name' => 'department',
                'label' => '分公司经理权限',
                'description' => '可以操作分公司基本和财务数据',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

            [
                'id' => 9,
                'name' => 'manage',
                'label' => '总经理权限',
                'description' => '可以操作所有部门基本和财务数据',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

            [
                'id' => 10,
                'name' => 'admin',
                'label' => '管理员权限',
                'description' => '拥有终极权限',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

        ]);
        DB::table('role_user')->insert([
            
            [
                'user_id' => 1,
                'role_id' => 10,
            ],

            [
                'user_id' => 2,
                'role_id' => 8,
            ],

        ]);
        DB::table('roles')->insert([
            
            [
                'id' => 1,
                'name' => 'indexs',
                'label' => '列表角色',
                'right' => 10,
                'description' => '用于列表基本数据',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

            [
                'id' => 2,
                'name' => 'shows',
                'label' => '查阅角色',
                'right' => 20,
                'description' => '用于列表查阅基本数据',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

            [
                'id' => 3,
                'name' => 'creaters',
                'label' => '新建角色',
                'right' => 30,
                'description' => '用于列表查阅新建基本数据',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

            [
                'id' => 4,
                'name' => 'editors',
                'label' => '编辑角色',
                'right' => 40,
                'description' => '用于列表新建查编基本数据',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

            [
                'id' => 5,
                'name' => 'deleters',
                'label' => '删除角色',
                'right' => 50,
                'description' => '用于列表新建查编删基本数据',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

            [
                'id' => 6,
                'name' => 'caiwus',
                'label' => '财务角色',
                'right' => 60,
                'description' => '用于操作财务数据',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

            [
                'id' => 7,
                'name' => 'dianpus',
                'label' => '店长角色',
                'right' => 200,
                'description' => '用于操作店铺基本和财务数据',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

            [
                'id' => 8,
                'name' => 'departments',
                'label' => '分公司经理角色',
                'right' => 500,
                'description' => '用于操作分公司基本和财务数据',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

            [
                'id' => 9,
                'name' => 'managers',
                'label' => '总经理角色',
                'right' => 800,
                'description' => '用于操作公司所有基本和财务数据',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

            [
                'id' => 10,
                'name' => 'admins',
                'label' => '管理员角色',
                'right' => 1000,
                'description' => '用于任何操作',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

        ]);
        DB::table('systems')->insert([
            
            [
                'id' => 1,
                'name' => 'about',
                'desc' => '关于系统',
                'memo' => '本系统主要......',
                'created_at' => NULL,
                'updated_at' => NULL,
            ]

        ]);
        DB::table('users')->insert([
            
            [
                'id' => 1,
                'department_id' => 1,
                'name' => 'drc',
                'email' => 'test1@qq.com',
                'password' => '$2y$10$4bvYkbB9phVpFzbR7FFQxemwlISpu4UmGavE72gww05iG9YJGjFQG',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

            [
                'id' => 2,
                'department_id' => 2,
                'name' => 'red',
                'email' => 'red@qq.com',
                'password' => '$2y$10$oULa.3C8m0M9dbxcO5xxTuCLGTS.bfVMiCmIpcqj/aagWP1pifxZC',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

        ]);
        DB::table('yuwens')->insert([
            
            [
                'id' => 1,
                'page' => 2,
                'chapter' => '2',
                'toread' => '2',
                'towrite' => NULL,
                'tolook' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],

            [
                'id' => 2,
                'page' => 3,
                'chapter' => '2',
                'toread' => '333',
                'towrite' => NULL,
                'tolook' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-11-15 07:35:45',
            ],

        ]);
        DB::table('yuwenwzs')->insert([
            
            [
                'id' => 1,
                'wz' => '2',
                'toreadcw' => 2,
                'toreadzq' => 0,
                'towritecw' => 0,
                'towritezq' => 0,
                'toreadlast' => 0,
                'towritelast' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ]

        ]);
    }
}