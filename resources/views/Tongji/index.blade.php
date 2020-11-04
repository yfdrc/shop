@extends("layouts.app")

@section("content")

    <div class="panel panel-default">
        <div class="panel-heading">
            快捷方式：@include("layouts.shortcut04")
        </div>
        <div class="panel-body">
            <div>
                <form method="put" class="form-inline"]>
                    <input class="btn btn-success" name="btn" type="submit" value="今天">
                    <input class="btn btn-success" name="btn" type="submit" value="本月">
                    <input class="btn btn-success" name="btn" type="submit" value="今年">
                    <input class="btn btn-warning" name="btn" type="submit" value="上月">
                    <div class="form-group">
                        开始日期：<input type="date" class="form-control" name="datestart" value="{!! Illuminate\Support\Facades\Cache::get("tjdatestart") !!}">
                    </div>
                    <div class="form-group">
                        结束日期：<input type="date" class="form-control" name="dateend" value="{!! Illuminate\Support\Facades\Cache::get("tjdateend") !!}">
                    </div>
                    <input class="btn btn-default" name="btn" type="submit" value="确定">
                    <div class="form-group">
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseMore" aria-expanded="true" aria-controls="collapseMore">
                            更多条件
                        </button>
                    </div>
                    <div class="collapse" id="collapseMore">
                        <div class="card card-body">
                            <div class="form-group">
                                每页行数：<input type="text" class="cxsinput" name="xshs" value="{!! Illuminate\Support\Facades\Cache::get("tjhs") !!}">
                            </div>
                            <div class="form-group">
                                查询：<input type="text" class="cxlinput" name="cxnr" value="{!! Illuminate\Support\Facades\Cache::get("tjcx") !!}" placeholder="商品名称">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            @if (count($tasks) > 0)
                <div class="panel panel-info">
                    <div class="panel-heading">
                        购买商品统计列表
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>名称</th>
                                <th>购买金额</th>
                                <th>购买总量</th>
                                <th>购买均价</th>
                                <th>卖出金额</th>
                                <th>卖出总量</th>
                                <th>卖出均价</th>
                                <th>利润</th>
                                <th>存货</th>
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
                                            <div>{{ ((int)($task->money*100/$task->amount))/100.0 }}</div>
                                        </td>
                                        <td>
                                            <div>{{ $task->smoney }}</div>
                                        </td>
                                        <td>
                                            <div>{{ $task->samount }}</div>
                                        </td>
                                        <td>
                                            <div>{{ ((int)($task->smoney*100/$task->samount))/100.0 }}</div>
                                        </td>
                                        <td>
                                            <div>{{ (int)($task->smoney - $task->money) }}</div>
                                        </td>
                                        <td>
                                            <div>{{ (int)($task->amount - $task->samount) }}</div>
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
