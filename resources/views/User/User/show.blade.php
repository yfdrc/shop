@extends("layouts.app")

@section("content")

    <div class="panel panel-info">
        <div class="panel-heading">
            快捷方式：@include("layouts.shortcut01") || {!! link_to("User\User/create","增加用户") !!} |  {!! link_to("User\User/$task->id/edit","编辑用户") !!} 
        </div>
        <div class="panel-body">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    用户详情
                </div>
                <div class="panel-body">
                    {{ Form::model($task, ["url"=>"User\User/$task->id", "method" => "DELETE", "class" => "form-horizontal"]) }}
                        <div class="form-group">
                            {{ Form::label("department", "部门", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::text("department", $task->department->name, ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("name", "名称", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::text("name", $task->name, ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("email", "邮件", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::text("email", $task->email, ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("password", "密码", ["class"=>"col-sm-3 control-label"]) }}
                        <div class="col-sm-6">
                                {{ Form::password("password", null, ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
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
