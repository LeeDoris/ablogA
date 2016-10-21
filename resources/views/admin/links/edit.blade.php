@extends('layouts.admin')
@section('content')
    <div class="centercontent">

        <div class="pageheader notab">
            <h1 class="pagetitle">修改链接</h1>
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

                <form class="stdform" action="{{ url('admin/links/'.$field->link_id) }}" method="post">
                    <input value="put" name="_method" type="hidden">
                    {{csrf_field()}}


                    <p>
                        <label>链接名称</label>
                        <span class="field"><input type="text" name="link_name" class="mediuminput" value="{{ $field->link_name }}"/></span>
                    </p>

                    <p>
                        <label>链接标题</label>
                        <span class="field"><input type="text" name="link_title" class="mediuminput" value="{{ $field->link_title }}"/></span>
                    </p>

                    <p>
                        <label>超链接</label>
                        <span class="field"><input type="text" name="link_url" class="mediuminput" value="{{ $field->link_url }}"/></span>
                    </p>

                    <p>
                        <label>排序</label>
                        <span class="field"><input type="text" id="spinner" name="link_order" class="width50 noradiusright" value="{{ $field->link_order }}"/></span>
                    </p>

                    <br/>

                    <p class="stdformbutton">
                        <button class="submit radius2" type="submit">提交</button>
                        <input type="reset" class="reset radius2" value="返回" onClick="javascript :history.back(-1);" />
                    </p>


                </form>
            </div>
        </div>
    </div>

@endsection
