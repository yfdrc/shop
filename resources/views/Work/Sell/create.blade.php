@extends("layouts.app")

@section("content")

    <div class="panel panel-info">
        <div class="panel-heading">
            快捷方式：@include("layouts.shortcut03")
        </div>
        <div class="panel-body">
            <div class="panel panel-success">
                <div class="panel-heading">
                    新建卖出商品
                </div>
                <div class="panel-body">
                    {!! Form::open(["url"=>"Work\Sell","method"=>"POST","class"=>"form-horizontal"]) !!}
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            必填项目
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                {{ Form::label("cat_id", "类型", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::select("cat_id",$tasks, Cache("buy_catid"), ["class"=>"form-control"]) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label("good_id", "名称", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::select("good_id",[], Cache("buy_goodid"), ["class"=>"form-control"]) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label("customer_id", "客户", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::select("customer_id",$custs, Cache("buy_customerid"), ["class"=>"form-control"]) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label("price", "价格", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::text("price", null, ["class"=>"form-control"]) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label("amount", "数量", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::text("amount", null, ["class"=>"form-control"]) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label("date", "日期", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::date("date", 2020-11-11, ["class"=>"form-control"]) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label("who", "经手人", ["class"=>"col-sm-3 control-label"]) }}
                                <div class="col-sm-6">
                                    {{ Form::text("who", null, ["class"=>"form-control"]) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-success">确定增加</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection

@section("script")
    <script language="JavaScript">
        function getGoods(id) {
            $.ajax({
                type: "get",
                url: "{{ url('Ajax/Cat') }}",
                dataType: 'json',
                header: {'X-CRSF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    "id": id,
                },
                success: function (data,type) {
                    if(type == 'success'){
                        var oldid = "<?php echo Cache("buy_goodid"); ?>";
                        $("select[name='good_id']").empty();
                        $.each(data, function(id, label){
                            if( oldid == id){
                                $option = $("<option>").val(id).prop("selected",true).text(label);
                            }else{
                                $option = $("<option>").val(id).text(label);
                            }
                            $("select[name='good_id']").append($option);
                        });
                    }
                },
            });
        };

        $("select[name='cat_id']").change(function () {
            getGoods($("select[name='cat_id']").val());
        });

        $("select[name='cat_id']").change();

    </script>
@endsection
