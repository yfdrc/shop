@extends("layouts.app")

@section("content")

    <div class="panel panel-info">
        <div class="panel-heading">
            快捷方式：@include("layouts.shortcut01")@can("manage", new \App\Models\Role) || {!! link_to("User\Department/create","增加部门") !!}@endcan 
        </div>
        <div class="panel-body">
            @if (count($tasks) > 0)
                <div class="panel panel-info">
                    <div class="panel-heading">
                        部门列表
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>上级部门</th>
                                <th>名称</th>
                                <th>描述</th>
                                <th>电话</th>
                                <th>邮件</th>
                                <th>地址</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td width="10%">
                                            <div>{{ $task->getParentName() }}</div>
                                        </td>
                                        <td width="10%">
                                            <div>{{ $task->name }}</div>
                                        </td>
                                        <td width="20%">
                                            <div>{{ $task->description }}</div>
                                        </td>
                                        <td width="10%">
                                            <div>{{ $task->telephone }}</div>
                                        </td>
                                        <td width="10%">
                                            <div>{{ $task->email }}</div>
                                        </td>
                                        <td width="10%">
                                            <div>{{ $task->address }}</div>
                                        </td>
                                        <td>
                                            @can("show", new \App\Models\Role){!! link_to("User\Department/$task->id","详情") !!}@endcan @can("manage", new \App\Models\Role) | {!! link_to("User\Department/$task->id/edit","编辑") !!}@endcan @can("admin", new \App\Models\Role)
 | {!! link_to("User\Department/$task->id","删除") !!}@endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection
