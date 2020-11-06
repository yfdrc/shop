@extends("layouts.app")

@section("content")

    <div class="panel panel-info">
        <div class="panel-heading">
            快捷方式：@include("layouts.shortcut01")@can("admin", new \App\Models\Role) || {!! link_to("User\Role/create","增加角色") !!}@endcan 
        </div>
        <div class="panel-body">
            @if (count($tasks) > 0)
                <div class="panel panel-info">
                    <div class="panel-heading">
                        角色列表
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>角色名称</th>
                                <th>角色标签</th>
                                <th>角色权重</th>
                                <th>角色描述</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td width="10%">
                                            <div>{{ $task->name }}</div>
                                        </td>
                                        <td width="10%">
                                            <div>{{ $task->label }}</div>
                                        </td>
                                        <td width="10%">
                                            <div>{{ $task->right }}</div>
                                        </td>
                                        <td width="25%">
                                            <div>{{ $task->description }}</div>
                                        </td>
                                        <td>
                                            @can("show", new \App\Models\Role){!! link_to("User\Role/$task->id","详情") !!}@endcan @can("admin", new \App\Models\Role) | {!! link_to("User\Role/$task->id/edit","编辑") !!}@endcan @can("admin", new \App\Models\Role)
 | {!! link_to("User\Role/$task->id","删除") !!}@endcan
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
