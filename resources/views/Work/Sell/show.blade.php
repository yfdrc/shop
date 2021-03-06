@extends("layouts.app")

@section("content")

    <div class="panel panel-info">
        <div class="panel-heading">
            快捷方式：@include("layouts.shortcut03") || {!! link_to("Work\Sell/create","增加卖出商品") !!} |  {!! link_to("Work\Sell/$task->id/edit","编辑卖出商品") !!} 
        </div>
        <div class="panel-body">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    卖出商品详情
                </div>
                <div class="panel-body">
                    {{ Form::model($task, ["url"=>"Work\Sell/$task->id", "method" => "DELETE", "class" => "form-horizontal"]) }}
                        <div class="form-group">
                            {{ Form::label("good->cat->name", "类型", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::text("good->cat->name", $task->good->cat->name, ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("name", "名称", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::text("name", $task->name, ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("customer->name", "客户", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::text("customer->name", $task->customer->name, ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("money", "金额", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::text("money", $task->money, ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("price", "价格", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::text("price", $task->price, ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("amount", "数量", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::text("amount", $task->amount, ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("date", "日期", ["class"=>"col-sm-3 control-label"]) }}
                        <div class="col-sm-6">
                                {{ Form::date("date", date("Y-m-d",strtotime($task->date)), ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("who", "经手人", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::text("who", $task->who, ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
                            </div>
                        </div>
                            <hr width="90%">
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-danger">确定删除</button>
                                </div>
                            </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
