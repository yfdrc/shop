@extends("layouts.app")

@section("content")

    <div class="panel panel-info">
        <div class="panel-heading">
            快捷方式：@include("layouts.shortcut02")
        </div>
        <div class="panel-body">
            <div class="panel panel-success">
                <div class="panel-heading">
                    新建商品信息
                </div>
                <div class="panel-body">
                    {!! Form::open(["url"=>"Setup\Good","method"=>"POST","class"=>"form-horizontal"]) !!}
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            必填项目
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                {{ Form::label("cat_id", "类型", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::select("cat_id",$tasks, null, ["class"=>"form-control"]) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label("name", "名称", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::text("name", null, ["class"=>"form-control"]) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label("from", "产地", ["class"=>"col-sm-3 control-label"]) }}
                        <div class="col-sm-6">
                            {{ Form::text("from", null, ["class"=>"form-control"]) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label("buy", "进价", ["class"=>"col-sm-3 control-label"]) }}
                        <div class="col-sm-6">
                            {{ Form::text("buy", null, ["class"=>"form-control"]) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label("sell", "售价", ["class"=>"col-sm-3 control-label"]) }}
                        <div class="col-sm-6">
                            {{ Form::text("sell", null, ["class"=>"form-control"]) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label("howlong", "保质期", ["class"=>"col-sm-3 control-label"]) }}
                        <div class="col-sm-6">
                            {{ Form::text("howlong", null, ["class"=>"form-control"]) }}
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
