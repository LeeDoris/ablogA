@extends('layouts.blog')
@section('content')
    <div class="centercontent">

        <div class="pageheader notab">
            <h1 class="pagetitle">修改分类</h1>
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

                <form class="stdform" action="{{ url('admin/category/'.$field->cate_id) }}" method="post">
                    <input type="hidden" name="_method" value="put">
                    {{csrf_field()}}


                    <p>
                        <label>父级分类</label>
                            <span class="field">
                            <select name="cate_pid" class="uniformselect">
                                <option value="0">==顶级分类==</option>
                                @foreach($data as $d)
                                    <option value="{{$d->cate_id}}"
                                    @if($d->cate_id == $field->cate_pid)
                                        selected
                                    @endif
                                    >{{$d->cate_name}}</option>
                                @endforeach
                            </select>

                            </span>
                    </p>

                    <p>
                        <label>分类名称</label>
                        <span class="field"><input type="text" name="cate_name" class="smallinput" value="{{ $field->cate_name }}"/></span>
                    </p>

                    <p>
                        <label>分类标题</label>
                        <span class="field"><input type="text" name="cate_title" class="mediuminput" value="{{ $field->cate_title }}"/></span>
                    </p>

                    <p>
                        <label>关键词</label>
                            <span class="field">
                            	<input name="cate_keywords" id="tags" class="longinput" value="{{ $field->cate_keywords }}" />
                            </span>
                    </p>

                    <p>
                        <label>描述</label>
                        <span class="field"><textarea cols="80" rows="5" class="longinput" name="cate_description" value="{{ $field->cate_description }}"></textarea></span>
                    </p>

                    <p>
                        <label>排序</label>
                        <span class="field"><input type="text" id="spinner" name="cate_order" class="width50 noradiusright" value="{{ $field->cate_order }}"/></span>
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
