@extends('layouts.admin')
@section('content')

    <div class="centercontent tables">

        <div class="pageheader notab">
            <h1 class="pagetitle">配置列表</h1>
            <span class="pagedesc"><a href="{{ url('admin/config/create') }}">+ 添加配置</a></span>

        </div>
        <div id="contentwrapper" class="contentwrapper">
            <div class="contenttitle2" style="display: block;">
                @if(count($errors)>0)
                    @if(is_object($errors))
                        @foreach($errors->all() as $error)
                            <span>{{$error}}</span>
                        @endforeach
                    @else
                        <span>{{$errors}}</span>
                    @endif
                @endif
            </div><!--contenttitle-->
            <div id="basicform" class="subcontent">
                <form method="post" action="{{ url('admin/config/changeconfig') }}">
                    {{ csrf_field() }}
                    <table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="dyntable">
                        <colgroup>
                            <col class="con0" style="width: 4%" />
                            <col class="con1" />
                            <col class="con0" />
                            <col class="con1" />
                            <col class="con0" />
                        </colgroup>
                        <thead>
                        <tr>
                            <th class="head0 nosort"><input type="checkbox" /></th>
                            <th class="head1" style="width: 10%">ID</th>
                            <th class="head0" style="width: 15%">配置标题</th>
                            <th class="head1" style="width: 15%">配置名称</th>
                            <th class="head1" style="width: 40%">配置内容</th>
                            <th class="head0" style="width: 20%">操作</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $v)
                            <tr class="gradeX">
                                <td align="center"><span class="center">
                            <input type="checkbox" />
                          </span></td>
                                <td>{{$v->conf_id}}</td>
                                <td>{{$v->conf_title}}</td>
                                <td>{{$v->conf_name}}</td>
                                <td><input type="hidden" name="conf_id[]" value="{{$v->conf_id}}">
                                    {!! $v->_html !!}
                                </td>
                                <td class="center">
                                    <a href="{{url('admin/config/'.$v->conf_id.'/edit')}}">修改</a>
                                    <a href="javascript:;" onclick="delConf({{$v->conf_id}})">删除</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <br /><br />
                    <div class="stdformbutton">
                        <button class="submit radius2" type="submit">提交</button>
                        <input type="reset" class="reset radius2" value="返回" onClick="javascript :history.back(-1);"/>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <script>

        //删除分类
        function delConf(conf_id) {
            layer.confirm('您确定要删除这个导航吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                $.post("{{url('admin/config/')}}/"+conf_id,{'_method':'delete','_token':"{{csrf_token()}}"},function (data) {
                    if(data.status==0){
                        location.href = location.href;
                        layer.msg(data.msg, {icon: 6});
                    }else{
                        layer.msg(data.msg, {icon: 5});
                    }
                });
//            layer.msg('的确很重要', {icon: 1});
            }, function(){

            });
        }

    </script>
@endsection