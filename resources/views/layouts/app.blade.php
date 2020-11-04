<!DOCTYPE html>
<html lang="cn">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'drc') }}</title>
    {!! Html::style('/public/css/drc.css') !!}
    {!! Html::style('/public/css/app.min.css') !!}
    {!! Html::script('/public/js/app.min.js') !!}
</head>
<body>
<div class="container">
    <div class="navbar navbar-default">
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">关于<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>{!! link_to("/","主页") !!}</li>
                        <li>{!! link_to("contact","联系我们") !!}</li>
                        <li>{!! link_to("about","关于系统") !!}</li>
                    </ul>
                </li>
                {{--<li class="dropdown">--}}
                {{--<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">系统<b class="caret"></b></a>--}}
                {{--<ul class="dropdown-menu">--}}
                {{--<li>{!! link_to("User/Department","部门管理列表") !!}</li>--}}
                {{--<li>{!! link_to("User/User","用户管理列表") !!}</li>--}}
                {{--<li>{!! link_to("User/Role","角色管理列表") !!}</li>--}}
                {{--<li>{!! link_to("User/Permission","权限管理列表") !!}</li>--}}
                {{--<li>{!! link_to("User/RolePerm","角色权限列表") !!}</li>--}}
                {{--<li>{!! link_to("User/UserRole","用户角色列表") !!}</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="dropdown">--}}
                {{--<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">安装<b class="caret"></b></a>--}}
                {{--<ul class="dropdown-menu">--}}
                {{--<li>{!! link_to("initdb","初始数据库") !!}</li>--}}
                {{--<li>{!! link_to("makeall","生成USER") !!}</li>--}}
                {{--<li>{!! link_to("makecat","生成类型") !!}</li>--}}
                {{--<li>{!! link_to("makegood","生成商品") !!}</li>--}}
                {{--<li>{!! link_to("makebuy","生成买入") !!}</li>--}}
                {{--<li>{!! link_to("makesell","生成卖出") !!}</li>--}}
                {{--<li>{!! link_to("maketj","生成统计") !!}</li>--}}
                {{--<li>{!! link_to("maketjbuy","生成统计购买") !!}</li>--}}
                {{--<li>{!! link_to("maketjsell","生成统计卖出") !!}</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">管理<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>{!! link_to("User/User","用户管理") !!}</li>
                        <li>{!! link_to("Setup/Good","商品管理") !!}</li>
                        <li class="divider" />
                        <li>{!! link_to("Tongji/All","购销统计") !!}</li>
                    </ul>
                </li>
                <li class="dropdown">{!! link_to("Work/Buy","买入") !!}</li>
                <li class="dropdown">{!! link_to("Work/Sell","卖出") !!}</li>
            </ul>
            <div class="navbar-right">
                <?php
                if (Auth::check()) {
                    echo link_to("auth/logout", "注销 - " . auth()->user()->name, ["class" => "navbar-brand"]);
                } else {
                    echo link_to("auth/login", "请登录", ["class" => "navbar-brand"]);
                    echo link_to("password/reset", "忘记密码", ["class" => "navbar-brand"]);
                }
                ?>
            </div>
        </div>
    </div>
    @include("common.errors")
    @yield('shortcut')
    @yield('content')
</div>
@yield('script')
</body>
</html>
