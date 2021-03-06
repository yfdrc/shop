@extends("layouts.app")

@section("content")

    <div class="panel panel-info">
        <div class="panel-heading">
            快捷方式：@include("layouts.shortcut03")@can("index", new \App\Models\Role) || {!! link_to("Work\Buy/create","增加买入商品") !!}@endcan 
        </div>
        <div class="panel-body">
            <div>
                <form method="put" class="form-inline"]>
                    <div class="form-group">
                        每页行数：<input type="text" class="form-control" name="xshs" value="{!! Cache::get("buyhs") !!}">
                    </div>
                    <div class="form-group">
                        查询：<input type="text" class="form-control" name="cxnr" value="{!! Cache::get("buycx") !!}" placeholder="商品名称">
                    </div>
                    <button type="submit" class="btn btn-default">确定</button>
                </form>
            </div>
            @if (count($tasks) > 0)
                <div class="panel panel-info">
                    <div class="panel-heading">
                        买入商品列表
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>类型</th>
                                <th>名称</th>
                                <th>供货商</th>
                                <th>价格</th>
                                <th>数量</th>
                                <th>金额</th>
                                <th>日期</th>
                                <th>经手人</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td width="10%">
                                            <div>{{ $task->good->cat->name }}</div>
                                        </td>
                                        <td width="15%">
                                            <div>{{ $task->good->name }}</div>
                                        </td>
                                        <td width="15%">
                                            <div>{{ $task->supplier->name }}</div>
                                        </td>
                                        <td width="8%">
                                            <div>{{ $task->price }}</div>
                                        </td>
                                        <td width="8%">
                                            <div>{{ $task->amount }}</div>
                                        </td>
                                        <td width="8%">
                                            <div>{{ $task->money }}</div>
                                        </td>
                                        <td width="10%">
                                            <div>{{ date("Y-m-d",strtotime($task->date)) }}</div>
                                        </td>
                                        <td width="10%">
                                            <div>{{ $task->who }}</div>
                                        </td>
                                        <td>
                                            @can("index", new \App\Models\Role){!! link_to("Work\Buy/$task->id","详情") !!}@endcan @can("index", new \App\Models\Role) | {!! link_to("Work\Buy/$task->id/edit","编辑") !!}@endcan @can("admin", new \App\Models\Role)
 | {!! link_to("Work\Buy/$task->id","删除") !!}@endcan
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
