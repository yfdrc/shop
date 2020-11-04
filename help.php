<?php

/*

一、php artisan
（一）数据库操作
1、建立session表
php artisan session:table
php artisan cache:table
php artisan queue:table
php artisan notifications:table

2、将表增加到数据库
php artisan migrate

3、将表自数据库删除
php artisan migrate:reset
php artisan migrate:rollback

4、将表自数据库删除再重建
php artisan migrate:fresh
php artisan migrate:refresh

5、将内容增加到数据库的表中
php artisan db:seed

（二）make操作
1、建立auth路由、控制及视图
php artisan make:event
php artisan make:controller UserController --resource

（三）生产
php artisan key:generate
php artisan event:generate

（四）优化
php artisan config:cache
php artisan route:cache
php artisan view:cache

二、composer
composer require drc/tools
composer update
composer u
composer i
composer selfupdate
composer config
composer dumpautoload
composer outdated

三、使用镜像
composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/
composer config -g repo.packagist composer https://packagist.phpcomposer.com
composer config -g --unset repos.packagist
,
    "repositories":[
        {
            "type":"git",
            "url":"D:\\Backup\\AppServ\\www\\tools"
        }
    ]

四、使用mod_rewrite
1.在conf目录的httpd.conf文件中找到：
LoadModule rewrite_module modules/mod_rewrite.so
2.在要支持url rewirte的目录启用 Options FollowSymLinks和AllowOverride All
　　<Directory "D:/Backup/AppServ/www/">
　　　　Options Indexes FollowSymLinks
　　　　AllowOverride All
　　　　Order allow,deny
　　　　Allow from all
　　</Directory>
3.在www/drc/根目录下添加.htaccess文件

*/
