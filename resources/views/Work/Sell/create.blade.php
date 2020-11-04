@extends("layouts.app")

@section("content")

    <div class="panel panel-success">
        <div class="panel-heading">
            快捷方式：@include("layouts.shortcut03")
        </div>
        <div class="panel-body">
            <div class="panel panel-success">
                <div class="panel-heading">
                    新建卖出商品
                </div>
                <div class="panel-body">
                    {!! Form::open(["url"=>"Work\Sell","method"=>"POST","class"=>"form-horizontal"]) !!}
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            必填项目
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                {{ Form::label("good_id", "名称", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::select("good_id",$tasks, null, ["class"=>"form-control"]) }}
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
                                    {{ Form::text("date", null, ["class"=>"form-control"]) }}
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
                            <button type="submit" class="btn btn-success">确定增加</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection