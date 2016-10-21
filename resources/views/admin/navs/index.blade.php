@extends('layouts.admin')
@section('content')

    <div class="centercontent tables">

        <div class="pageheader notab">
            <h1 class="pagetitle">导航列表</h1>
            <span class="pagedesc"><a href="{{ url('admin/navs/create') }}">+ 添加导航</a></span>

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
                        <th class="head0" style="width: 15%">导航名称</th>
                        <th class="head1" style="width: 25%">导航标题</th>
                        <th class="head0" style="width: 30%">超链接</th>
                        <th class="head0" style="width: 10%">导航排序</th>
                        <th class="head0" style="width: 15%">操作</th>

                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th class="head0"><span class="center">
                            <input type="checkbox" />
                          </span></th>
                        <th class="head1">ID</th>
                        <th class="head0">导航名称</th>
                        <th class="head1">导航标题</th>
                        <th class="head0">超链接</th>
                        <th class="head0">导航排序</th>
                        <th class="head0">操作</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($data as $v)
                        <tr class="gradeX">
                            <td align="center"><span class="center">
                            <input type="checkbox" />
                          </span></td>
                            <td>{{$v->nav_id}}</td>
                            <td>{{$v->nav_name}}</td>
                            <td>{{$v->nav_title}}</td>
                            <td>{{$v->nav_url}}</td>
                            <td class="center">{{$v->nav_order}}</td>
                            <td class="center">
                                <a href="{{url('admin/navs/'.$v->nav_id.'/edit')}}">修改</a>
                                <a href="javascript:;" onclick="delNav({{$v->nav_id}})">删除</a>
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
        function delNav(nav_id) {
            layer.confirm('您确定要删除这个导航吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                $.post("{{url('admin/navs/')}}/"+nav_id,{'_method':'delete','_token':"{{csrf_token()}}"},function (data) {
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