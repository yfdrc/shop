@extends("layouts.app")

@section("content")

    <div class="panel panel-info">
        <div class="panel-heading">
            快捷方式：@include("layouts.shortcut01") || {!! link_to("User\Role/create","增加角色") !!} |  {!! link_to("User\Role/$task->id","角色详情") !!}
        </div>
        <div class="panel-body">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    编辑角色
                </div>
                <div class="panel-body">
                    {{ Form::model($task, ["url"=>"User\Role/$task->id", "method" => "PUT", "class" => "form-horizontal"]) }}
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            必填项目
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                {{ Form::label("name", "角色名称", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::text("name", $task->name, ["class"=>"form-control"]) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label("label", "角色标签", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::text("label", $task->label, ["class"=>"form-control"]) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label("right", "角色权重", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::text("right", $task->right, ["class"=>"form-control"]) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label("description", "角色描述", ["class"=>"col-sm-3 control-label"]) }}
                        <div class="col-sm-6">
                            {{ Form::text("description", $task->description, ["class"=>"form-control"]) }}
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
