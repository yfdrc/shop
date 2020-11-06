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
                        用户角色列表
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>用户名称</th>
                                <th>拥有角色</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td width="10%">
                                            <div>{{ $task->name }}</div>
                                        </td>
                                        <td width="60%">
                                            <div>{{ $task->getRolesLabel() }}</div>
                                        </td>
                                        <td>
                                            @can("show", new \App\Models\Role){!! link_to("User\UserRole/$task->id","详情") !!}@endcan @can("department", new \App\Models\Role) | {!! link_to("User\UserRole/$task->id/edit","编辑") !!}@endcan
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
