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
    <script type="text/javascript" src="{{asset('/admin/js/plugins/chosen.jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/js/plugins/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/js/plugins/jquery.tagsinput.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/js/plugins/charCount.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/js/plugins/ui.spinner.min.js')}}"></script>

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
            <li><a href="{{ url('admin/index') }}"><span class="icon icon-flatscreen"></span>首页</a></li>
            <li class="current"><a href="{{ url('admin/category') }}"><span class="icon icon-pencil"></span>博客管理</a></li>
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

    <div class="vernav">

        <ul>
            <li class="current"><a href="{{ url('admin/category') }}" class="editor">Categories</a></li>
            <li><a href="{{ url('admin/category/create') }}">Create New Category</a></li>
            <li><a href="{{ url('admin/article') }}">Blogs</a> </li>
            <li><a href="{{ url('admin/article/create') }}">Creat New Blogs</a> </li>
            {{--<li><a href="">Comments</a></li>--}}
            {{--<li><a href="">Posts</a></li>--}}
        </ul>

        {{--<ul>--}}
            {{--<li class="current"><a href="{{ url('admin/category') }}" class="editor">Categories</a></li>--}}
            {{--<li><a href="{{ url('admin/category/create') }}">Create New Category</a></li>--}}
            {{--<li><a href="">Comments</a></li>--}}
            {{--<li><a href="">Posts</a></li>--}}
        {{--</ul>--}}
        <a class="togglemenu"></a>
    </div>
    @yield('content')
</div>
</body>
</html>
