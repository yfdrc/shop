@extends("layouts.app")

@section("content")

    <div class="panel panel-success">
        <div class="panel-heading">
            快捷方式： @include("layouts.shortcut01")@can("admin", new \App\Models\Role) || {!! link_to("User\RolePerm/$task->id/edit","编辑角色权限") !!}@endcan 
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
                                {{ Form::label("label", $task->label, ["class"=>"form-control"]) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("getPermissionsLabel()", "拥有权限", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::label("getPermissionsLabel()", $task->getPermissionsLabel(), ["class"=>"form-control"]) }}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
