@extends('layouts.blog')
@section('content')

    <div class="centercontent tables">

        <div class="pageheader notab">
            <h1 class="pagetitle">文章列表</h1>
            <span class="pagedesc"><a href="{{ url('admin/article/create') }}">+ 添加文章</a></span>

        </div>
        <div id="contentwrapper" class="contentwrapper">
            <div id="basicform" class="subcontent">
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
                        <th class="head1" style="width: 5%">ID</th>
                        <th class="head0" style="width: 20%">标题</th>
                        <th class="head1" style="width: 5%">点击</th>
                        <th class="head0" style="width: 30%">编辑</th>
                        <th class="head0" style="width: 20%">发布时间</th>
                        <th class="head0" style="width: 20%">操作</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th class="head0"><span class="center">
                            <input type="checkbox" />
                          </span></th>
                        <th class="head1">ID</th>
                        <th class="head0">标题</th>
                        <th class="head1">点击</th>
                        <th class="head0">编辑</th>
                        <th class="head0">发布时间</th>
                        <th class="head0">操作</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($data as $v)
                        <tr class="gradeX">
                            <td align="center"><span class="center">
                            <input type="checkbox" />
                          </span></td>
                            <td>{{$v->art_id}}</td>
                            <td>{{$v->art_title}}</td>
                            <td>{{$v->art_view}}</td>
                            <td class="center">{{$v->art_editor}}</td>
                            <td class="center">{{$v->art_time}}</td>
                            <td class="center">
                                <a href="{{url('admin/article/'.$v->art_id.'/edit')}}">修改</a>
                                <a href="javascript:;" onclick="delArt({{$v->art_id}})">删除</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
                <div class="dataTables_paginate" style="height: 30px;">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>

    <style>
        .dataTables_paginate span { background: #E8E7E7; display: block; font-weight: bold; border: 1px solid #ccc; padding: 5px 10px; color: #333; line-height: 21px; vertical-align: top; }
        .pagination {
            list-style: none;
            overflow: hidden;
            float: right;}
    </style>


    <script>

        //删除分类
        function delArt(art_id) {
            layer.confirm('您确定要删除这篇文章吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                $.post("{{url('admin/article/')}}/"+art_id,{'_method':'delete','_token':"{{csrf_token()}}"},function (data) {
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