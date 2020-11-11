@extends("layouts.app")

@section("content")

    <div class="panel panel-info">
        <div class="panel-heading">
            快捷方式：@include("layouts.shortcut02")@can("manage", new \App\Models\Role) || {!! link_to("Setup\Cat/create","增加商品分类") !!}@endcan 
        </div>
        <div class="panel-body">
            <div>
                <form method="put" class="form-inline"]>
                    <div class="form-group">
                        每页行数：<input type="text" class="form-control" name="xshs" value="{!! Cache::get("caths") !!}">
                    </div>
                    <div class="form-group">
                        查询：<input type="text" class="form-control" name="cxnr" value="{!! Cache::get("catcx") !!}" placeholder="分类名称">
                    </div>
                    <button type="submit" class="btn btn-default">确定</button>
                </form>
            </div>
            @if (count($tasks) > 0)
                <div class="panel panel-info">
                    <div class="panel-heading">
                        商品分类列表
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>名称</th>
                                <th>描述</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td width="20%">
                                            <div>{{ $task->name }}</div>
                                        </td>
                                        <td width="60%">
                                            <div>{{ $task->description }}</div>
                                        </td>
                                        <td>
                                            @can("show", new \App\Models\Role){!! link_to("Setup\Cat/$task->id","详情") !!}@endcan @can("manage", new \App\Models\Role) | {!! link_to("Setup\Cat/$task->id/edit","编辑") !!}@endcan @can("admin", new \App\Models\Role)
 | {!! link_to("Setup\Cat/$task->id","删除") !!}@endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $tasks->links() !!}
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection
