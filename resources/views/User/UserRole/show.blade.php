@extends("layouts.app")

@section("content")

    <div class="panel panel-success">
        <div class="panel-heading">
            快捷方式： @include("layouts.shortcut01")@can("department", new \App\Models\Role) || {!! link_to("User\UserRole/$task->id/edit","编辑用户角色") !!}@endcan 
        </div>
        <div class="panel-body">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    用户角色详情
                </div>
                <div class="panel-body">
                    {{ Form::model($task, ["url"=>"User\UserRole/$task->id", "method" => "DELETE", "class" => "form-horizontal"]) }}
                        <div class="form-group">
                            {{ Form::label("name", "用户名称", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::label("name", $task->name, ["class"=>"form-control"]) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("getRolesLabel()", "拥有角色", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::label("getRolesLabel()", $task->getRolesLabel(), ["class"=>"form-control"]) }}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
