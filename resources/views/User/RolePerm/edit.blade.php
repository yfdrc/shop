@extends("layouts.app")

@section("content")

    <div class="panel panel-success">
        <div class="panel-heading">
            快捷方式： @include("layouts.shortcut01") || {!! link_to("User\RolePerm/$task->id","角色权限详情") !!}
        </div>
        <div class="panel-body">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    编辑角色权限
                </div>
                <div class="panel-body">
                    {{ Form::model($task, ["url"=>"User\RolePerm/$task->id", "method" => "PUT", "class" => "form-horizontal"]) }}
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            必填项目
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                {{ Form::label("role_id", "角色名称", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::label("role_id", $task->label, ["class"=>"form-control"]) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label("permission_id[]", "拥有权限", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    <table>
                                        @foreach ($permissions as $key=>$value)
                                        <tr>
                                            <td>
                                                {{ $value }}
                                            </td>
                                            <td width="10px"></td>
                                            <td>
                                                @if(in_array($key, $$task->permission_id[]))
                                                    {{ Form::checkbox("permission_id[]", $key, 1) }}
                                                @else
                                                    {{ Form::checkbox("permission_id[]", $key, null) }}
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </table>
                                </div>
                            </div>
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
