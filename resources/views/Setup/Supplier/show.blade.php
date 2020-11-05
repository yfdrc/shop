@extends("layouts.app")

@section("content")

    <div class="panel panel-success">
        <div class="panel-heading">
            快捷方式：@include("layouts.shortcut02") || {!! link_to("Setup\Supplier/create","增加主供货商") !!} |  {!! link_to("Setup\Supplier/$task->id/edit","编辑主供货商") !!} 
        </div>
        <div class="panel-body">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    主供货商详情
                </div>
                <div class="panel-body">
                    {{ Form::model($task, ["url"=>"Setup\Supplier/$task->id", "method" => "DELETE", "class" => "form-horizontal"]) }}
                        <div class="form-group">
                            {{ Form::label("name", "名称", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::label("name", $task->name, ["class"=>"form-control"]) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("description", "描述", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::label("description", $task->description, ["class"=>"form-control"]) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("address", "地址", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::label("address", $task->address, ["class"=>"form-control"]) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("telephone", "电话", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::label("telephone", $task->telephone, ["class"=>"form-control"]) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("name", "名称", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::label("name", $task->name, ["class"=>"form-control"]) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("description", "描述", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::textarea("description", null, ["class"=>"form-control"]) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("address", "地址", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::label("address", $task->address, ["class"=>"form-control"]) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label("telephone", "电话", ["class"=>"col-sm-3 control-label"]) }}
                            <div class="col-sm-6">
                                {{ Form::label("telephone", $task->telephone, ["class"=>"form-control"]) }}
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
