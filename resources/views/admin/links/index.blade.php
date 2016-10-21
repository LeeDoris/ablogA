@extends('layouts.admin')
@section('content')

    <div class="centercontent tables">

        <div class="pageheader notab">
            <h1 class="pagetitle">链接列表</h1>
            <span class="pagedesc"><a href="{{ url('admin/links/create') }}">+ 添加链接</a></span>

        </div>
        <div id="contentwrapper" class="contentwrapper">
            <div id="basicform" class="subcontent">
                <table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="dyntable2">
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
                        <th class="head1" style="width: 5%">ID</th>
                        <th class="head0" style="width: 15%">链接名称</th>
                        <th class="head1" style="width: 25%">链接标题</th>
                        <th class="head0" style="width: 30%">超链接</th>
                        <th class="head0" style="width: 10%">链接排序</th>
                        <th class="head0" style="width: 15%">操作</th>

                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th class="head0"><span class="center">
                            <input type="checkbox" />
                          </span></th>
                        <th class="head1">ID</th>
                        <th class="head0">链接名称</th>
                        <th class="head1">链接标题</th>
                        <th class="head0">超链接</th>
                        <th class="head0">链接排序</th>
                        <th class="head0">操作</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($data as $v)
                        <tr class="gradeX">
                            <td align="center"><span class="center">
                            <input type="checkbox" />
                          </span></td>
                            <td>{{$v->link_id}}</td>
                            <td>{{$v->link_name}}</td>
                            <td>{{$v->link_title}}</td>
                            <td>{{$v->link_url}}</td>
                            <td class="center">{{$v->link_order}}</td>
                            <td class="center">
                                <a href="{{url('admin/links/'.$v->link_id.'/edit')}}">修改</a>
                                <a href="javascript:;" onclick="delLink({{$v->link_id}})">删除</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>


    <script>

        //删除分类
        function delLink(link_id) {
            layer.confirm('您确定要删除这个链接吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                $.post("{{url('admin/links/')}}/"+link_id,{'_method':'delete','_token':"{{csrf_token()}}"},function (data) {
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