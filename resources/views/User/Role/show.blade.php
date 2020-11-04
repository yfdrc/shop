@extends("layouts.app")

@section("content")

    <div class="panel panel-success">
        <div class="panel-heading">
            快捷方式：@include("layouts.shortcut01")@can("admin", new \App\Models\Role) || {!! link_to("User\Role/create","增加角色") !!} | @endcan @can("admin", new \App\Models\Role){!! link_to("User\Role/$task->id/edit","编辑角色") !!}@endcan 
        </div>
        <div class="panel-body">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    角色详情
                </div>
                <div class="panel-body">
                    {{ Form::model($task, ["url"=>"User\Role/$task->id", "method" => "DELETE", "class" => "form-horizontal"]) }}
                        <div class="form-group">
                            {{ Form::label("name", "角色名称", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::label("name", $task->name, ["class"=>"form-control"]) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("label", "角色标签", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::label("label", $task->label, ["class"=>"form-control"]) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("right", "角色权重", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::label("right", $task->right, ["class"=>"form-control"]) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("description", "角色描述", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::label("description", $task->description, ["class"=>"form-control"]) }}
                            </div>
                        </div>
                        @can("admin", new \App\Models\Role)
                            <hr width="90%">
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-danger">确定删除</button>
                                </div>
                            </div>
                        @endcan
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
