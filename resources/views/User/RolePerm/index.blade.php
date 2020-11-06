@extends("layouts.app")

@section("content")

    <div class="panel panel-info">
        <div class="panel-heading">
            快捷方式：@include("layouts.shortcut01")
        </div>
        <div class="panel-body">
            @if (count($tasks) > 0)
                <div class="panel panel-info">
                    <div class="panel-heading">
                        角色权限列表
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>角色名称</th>
                                <th>拥有权限</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td width="10%">
                                            <div>{{ $task->label }}</div>
                                        </td>
                                        <td width="70%">
                                            <div>{{ $task->getPermissionsLabel() }}</div>
                                        </td>
                                        <td>
                                            @can("show", new \App\Models\Role){!! link_to("User\RolePerm/$task->id","详情") !!}@endcan @can("admin", new \App\Models\Role) | {!! link_to("User\RolePerm/$task->id/edit","编辑") !!}@endcan
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
