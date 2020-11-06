@extends("layouts.app")

@section("content")

    <div class="panel panel-info">
        <div class="panel-heading">
            快捷方式：@include("layouts.shortcut04")
        </div>
        <div class="panel-body">
            <div>
                <form method="put" class="form-inline"]>
                    <div class="form-group">
                        开始日期：<input type="date" class="form-control" name="datestart" value="{!! Illuminate\Support\Facades\Cache::get("selldatestart") !!}">
                    </div>
                    <div class="form-group">
                        结束日期：<input type="date" class="form-control" name="dateend" value="{!! Illuminate\Support\Facades\Cache::get("selldateend") !!}">
                    </div>
                    <div class="form-group">
                        每页行数：<input type="text" class="form-control" name="xshs" value="{!! Illuminate\Support\Facades\Cache::get("selltjhs") !!}">
                    </div>
                    <div class="form-group">
                        查询：<input type="text" class="form-control" name="cxnr" value="{!! Illuminate\Support\Facades\Cache::get("selltjcx") !!}" placeholder="购买商品统计">
                    </div>
                    <button type="submit" class="btn btn-default">确定</button>
                </form>
            </div>
            @if (count($tasks) > 0)
                <div class="panel panel-info">
                    <div class="panel-heading">
                        卖出商品统计列表
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>名称</th>
                                <th>金额</th>
                                <th>总量</th>
                                <th>均价</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td>
                                            <div>{{ $task->name }}</div>
                                        </td>
                                        <td>
                                            <div>{{ $task->money }}</div>
                                        </td>
                                        <td>
                                            <div>{{ $task->amount }}</div>
                                        </td>
                                        <td>
                                            <div>{{  $task->amount==0 ? "" : ((int)($task->money*100/$task->amount))/100.0 }}</div>
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
