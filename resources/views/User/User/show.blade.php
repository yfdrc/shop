@extends("layouts.app")

@section("content")

    <div class="panel panel-success">
        <div class="panel-heading">
            快捷方式：@include("layouts.shortcut01")@can("department", new \App\Models\Role) || {!! link_to("User\User/create","增加用户") !!} | @endcan @can("department", new \App\Models\Role){!! link_to("User\User/$task->id/edit","编辑用户") !!}@endcan 
        </div>
        <div class="panel-body">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    用户详情
                </div>
                <div class="panel-body">
                    {{ Form::model($task, ["url"=>"User\User/$task->id", "method" => "DELETE", "class" => "form-horizontal"]) }}
                        <div class="form-group">
                            {{ Form::label("name", "名称", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::label("name", $task->name, ["class"=>"form-control"]) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("email", "邮件", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::label("email", $task->email, ["class"=>"form-control"]) }}
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
