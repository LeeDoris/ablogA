@extends('layouts.blog')
@section('content')

    <div class="centercontent tables">

        <div class="pageheader notab">
            <h1 class="pagetitle">分类列表</h1>
            <span class="pagedesc"><a href="{{ url('admin/category/create') }}">+ 添加分类</a></span>

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
                        <th class="head0" style="width: 10%">分类名称</th>
                        <th class="head1" style="width: 55%">标题</th>
                        <th class="head0" style="width: 10%">查看次数</th>
                        <th class="head0" style="width: 20%">操作</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th class="head0"><span class="center">
                            <input type="checkbox" />
                          </span></th>
                        <th class="head1">ID</th>
                        <th class="head0">分类名称</th>
                        <th class="head1">标题</th>
                        <th class="head0">查看次数</th>
                        <th class="head0">操作</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($data as $v)
                        <tr class="gradeX">
                            <td align="center"><span class="center">
                            <input type="checkbox" />
                          </span></td>
                            <td>{{$v->cate_id}}</td>
                            <td>{{$v->_cate_name}}</td>
                            <td>{{$v->cate_title}}</td>
                            <td class="center">{{$v->cate_view}}</td>
                            <td class="center">
                                <a href="{{url('admin/category/'.$v->cate_id.'/edit')}}">修改</a>
                                <a href="javascript:;" onclick="delCate({{$v->cate_id}})">删除</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>


    <script>

        function changeOrder(obj,cate_id){
            var cate_order = $(obj).val();
            $.post("{{url('admin/cate/changeorder')}}",{'_token':'{{csrf_token()}}','cate_id':cate_id,'cate_order':cate_order},function(data){
                if(data.status == 0){
                    layer.msg(data.msg, {icon: 6});
                }else{
                    layer.msg(data.msg, {icon: 5});
                }
            });
        }

        //删除分类
        function delCate(cate_id) {
            layer.confirm('您确定要删除这个分类吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                $.post("{{url('admin/category/')}}/"+cate_id,{'_method':'delete','_token':"{{csrf_token()}}"},function (data) {
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