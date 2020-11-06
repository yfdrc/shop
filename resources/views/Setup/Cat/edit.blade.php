@extends("layouts.app")

@section("content")

    <div class="panel panel-info">
        <div class="panel-heading">
            快捷方式：@include("layouts.shortcut02") || {!! link_to("Setup\Cat/create","增加商品分类") !!} |  {!! link_to("Setup\Cat/$task->id","商品分类详情") !!}
        </div>
        <div class="panel-body">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    编辑商品分类
                </div>
                <div class="panel-body">
                    {{ Form::model($task, ["url"=>"Setup\Cat/$task->id", "method" => "PUT", "class" => "form-horizontal"]) }}
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            必填项目
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                {{ Form::label("name", "名称", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::text("name", null, ["class"=>"form-control"]) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label("description", "描述", ["class"=>"col-sm-3 control-label"]) }}
                        <div class="col-sm-6">
                            {{ Form::textarea("description", $task->description, ["class"=>"form-control"]) }}
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
