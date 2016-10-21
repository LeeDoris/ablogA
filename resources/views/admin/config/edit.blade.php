@extends('layouts.admin')
@section('content')
    <div class="centercontent">

        <div class="pageheader notab">
            <h1 class="pagetitle">修改配置</h1>
        </div>

        <div id="contentwrapper" class="contentwrapper">


            @if(count($errors)>0)

                @if(is_object($errors))
                    @foreach($errors->all() as $error)
                        <div class="contenttitle2">
                            <h3>{{$error}}</h3>
                        </div>
                    @endforeach
                @else
                    <div class="contenttitle2">
                        <h3>{{$error}}</h3>
                    </div>
                @endif
            @endif
            <div id="basicform" class="subcontent">

                <form class="stdform" action="{{ url('admin/config/'.$field->conf_id) }}" method="post">
                    <input value="put" name="_method" type="hidden">
                    {{csrf_field()}}


                    <p>
                        <label>标题</label>
                        <span class="field"><input type="text" name="conf_title" class="smallinput" value="{{$field->conf_title}}"/></span>
                    </p>

                    <p>
                        <label>名称</label>
                        <span class="field"><input type="text" name="conf_name" class="smallinput" value="{{$field->conf_name}}"/></span>
                    </p>

                    <p>
                        <label>类型</label>
                            <span class="formwrapper" style="margin-left: 120px;">
                            	<input type="radio" value="input" @if($field->field_type == 'input') checked @endif name="field_type" onclick="showTr()" /> Input &nbsp; &nbsp;
                            	<input type="radio" value="textarea" @if($field->field_type == 'textarea') checked @endif name="field_type" onclick="showTr()" /> Textarea &nbsp; &nbsp;
                                <input type="radio" value="radio" @if($field->field_type == 'radio') checked @endif name="field_type" onclick="showTr()" /> Radio  &nbsp; &nbsp;
                            </span>
                    </p>

                    <p class="field_value">
                        <label>类型值</label>
                        <span class="field"><input type="text" name="field_value" class="mediuminput" value="{{$field->field_value}}"/></span>
                        <small class="desc" style="margin-left: 120px;">只有在Radio的情况下才需要配置,格式 1|开启,0|关闭</small>
                    </p>

                    <p>
                        <label>排序</label>
                        <span class="field"><input type="text" id="spinner" name="conf_order" class="width50 noradiusright" value="{{$field->conf_order}}"/></span>
                    </p>

                    <p>
                        <label>描述</label>
                        <span class="field"><textarea cols="80" rows="5" class="longinput" name="conf_tips">{{$field->conf_tips}}</textarea></span>
                    </p>

                    <br/>

                    <p class="stdformbutton">
                        <button class="submit radius2" type="submit">提交</button>
                        <input type="reset" class="reset radius2" value="返回" onClick="javascript :history.back(-1);"/>
                    </p>


                </form>
            </div>
        </div>
    </div>
    <script>
        showTr();
        function showTr() {
            var type = $('input[name=field_type]:checked').val();
            if (type=='radio'){
                $('.field_value').show();
            }else{
                $('.field_value').hide();
            }
        }
    </script>
@endsection
