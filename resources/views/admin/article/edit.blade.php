@extends('layouts.blog')
@section('content')
    <div class="centercontent">

        <div class="pageheader notab">
            <h1 class="pagetitle">编辑文章</h1>
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

                <form class="stdform" action="{{ url('admin/article/'.$field->art_id) }}" method="post">
                    <input type="hidden" name="_method" value="put">
                    {{csrf_field()}}


                    <p>
                        <label>分类</label>
                            <span class="field">
                            <select name="cate_id" class="uniformselect">
                                <option value="0">==分类==</option>
                                @foreach($data as $d)
                                    <option value="{{$d->cate_id}}"
                                        @if($field->cate_id == $d->cate_id) selected @endif
                                    >{{$d->_cate_name}}</option>
                                @endforeach
                            </select>

                            </span>
                    </p>

                    <p>
                        <label>文章标题</label>
                        <span class="field"><input type="text" name="art_title" class="smallinput" value="{{ $field->art_title }}" /></span>
                    </p>

                    <p>
                        <label>作者</label>
                        <span class="field"><input type="text" name="art_editor" class="mediuminput" value="{{ $field->art_editor }}"/></span>
                    </p>

                    <p>
                        <label>缩略图</label>
                            <span class="field">
                                <input type="text" name="art_thumb" class="smallinput" value="{{ $field->art_thumb }}"/>


                    <script src="{{asset('plugins/uploadify/jquery.uploadify.min.js')}}"
                            type="text/javascript"></script>
                    <link rel="stylesheet" type="text/css" href="{{asset('plugins/uploadify/uploadify.css')}}">
                    <script type="text/javascript">
                        <?php $timestamp = time();?>
                        $(function () {
                            $('#file_upload').uploadify({
                                'buttonText': '图片上传',
                                'formData': {
                                    'timestamp': '<?php echo $timestamp;?>',
                                    '_token': "{{csrf_token()}}"
                                },
                                'swf': "{{asset('plugins/uploadify/uploadify.swf')}}",
                                'uploader': "{{url('admin/upload')}}",
                                'onUploadSuccess': function (file, data, response) {
                                    $('input[name=art_thumb]').val(data);
                                    $('#art_thumb_img').attr('src', '/' + data);
//                                    alert(data);
                                }
                            });
                        });
                    </script>
                                <input id="file_upload" name="file_upload" type="file" multiple="true" >
                    <style>
                        .uploadify {
                            display: inline-block;
                        }

                        .uploadify-button {
                            border: none;
                            border-radius: 5px;
                            margin-top: 8px;
                        }

                        table.add_tab tr td span.uploadify-button-text {
                            color: #FFF;
                            margin: 0;
                        }
                    </style>

                            </span>
                    </p>

                    <p>
                        <label></label>
                        <span class="field"><img src="/{{ $field->art_thumb }}" alt="" id="art_thumb_img" style="max-width: 350px; max-height:100px;"/></span>
                    </p><br />

                    <p>
                        <label>关键词</label>
                            <span class="field">
                            	<input name="art_tag" id="tags" class="longinput" value="{{ $field->art_tag }}"/>
                            </span>
                    </p>

                    <p>
                        <label>描述</label>
                        <span class="field"><textarea cols="80" rows="5" class="longinput" name="art_description">{{ $field->art_description }}</textarea></span>
                    </p>

                    <p>
                        <label>文章内容</label>
                        <span class="field" style="margin-left: 120px">
                        <script type="text/javascript" charset="utf-8" src="{{ asset('/plugins/ueditor/ueditor.config.js') }}"></script>
                        <script type="text/javascript" charset="utf-8" src="{{ asset('/plugins/ueditor/ueditor.all.min.js') }}"> </script>
                        <script type="text/javascript" charset="utf-8" src="{{ asset('/plugins/ueditor/lang/zh-cn/zh-cn.js') }}"></script>
                        <script name="art_content" id="editor" type="text/plain" style="width:770px;height:500px;">{!! $field->art_content !!}</script>
                        <script type="text/javascript">
                            var ue = UE.getEditor('editor');
                        </script>
                        <style>
                            .edui-default{line-height: 28px;}
                            div.edui-combox-body,div.edui-button-body,div.edui-splitbutton-body
                            {overflow: hidden; height:20px;}
                            div.edui-box{overflow: hidden; height:22px;}
                        </style>
                        </span>
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
