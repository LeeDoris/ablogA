<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>控制台页面</title>
    <link rel="stylesheet" href="{{asset('/admin/css/style.default.css')}}" type="text/css" />
    <script type="text/javascript" src="{{asset('/admin/js/plugins/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/js/plugins/jquery-1.7.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/js/plugins/jquery-ui-1.8.16.custom.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/js/plugins/jquery.cookie.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/js/plugins/jquery.uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/js/layer/layer.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/js/custom/general.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/js/custom/blog.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/js/custom/tables.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/js/custom/forms.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/js/plugins/jquery.uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/js/plugins/jquery.flot.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/js/plugins/jquery.flot.resize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/js/plugins/jquery.slimscroll.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/js/custom/index.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/js/custom/general.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/custom/dashboard.js')}}"></script>
    <script language="javascript" type="text/javascript" src="{{asset('/admin/js/plugins/excanvas.min.js')}}"></script>
    <link rel="stylesheet" media="screen" href="{{asset('/admin/css/style.ie9.css')}}"/>
    <link rel="stylesheet" media="screen" href="{{asset('/admin/css/style.ie8.css')}}"/>
    <script src="{{asset('/admin/js/plugins/css3-mediaqueries.js')}}"></script>
</head>
<body class="withvernav">
<div class="bodywrapper">
    <div class="topheader">
        <div class="left">
            <h1 class="logo">Lee.<span>Doris</span></h1>
            <span class="slogan">后台管理系统</span>

            <div class="search">
                <form action="" method="post">
                    <input type="text" name="keyword" id="keyword" value="请输入" />
                    <button class="submitbutton"></button>
                </form>
            </div><!--search-->

            <br clear="all" />

        </div><!--left-->

        <div class="right">
            <!--<div class="notification">
                <a class="count" href="ajax/notifications.html"><span>9</span></a>
            </div>-->
            <div class="userinfo">
                <img src="{{asset('admin/images/thumbs/avatar.png')}}" alt="" />
                <span>管理员</span>
            </div><!--userinfo-->

            <div class="userinfodrop">
                <div class="avatar">
                    <a href=""><img src="{{asset('admin/images/thumbs/avatarbig.png')}}" alt="" /></a>
                    <div class="changetheme">
                        切换主题: <br />
                        <a class="default"></a>
                        <a class="blueline"></a>
                        <a class="greenline"></a>
                        <a class="contrast"></a>
                        <a class="custombg"></a>
                    </div>
                </div><!--avatar-->
                <div class="userdata">
                    <h4>{{ Auth::user()->name }}</h4>
                    <span class="email">{{ Auth::user()->email }}</span>
                    <ul>
                        <li><a href="javascript:void (0);">编辑资料</a></li>
                        <li><a href="{{ url('admin/pass') }}">修改密码</a></li>
                        <li><a href="javascript:void(0);">帮助</a></li>
                        <li><a href="{{'/logout'}}">退出</a></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->


    <div class="header">
        <ul class="headermenu">
            <li class="current"><a href="{{ url('admin/index') }}"><span class="icon icon-flatscreen"></span>首页</a></li>
            <li><a href="{{ url('admin/category') }}"><span class="icon icon-pencil"></span>博客管理</a></li>
            <li><a href="javascript:;"><span class="icon icon-message"></span>查看消息</a></li>
            <li><a href="javascript:;"><span class="icon icon-chart"></span>统计报表</a></li>
        </ul>

        {{--<div class="headerwidget">--}}
            {{--<div class="earnings">--}}
                {{--<div class="one_half">--}}
                    {{--<h4>Today's Earnings</h4>--}}
                    {{--<h2>$640.01</h2>--}}
                {{--</div><!--one_half-->--}}
                {{--<div class="one_half last alignright">--}}
                    {{--<h4>Current Rate</h4>--}}
                    {{--<h2>53%</h2>--}}
                {{--</div><!--one_half last-->--}}
            {{--</div><!--earnings-->--}}
        {{--</div><!--headerwidget-->--}}

    </div><!--header-->

    <div class="vernav2 iconmenu">
        <ul>
            {{--<li><a href="#formsub" class="editor">表单提交</a>--}}
                {{--<span class="arrow"></span>--}}
                {{--<ul id="formsub">--}}
                    {{--<li><a href="forms.html">基础表单</a></li>--}}
                    {{--<li><a href="wizard.html">表单验证</a></li>--}}
                    {{--<li><a href="editor.html">编辑器</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            <!--<li><a href="filemanager.html" class="gallery">文件管理</a></li>-->
            <li><a href="#formlinks" class="elements">友情链接</a>
                <span class="arrow"></span>
                <ul id="formlinks">
                    <li><a href="{{ url('admin/links') }}">链接列表</a></li>
                    <li><a href="{{ url('admin/links/create') }}">创建链接</a></li>
                </ul>
            </li>
            <li><a href="#formnavs" class="widgets">导航栏</a>
                <span class="arrow"></span>
                <ul id="formnavs">
                    <li><a href="{{ url('admin/navs') }}">导航列表</a></li>
                    <li><a href="{{ url('admin/navs/create') }}">创建导航</a></li>
                </ul>
            </li>
            <li><a href="#formconf" class="support">网站配置</a>
                <span class="arrow"></span>
                <ul id="formconf">
                    <li><a href="{{ url('admin/config') }}">配置列表</a></li>
                    <li><a href="{{ url('admin/config/create') }}">创建配置</a></li>
                </ul>
            </li>
            {{--<li><a href="widgets.html" class="widgets">网页插件</a></li>--}}
            {{--<li><a href="calendar.html" class="calendar">日历事件</a></li>--}}
            {{--<li><a href="support.html" class="support">客户支持</a></li>--}}
            {{--<li><a href="typography.html" class="typo">文字排版</a></li>--}}
            {{--<li><a href="tables.html" class="tables">数据表格</a></li>--}}
            {{--<li><a href="buttons.html" class="buttons">按钮 &amp; 图标</a></li>--}}
            {{--<li><a href="#error" class="error">错误页面</a>--}}
                {{--<span class="arrow"></span>--}}
                {{--<ul id="error">--}}
                    {{--<li><a href="notfound.html">404错误页面</a></li>--}}
                    {{--<li><a href="forbidden.html">403错误页面</a></li>--}}
                    {{--<li><a href="internal.html">500错误页面</a></li>--}}
                    {{--<li><a href="offline.html">503错误页面</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li><a href="#addons" class="addons">其他页面</a>--}}
                {{--<span class="arrow"></span>--}}
                {{--<ul id="addons">--}}
                    {{--<li><a href="newsfeed.html">新闻订阅</a></li>--}}
                    {{--<li><a href="profile.html">资料页面</a></li>--}}
                    {{--<li><a href="productlist.html">产品列表</a></li>--}}
                    {{--<li><a href="photo.html">图片视频分享</a></li>--}}
                    {{--<li><a href="gallery.html">相册</a></li>--}}
                    {{--<li><a href="invoice.html">购物车</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul>
        <a class="togglemenu"></a>
        <br /><br />
    </div>
@yield('content')
</div>
</body>
</html>
