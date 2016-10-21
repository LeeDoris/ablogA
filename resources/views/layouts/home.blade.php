<!DOCTYPE html>
<html class="ie ie8">
<html class="ie ie9">
<html>
<head>
    <meta charset="utf-8">
    @yield('info')
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Library CSS -->
    <link rel="stylesheet" href="{{ asset('home/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/fonts/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/animations.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('home/css/superfish.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('home/css/revolution-slider/css/settings.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('home/css/prettyPhoto.css') }}" media="screen">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">
    <!-- Skin -->
    <link rel="stylesheet" href="{{ asset('home/css/colors/blue.css') }}" id="colors">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('home/css/theme-responsive.css') }}">
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('home/img/ico/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('home/img/ico/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('home/img/ico/apple-touch-icon-72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('home/img/ico/apple-touch-icon-114.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('home/img/ico/apple-touch-icon-144.png') }}">
    <script src="{{ asset('home/js/respond.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('home/css/ie.css') }}">
</head>
<body class="home">
<div class="wrap">
    <!-- Header Start -->
    <header id="header">
        <!-- Header Top Bar Start -->
        <div class="top-bar">
            <div class="slidedown collapse">
                <div class="container">
                    <div class="phone-email pull-left">
                        <a><i class="icon-phone"></i> Call Us : +65 8725 8379</a>
                        <a href="javascript:;"><i class="icon-envelope"></i> Email : liangzelee@gmail.com</a>
                    </div>
                    <div class="pull-right">
                        <ul class="social pull-left">
                            <li class="facebook"><a href="javascript:;"><i class="icon-facebook"></i></a></li>
                            <li class="twitter"><a href="javascript:;"><i class="icon-twitter"></i></a></li>
                            <li class="dribbble"><a href="javascript:;"><i class="icon-dribbble"></i></a></li>
                            <li class="linkedin"><a href="javascript:;"><i class="icon-linkedin"></i></a></li>
                            <li class="rss"><a href="javascript:;"><i class="icon-rss"></i></a></li>
                        </ul>
                        <div id="search-form" class="pull-right">
                            <form action="#" method="get">
                                <input type="text" class="search-text-box">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top Bar End -->
        <!-- Main Header Start -->
        <div class="main-header">
            <div class="container">
                <!-- TopNav Start -->
                <div class="topnav navbar-header">
                    <a class="navbar-toggle down-button" data-toggle="collapse" data-target=".slidedown">
                        <i class="icon-angle-down icon-current"></i>
                    </a>
                </div>
                <!-- TopNav End -->
                <!-- Logo Start -->
                <div class="logo pull-left">
                    <h1>
                        <a href="index-2.html">
                            <img src="{{asset('home/img/logo.png')}}" alt="pixma" width="125" height="60">
                        </a>
                    </h1>
                </div>
                <!-- Logo End -->
                <!-- Mobile Menu Start -->
                <div class="mobile navbar-header">
                    <a class="navbar-toggle" data-toggle="collapse" href=".html">
                        <i class="icon-reorder icon-2x"></i>
                    </a>
                </div>
                <!-- Mobile Menu End -->
                <!-- Menu Start -->
                <nav class="collapse navbar-collapse menu">
                    {{--<ul class="nav navbar-nav sf-menu">--}}
                        {{--<li>--}}
                            {{--<a href="#" class="sf-with-ul">--}}
                                {{--Features--}}
                           {{--<span class="sf-sub-indicator">--}}
                           {{--<i class="icon-angle-down "></i>--}}
                           {{--</span>--}}
                            {{--</a>--}}
                            {{--<ul>--}}
                                {{--<li><a href="shortcodes.html" class="sf-with-ul">Shortcodes</a></li>--}}
                                {{--<li><a href="icons.html" class="sf-with-ul">Icons</a></li>--}}
                                {{--<li><a href="pricing-table.html" class="sf-with-ul">Pricing Tables</a></li>--}}
                                {{--<li>--}}
                                    {{--<a href="#" class="sf-with-ul">--}}
                                        {{--Third Level Menu--}}
                                 {{--<span class="sf-sub-indicator pull-right">--}}
                                 {{--<i class="icon-angle-right "></i>--}}
                                 {{--</span>--}}
                                    {{--</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="#" class="sf-with-ul">Menu Item</a></li>--}}
                                        {{--<li><a href="#" class="sf-with-ul">Menu Item</a></li>--}}
                                        {{--<li><a href="#" class="sf-with-ul">Menu Item</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--@foreach($navs as $k=>$v)--}}
                        {{--<li><a href="{{ $v->nav_url }}">{{ $v->nav_name }}</a></li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                    {!! $MyNavBar->asUl( array('class' => 'nav navbar-nav sf-menu') ) !!}
                </nav>
                <!-- Menu End -->
            </div>
        </div>
        <!-- Main Header End -->
    </header>
    <!-- Header End -->
    <!-- Content Start -->
    @yield('content')
    <!-- Content End -->
    <!-- Footer Start -->
    <footer id="footer">
        <!-- Footer Top Start -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-one">
                        <h3>About</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                    </section>
                    <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-two">
                        <h3>Twitter Stream</h3>
                        <ul id="tweets">
                        </ul>
                    </section>
                    <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-three">
                        <h3>Contact Us</h3>
                        <ul class="contact-us">
                            <li>
                                <i class="icon-map-marker"></i>
                                <p>
                                    <strong>Address:</strong> Ring Roud, <br>
                                    Singapore
                                </p>
                            </li>
                            <li>
                                <i class="icon-phone"></i>
                                <p><strong>Phone:</strong> +65 8725 8379</p>
                            </li>
                            <li>
                                <i class="icon-envelope"></i>
                                <p><strong>Email:</strong><a href="javascript:;">liangzelee@gmail.com</a></p>
                            </li>
                        </ul>
                    </section>
                    <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-four">
                        <h3>Flickr Photostream</h3>
                        <ul id="flickrfeed" class="thumbs"></ul>
                    </section>
                </div>
            </div>
        </div>
        <!-- Footer Top End -->
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 ">Copyright &copy; 2016.Company name All rights reserved.</div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 ">
                        <ul class="social social-icons-footer-bottom">
                            <li class="facebook"><a href="javascript:;" data-toggle="tooltip" title="Facebook"><i class="icon-facebook"></i></a></li>
                            <li class="twitter"><a href="javascript:;" data-toggle="tooltip" title="Twitter"><i class="icon-twitter"></i></a></li>
                            <li class="dribbble"><a href="javascript:;" data-toggle="tooltip" title="Dribble"><i class="icon-dribbble"></i></a></li>
                            <li class="linkedin"><a href="javascript:;" data-toggle="tooltip" title="LinkedIn"><i class="icon-linkedin"></i></a></li>
                            <li class="rss"><a href="javascript:;" data-toggle="tooltip" title="Rss"><i class="icon-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>
    <!-- Scroll To Top -->
    <a href="#" class="scrollup"><i class="icon-angle-up"></i></a>
</div>
<!-- Wrap End -->
<!-- The Scripts -->
<script src="{{ asset('home/js/jquery.min.js') }}"></script>
<script src="{{ asset('home/js/bootstrap.js') }}"></script>
<script src="{{ asset('home/js/jquery.parallax.js') }}"></script>
<script src="{{ asset('home/js/modernizr-2.6.2.min.js') }}"></script>
<script src="{{ asset('home/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('home/js/jquery.nivo.slider.pack.js') }}"></script>
<script src="{{ asset('home/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('home/js/superfish.js') }}"></script>
<script src="{{ asset('home/js/tweetMachine.js') }}"></script>
<script src="{{ asset('home/js/tytabs.js') }}"></script>
<script src="{{ asset('home/js/jquery.gmap.min.js') }}"></script>
<script src="{{ asset('home/js/circularnav.js') }}"></script>
<script src="{{ asset('home/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('home/js/jflickrfeed.js') }}"></script>
<script src="{{ asset('home/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('home/js/waypoints.min.js') }}"></script>
<script src="{{ asset('home/js/spectrum.js') }}"></script>
<script src="{{ asset('home/js/custom.js') }}"></script>
</body>
</html>