@extends("layouts.app")

@section("content")

    <div class="panel panel-info">
        <div class="panel-heading">
            快捷方式：@include("layouts.shortcut01")@can("department", new \App\Models\Role) || {!! link_to("User\User/create","增加用户") !!}@endcan 
        </div>
        <div class="panel-body">
            @if (count($tasks) > 0)
                <div class="panel panel-info">
                    <div class="panel-heading">
                        用户列表
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>名称</th>
                                <th>邮件</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td width="20%">
                                            <div>{{ $task->name }}</div>
                                        </td>
                                        <td width="20%">
                                            <div>{{ $task->email }}</div>
                                        </td>
                                        <td>
                                            @can("show", new \App\Models\Role){!! link_to("User\User/$task->id","详情") !!}@endcan @can("department", new \App\Models\Role) | {!! link_to("User\User/$task->id/edit","编辑") !!}@endcan @can("admin", new \App\Models\Role)
 | {!! link_to("User\User/$task->id","删除") !!}@endcan
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
