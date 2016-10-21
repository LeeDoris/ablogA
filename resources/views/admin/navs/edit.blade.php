@extends('layouts.admin')
@section('content')
    <div class="centercontent">

        <div class="pageheader notab">
            <h1 class="pagetitle">修改导航</h1>
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

                <form class="stdform" action="{{ url('admin/navs/'.$field->nav_id) }}" method="post">
                    <input value="put" name="_method" type="hidden">
                    {{csrf_field()}}


                    <p>
                        <label>链接名称</label>
                        <span class="field"><input type="text" name="nav_name" class="mediuminput" value="{{ $field->nav_name }}"/></span>
                    </p>

                    <p>
                        <label>链接标题</label>
                        <span class="field"><input type="text" name="nav_title" class="mediuminput" value="{{ $field->nav_title }}"/></span>
                    </p>

                    <p>
                        <label>超链接</label>
                        <span class="field"><input type="text" name="nav_url" class="mediuminput" value="{{ $field->nav_url }}"/></span>
                    </p>

                    <p>
                        <label>排序</label>
                        <span class="field"><input type="text" id="spinner" name="nav_order" class="width50 noradiusright" value="{{ $field->nav_order }}"/></span>
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

@endsection
