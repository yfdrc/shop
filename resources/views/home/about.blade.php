@extends('layouts.app')

@section('content')
    @include('common.errors')

    <div class="panel panel-primary">
        <div class="panel-heading">
            关于系统
        </div>
        <div class="panel-body">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    你目前拥有的权限：
                </div>
                <div class="panel-body">
                    <ol>
                        @can('index', new \App\Models\Role)
                            <li>
                                <a href="#">列表权限</a>
                            </li>
                        @endcan
                        @can('show', new \App\Models\Role)
                            <li>
                                <a href="#">查阅权限</a>
                            </li>
                        @endcan
                        @can('create', new \App\Models\Role)
                            <li>
                                <a href="#">新建权限</a>
                            </li>
                        @endcan
                        @can('edit', new \App\Models\Role)
                            <li>
                                <a href="#">编辑权限</a>
                            </li>
                        @endcan
                        @can('delete', new \App\Models\Role)
                            <li>
                                <a href="#">删除权限</a>
                            </li>
                        @endcan
                        @can('caiwu', new \App\Models\Role)
                            <li>
                                <a href="#">财务权限</a>
                            </li>
                        @endcan
                        @can('dianpu', new \App\Models\Role)
                            <li>
                                <a href="#">店长权限</a>
                            </li>
                        @endcan
                        @can('department', new \App\Models\Role)
                            <li>
                                <a href="#">分公司经理权限</a>
                            </li>
                        @endcan
                        @can('manage', new \App\Models\Role)
                            <li>
                                <a href="#">总经理权限</a>
                            </li>
                        @endcan
                        @can('admin', new \App\Models\Role)
                            <li>
                                <a href="#">管理员权限</a>
                            </li>
                        @endcan
                    </ol>
                </div>
            </div>
        </div>
    </div>

@endsection
