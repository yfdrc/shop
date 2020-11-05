@extends("layouts.app")

@section("content")

    <div class="panel panel-success">
        <div class="panel-heading">
            快捷方式：@include("layouts.shortcut02") || {!! link_to("Setup\Good/create","增加商品信息") !!} |  {!! link_to("Setup\Good/$task->id","商品信息详情") !!}
        </div>
        <div class="panel-body">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    编辑商品信息
                </div>
                <div class="panel-body">
                    {{ Form::model($task, ["url"=>"Setup\Good/$task->id", "method" => "PUT", "class" => "form-horizontal"]) }}
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            必填项目
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                {{ Form::label("cat_id", "类型", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::label("cat_id", $task->cat->name, ["class"=>"form-control"]) }}
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
                            <button type="submit" class="btn btn-warning">确定修改</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
