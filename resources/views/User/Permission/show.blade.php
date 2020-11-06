@extends("layouts.app")

@section("content")

    <div class="panel panel-info">
        <div class="panel-heading">
            快捷方式：@include("layouts.shortcut01") || {!! link_to("User\Permission/create","增加权限") !!} |  {!! link_to("User\Permission/$task->id/edit","编辑权限") !!} 
        </div>
        <div class="panel-body">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    权限详情
                </div>
                <div class="panel-body">
                    {{ Form::model($task, ["url"=>"User\Permission/$task->id", "method" => "DELETE", "class" => "form-horizontal"]) }}
                        <div class="form-group">
                            {{ Form::label("name", "权限名称", ["class"=>"col-sm-3 control-label"]) }}
                        <div class="col-sm-6">
                                {{ Form::text("name", $task->name, ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("label", "权限标签", ["class"=>"col-sm-3 control-label"]) }}
                        <div class="col-sm-6">
                                {{ Form::text("label", $task->label, ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("description", "权限描述", ["class"=>"col-sm-3 control-label"]) }}
                        <div class="col-sm-6">
                                {{ Form::text("description", $task->description, ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
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
