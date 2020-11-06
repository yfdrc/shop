@extends("layouts.app")

@section("content")

    <div class="panel panel-info">
        <div class="panel-heading">
            快捷方式： @include("layouts.shortcut01") || {!! link_to("User\UserRole/$task->id","用户角色详情") !!}
        </div>
        <div class="panel-body">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    编辑用户角色
                </div>
                <div class="panel-body">
                    {{ Form::model($task, ["url"=>"User\UserRole/$task->id", "method" => "PUT", "class" => "form-horizontal"]) }}
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            必填项目
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                {{ Form::label("name", "用户名称", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::text("name", $task->name, ["class"=>"form-control"]) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label("role_id", "拥有角色", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    <table>
                                        @foreach ($roles as $key=>$value)
                                        <tr>
                                            <td>
                                                {{ $value }}
                                            </td>
                                            <td width="10px"></td>
                                            <td>
                                                @if(in_array($key, $hasroles))
                                                    {{ Form::checkbox("role_id[]", $key, 1,[]) }}
                                                @else
                                                    {{ Form::checkbox("role_id[]", $key, null,[]) }}
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
