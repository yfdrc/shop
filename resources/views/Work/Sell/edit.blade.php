@extends("layouts.app")

@section("content")

    <div class="panel panel-success">
        <div class="panel-heading">
            快捷方式：@include("layouts.shortcut03") || {!! link_to("Work\Sell/create","增加卖出商品") !!} |  {!! link_to("Work\Sell/$task->id","卖出商品详情") !!}
        </div>
        <div class="panel-body">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    编辑卖出商品
                </div>
                <div class="panel-body">
                    {{ Form::model($task, ["url"=>"Work\Sell/$task->id", "method" => "PUT", "class" => "form-horizontal"]) }}
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            必填项目
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                {{ Form::label("good_id", "名称", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::text("good_id", good->name, ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label("customer_id", "客户", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::text("customer_id", customer->name, ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label("price", "价格", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::text("price", null, ["class"=>"form-control"]) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label("amount", "数量", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::text("amount", null, ["class"=>"form-control"]) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label("date", "日期", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::date("date", date("Y-m-d",strtotime($task->date)), ["class"=>"form-control"]) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label("who", "经手人", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::text("who", null, ["class"=>"form-control"]) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-warning">确定修改</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
