@extends("layouts.app")

@section("content")

    <div class="panel panel-info">
        <div class="panel-heading">
            快捷方式： @include("layouts.shortcut01") || {!! link_to("User\RolePerm/$task->id/edit","编辑角色权限") !!} 
        </div>
        <div class="panel-body">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    角色权限详情
                </div>
                <div class="panel-body">
                    {{ Form::model($task, ["url"=>"User\RolePerm/$task->id", "method" => "DELETE", "class" => "form-horizontal"]) }}
                        <div class="form-group">
                            {{ Form::label("label", "角色名称", ["class"=>"col-sm-3 control-label"]) }}
                        <div class="col-sm-6">
                                {{ Form::text("label", $task->label, ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("getPermissionsLabel()", "拥有权限", ["class"=>"col-sm-3 control-label"]) }}
                        <div class="col-sm-6">
                                {{ Form::text("getPermissionsLabel()", $task->getPermissionsLabel(), ["class"=>"form-control", 'readonly'=>'ReadOnly']) }}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
