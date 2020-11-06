@extends("layouts.app")

@section("content")

    <div class="panel panel-info">
        <div class="panel-heading">
            快捷方式：@include("layouts.shortcut01") || {!! link_to("User\Department/create","增加部门") !!} |  {!! link_to("User\Department/$task->id/edit","编辑部门") !!} 
        </div>
        <div class="panel-body">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    部门详情
                </div>
                <div class="panel-body">
                    {{ Form::model($task, ["url"=>"User\Department/$task->id", "method" => "DELETE", "class" => "form-horizontal"]) }}
                        <div class="form-group">
                            {{ Form::label("getParentName()", "上级部门", ["class"=>"col-sm-3 control-label"]) }}
                        <div class="col-sm-6">
                                {{ Form::text("getParentName()", $task->getParentName(), ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("name", "名称", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::text("name", $task->name, ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("description", "描述", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::text("description", $task->description, ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("telephone", "电话", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::text("telephone", $task->telephone, ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("email", "邮件", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::text("email", $task->email, ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("address", "地址", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::text("address", $task->address, ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
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
