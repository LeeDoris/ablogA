<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>登录页面</title>
    <link rel="stylesheet" href="{{asset('admin/css/style.default.css')}}" type="text/css" />
    <link rel="stylesheet" media="screen" href="{{asset('admin/css/style.ie9.css')}}"/>
    <link rel="stylesheet" media="screen" href="{{asset('admin/css/style.ie8.css')}}"/>
</head>

<body class="loginpage">
<div class="loginbox">
    <div class="loginboxinner">

        <div class="logo">
            <h1 class="logo">Li.<span>Doris</span></h1>
            <span class="slogan">后台管理系统</span>
        </div>

        <br clear="all" /><br />
            @if($errors ->has('email'))
            <div class="nousername" style="display: block;">
                <div class="loginmsg">user or password is wrong!</div>
            </div>
            @endif

        @if($errors ->has('password'))
        <div class="nopassword" style="display: block;">
            <div class="loginmsg">user or password is wrong!</div>
            {{--<div class="loginf">--}}
                {{--<div class="thumb"><img alt="" src="{{asset('/images/thumbs/avatar1.png')}}" /></div>--}}
                {{--<div class="userlogged">--}}
                    {{--<h4></h4>--}}
                    {{--<a href="index.html">Not <span></span>?</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
        @endif

        <form action="{{ url('/login') }}" method="post">
            {{csrf_field()}}
            <div class="username">
                <div class="usernameinner{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="text" name="email" />
                </div>
            </div>

            <div class="password">
                <div class="passwordinner{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" name="password" />
                </div>
            </div>

            <button type="submit">登录</button>

            <div class="keep"><input type="checkbox" name="remember" /> 记住密码</div>

        </form>

    </div>
</div>


</body>
</html>