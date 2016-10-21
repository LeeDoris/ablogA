@extends('layouts.admin')
@section('content')

        <div class="centercontent">

            <div class="pageheader">
                <h1 class="pagetitle">控制台</h1>

            </div><!--pageheader-->

            <div id="contentwrapper" class="contentwrapper">

                <div id="updates" class="subcontent">


                        <ul class="shortcuts">
                            <li><a href="{{ url('admin/links') }}" class="settings"><span>友情链接</span></a></li>
                            <li><a href="{{ url('admin/navs') }}" class="users"><span>导航</span></a></li>
                            <li><a href="{{ url('admin/config') }}" class="gallery"><span>网站配置</span></a></li>
                            <li><a href="{{ url('admin/article') }}" class="events"><span>博客</span></a></li>
                            <li><a href="{{ url('admin/category') }}" class="analytics"><span>分类</span></a></li>
                        </ul>

                        <br clear="all" />

            </div>

            <br clear="all" />

        </div>

@endsection