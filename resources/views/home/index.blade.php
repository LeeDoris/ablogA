@extends('layouts.home')
@section('info')
    <title>Blog</title>
    <meta name="description" content="">
    <meta name="author" content="">
@endsection

@section('content')
    <div id="main">
        <!-- Slider Start-->
        <div class="fullwidthbanner-container">
            <div class="fullwidthbanner rslider">
                <ul>
                    <!-- THE FIRST SLIDE -->
                    <li data-delay="6000" data-masterspeed="300" data-transition="fade">
                        <div class="slotholder"><img src="{{ asset('home/img/slider/slider-bg-1.jpg') }}" data-fullwidthcentering="on" alt=""></div>
                        <div class="caption modern_big_bluebg h1 lft tp-caption start"
                             data-x="40"
                             data-y="85"
                             data-speed="700"
                             data-endspeed="800"
                             data-start="1000"
                             data-easing="easeOutQuint"
                             data-endeasing="easeOutQuint">
                            <h3>PREMIUM BUSINESS TEMPLATE</h3>
                        </div>
                        <div class="caption list_slide lfb tp-caption start"
                             data-easing="easeOutExpo"
                             data-start="1400"
                             data-speed="1050"
                             data-y="180"
                             data-x="40">
                            <div class="list-slide">
                                <i class="icon-camera slide-icon"></i>
                                <h5 class="dblue"> 10 predefined color skins </h5>
                            </div>
                        </div>
                        <div class="caption list_slide lfb tp-caption start"
                             data-easing="easeOutExpo"
                             data-start="1800"
                             data-speed="1200"
                             data-y="220"
                             data-x="40">
                            <div class="list-slide">
                                <i class="icon-search slide-icon"></i>
                                <h5 class="dblue"> SEO optimized template files </h5>
                            </div>
                        </div>
                        <div class="caption list_slide lfb tp-caption start"
                             data-easing="easeOutExpo"
                             data-start="2200"
                             data-speed="1350"
                             data-y="260"
                             data-x="40">
                            <div class="list-slide">
                                <i class="icon-code slide-icon"></i>
                                <h5 class="dblue"> Working Ajax Contact Form </h5>
                            </div>
                        </div>
                        <div class="caption lfb caption_button_1 fadeout tp-caption start"
                             data-x="40"
                             data-y="330"
                             data-speed="900"
                             data-endspeed="300"
                             data-start="2700"
                             data-hoffset="-70"
                             data-easing="easeOutExpo">
                            <a class="btn-special hidden-xs btn-grey" href="#">Learn More</a>
                        </div>
                        <div class="caption lfb caption_button_2 fadeout tp-caption start"
                             data-x="210"
                             data-y="330"
                             data-speed="800"
                             data-endspeed="300"
                             data-start="2900"
                             data-hoffset="70"
                             data-easing="easeOutExpo">
                            <a class="btn-special hidden-xs btn-color" href="javascript:;">Buy Now</a>
                        </div>
                    </li>
                    <!-- THE RESPONSIVE SLIDE -->
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="300">
                        <img src="{{ asset('home/img/slider/slider-bg-2.jpg') }}" data-fullwidthcentering="on" alt="">
                        <div class="caption large_text sft"
                             data-x="660"
                             data-y="54"
                             data-speed="300"
                             data-start="800"
                             data-easing="easeOutExpo"  >TOUCH ENABLED</div>
                        <div class="caption medium_text sfl"
                             data-x="689"
                             data-y="92"
                             data-speed="300"
                             data-start="1100"
                             data-easing="easeOutExpo"  >AND</div>
                        <div class="caption large_text sfr"
                             data-x="738"
                             data-y="88"
                             data-speed="300"
                             data-start="1100"
                             data-easing="easeOutExpo"  ><span class="dblue">RESPONSIVE</span></div>
                        <div class="caption list_slide lfb tp-caption start"
                             data-easing="easeOutExpo"
                             data-start="1400"
                             data-speed="1050"
                             data-y="180"
                             data-x="660">
                            <div class="list-slide">
                                <i class="icon-eye-open slide-icon"></i>
                                <h5> Retina Ready </h5>
                            </div>
                        </div>
                        <div class="caption list_slide lfb tp-caption start"
                             data-easing="easeOutExpo"
                             data-start="1800"
                             data-speed="1200"
                             data-y="220"
                             data-x="660">
                            <div class="list-slide">
                                <i class="icon-table slide-icon"></i>
                                <h5> Responsive pricing tables </h5>
                            </div>
                        </div>
                        <div class="caption list_slide lfb tp-caption start"
                             data-easing="easeOutExpo"
                             data-start="2200"
                             data-speed="1350"
                             data-y="260"
                             data-x="660">
                            <div class="list-slide">
                                <i class="icon-ok slide-icon"></i>
                                <h5> Crossbrowser Compatible </h5>
                            </div>
                        </div>
                        <div class="caption list_slide lfb tp-caption start"
                             data-easing="easeOutExpo"
                             data-start="2600"
                             data-speed="1350"
                             data-y="300"
                             data-x="660">
                            <div class="list-slide">
                                <i class="icon-twitter slide-icon"></i>
                                <h5> Twitter 1.1 API Support </h5>
                            </div>
                        </div>
                        <div class="caption list_slide lfb tp-caption start"
                             data-easing="easeOutExpo"
                             data-start="3000"
                             data-speed="1350"
                             data-y="340"
                             data-x="660">
                            <div class="list-slide">
                                <i class="icon-th slide-icon"></i>
                                <h5> Bootstrap Framework </h5>
                            </div>
                        </div>
                        <div class="caption lfl"
                             data-x="53"
                             data-y="30"
                             data-speed="300"
                             data-start="1400"
                             data-easing="easeOutExpo">
                            <img src="{{ asset('home/img/slider/responsive-imac.png') }}" alt="iMac Responsive">
                        </div>
                        <div class="caption lfl"
                             data-x="323"
                             data-y="145"
                             data-speed="300"
                             data-start="1500"
                             data-easing="easeOutExpo">
                            <img src="{{ asset('home/img/slider/responsive-ipad.png') }}" alt="iPad Responsive">
                        </div>
                        <div class="caption lfl"
                             data-x="472"
                             data-y="253"
                             data-speed="300"
                             data-start="1600"
                             data-easing="easeOutExpo">
                            <img src="{{ asset('home/img/slider/responsive-iphone.png') }}" alt="iPhone Responsive">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Slider End-->
        <!-- Slogan Start-->
        <div class="slogan bottom-pad-small">
            <div class="container">
                <div class="row">
                    <div class="slogan-content">
                        <div class="col-lg-9 col-md-9">
                            <h2 class="slogan-title">We design and develop the best website’s for customers!</h2>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="get-started">
                                <button class="btn btn-special btn-color pull-right">Get Started Now</button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slogan End-->
        <!-- Main Content start-->
        <div class="main-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="content-box big ch-item bottom-pad-small">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-1"><i class="icon-fullscreen"></i></div>
                                    <div class="ch-info-back">
                                        <i class="icon-fullscreen"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="content-box-info">
                                <h3>Responsive Layout</h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="content-box big ch-item bottom-pad-small">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-1"><i class="icon-eye-open"></i></div>
                                    <div class="ch-info-back">
                                        <i class="icon-eye-open"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="content-box-info">
                                <h3>Retina Ready</h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="content-box big ch-item">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-1"><i class="icon-edit"></i></div>
                                    <div class="ch-info-back">
                                        <i class="icon-edit"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="content-box-info">
                                <h3>Rich Elements</h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content end-->
        <!-- Recent works start-->
        <div class="recentworks bottom-pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 animate_afl d1">
                        <div class="portfolio-desc">
                            <h3 class="title">Recent Works</h3>
                            <p>There are many variations passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even highly believable. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="carousel-controls">
                                <a class="prev" href="#portfolio-carousel" data-slide="prev"><i class="icon-angle-left"></i></a>
                                <a class="next" href="#portfolio-carousel" data-slide="next"><i class="icon-angle-right"></i></a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-xs-12">
                        <div class="row">
                            <div id="portfolio-carousel" class="portfolio-carousel slide">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d2">
                                            <div class="portfolio-item">
                                                <a href="{{ asset('home/img/portfolio/portfolio-1.jpg') }}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                                    <span class="portfolio-item-hover"></span>
                                                    <span class="fullscreen"><i class="icon-search"></i></span><img src="{{ asset('home/img/portfolio/portfolio-1.jpg') }}" alt=" "/>
                                                </a>
                                                <div class="portfolio-item-title">
                                                    <a href="single-project.html">Insta Genius</a>
                                                    <p>
                                                        Design / Development
                                                    </p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d3">
                                            <div class="portfolio-item">
                                                <a href="{{ asset('home/img/portfolio/portfolio-2.jpg') }}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                                    <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="icon-search"></i></span><img src="{{ asset('home/img/portfolio/portfolio-2.jpg') }}" alt=" "/>
                                                </a>
                                                <div class="portfolio-item-title">
                                                    <a href="single-project.html">YA Sound</a>
                                                    <p>
                                                        Sound / Audio
                                                    </p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item animate_afc d4">
                                            <div class="portfolio-item">
                                                <a href="{{ asset('home/img/portfolio/portfolio-3.jpg') }}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                                    <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="icon-search"></i></span><img src="{{ asset('home/img/portfolio/portfolio-3.jpg') }}" alt=" "/>
                                                </a>
                                                <div class="portfolio-item-title">
                                                    <a href="single-project.html">Nike Shoe</a>
                                                    <p>
                                                        Apareal / Shoe
                                                    </p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                                            <div class="portfolio-item">
                                                <a href="{{ asset('home/img/portfolio/portfolio-4.jpg') }}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                                    <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="icon-search"></i></span><img src="{{ asset('home/img/portfolio/portfolio-4.jpg') }}" alt=" "/>
                                                </a>
                                                <div class="portfolio-item-title">
                                                    <a href="single-project.html">Camera Icon</a>
                                                    <p>
                                                        Icon / Device
                                                    </p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                                            <div class="portfolio-item">
                                                <a href="{{ asset('home/img/portfolio/portfolio-5.jpg') }}" class="portfolio-item-link" data-rel="prettyPhoto" >
                                                    <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="icon-search"></i></span><img src="{{ asset('home/img/portfolio/portfolio-5.jpg') }}" alt=" "/>
                                                </a>
                                                <div class="portfolio-item-title">
                                                    <a href="single-project.html">Penguin</a>
                                                    <p>
                                                        Animal / Nature
                                                    </p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                                            <div class="portfolio-item">
                                                <a href="images/portfolio/portfolio-6.html" class="portfolio-item-link" data-rel="prettyPhoto" >
                                                    <span class="portfolio-item-hover"></span><span class="fullscreen"><i class="icon-search"></i></span><img src="{{ asset('home/img/portfolio/portfolio-6.jpg') }}" alt=" "/>
                                                </a>
                                                <div class="portfolio-item-title">
                                                    <a href="single-project.html">Sound Box</a>
                                                    <p>
                                                        Audio / Sound
                                                    </p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recent work end-->
        <!-- Features start -->
        <div class="features bottom-pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3  class="title">Our Services</h3>
                        <div class="row">
                            <div class="circular-nav">
                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 animate_afl">
                                    <div id="cn-tabs">
                                        <div class="service service-1">
                                            <div class="cn-content">
                                                <h4>Premium Sliders</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="service service-2">
                                            <div class="cn-content">
                                                <h4>Unlimited Colors</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="service service-3">
                                            <div class="cn-content">
                                                <h4>Shortcodes</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="service service-4">
                                            <div class="cn-content">
                                                <h4>300+ Icons</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="service service-5">
                                            <div class="cn-content">
                                                <h4>HTML5 / CSS3</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="service service-6">
                                            <div class="cn-content">
                                                <h4>After Sale Support</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="service service-7">
                                            <div class="cn-content">
                                                <h4>Google Fonts</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="service service-8">
                                            <div class="cn-content">
                                                <h4>Ajax Contact Form</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="service service-9">
                                            <div class="cn-content">
                                                <h4>Valid HTML Files</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <a href="#">Read More <i class="icon-angle-right"></i><i class="icon-angle-right"></i></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 animate_afr">
                                    <div class="cn-wrapper">
                                        <ul>
                                            <li class="circle-1 circle"><a class="active" href="#"><span class="icon-picture"></span></a></li>
                                            <li class="circle-2 circle"><a href="#"><span class="icon-rocket"></span></a></li>
                                            <li class="circle-3 circle"><a href="#"><span class="icon-puzzle-piece"></span> </a></li>
                                            <li class="circle-4 circle"><a href="#"><span class="icon-thumbs-up-alt"></span></a></li>
                                            <li class="circle-5 circle"><a href="#"><span class="icon-html5"></span></a></li>
                                            <li class="circle-6 circle"><a href="#"><span class="icon-user"></span></a></li>
                                            <li class="circle-7 circle"><a href="#"><span class="icon-google-plus"></span> </a></li>
                                            <li class="circle-8 circle"><a href="#"><span class="icon-envelope-alt"></span></a></li>
                                            <li class="circle-9 circle"><a href="#"><span class="icon-hand-right"></span></a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->
        <!-- Latest Posts start -->
        <div class="latest-posts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 com-sm-12 col-xs-12">
                        <h3 class="title">Latest Posts</h3>
                    </div>
                    <div class="clearfix"></div>
                    <div class="blog-showcase col-lg-12 col-md-12 col-sm-12 col-xs-12 animate_afb d1">
                        <ul>
                            <li class="">
                                <div class="blog-showcase-thumb col-lg-4">
                                    <div class="post-body">
                                        <a class="post-item-link" href="{{ asset('home/img/portfolio/portfolio-5.jpg') }}" data-rel="prettyPhoto"><span class="post-item-hover"></span><span class="fullscreen"><i class="icon-search"></i></span><img alt="" src="{{ asset('home/img/portfolio/portfolio-5.jpg') }}"></a>
                                    </div>
                                </div>
                                <div class="blog-showcase-extra-info col-lg-4">
                                    <span><a href="#">Sep 11th, 2013</a></span>
                                    <h4><a href="#" class="title">Blog post title</a></h4>
                                    <p>Mauris sed mauris bibendum est imperdiet porttitor tincidunt at lorem. Proin augue massa</p>
                                    <a href="#">Read more <i class="icon-double-angle-right"></i></a>
                                </div>
                            </li>
                            <li>
                                <div class="blog-showcase-thumb col-lg-4">
                                    <div class="post-body">
                                        <a class="post-item-link" href="{{ asset('home/img/portfolio/portfolio-6.jpg') }}" data-rel="prettyPhoto"><span class="post-item-hover"></span><span class="fullscreen"><i class="icon-search"></i></span><img alt="" src="{{ asset('home/img/portfolio/portfolio-6.jpg') }}"></a>
                                    </div>
                                </div>
                                <div class="blog-showcase-extra-info col-lg-4">
                                    <span><a href="#">Sep 11th, 2013</a></span>
                                    <h4><a href="#" class="title">Blog post title</a></h4>
                                    <p>Mauris sed mauris bibendum est imperdiet porttitor tincidunt at lorem. Proin augue massa</p>
                                    <a href="#">Read more <i class="icon-double-angle-right"></i></a>
                                </div>
                            </li>
                            <li class="blog-first-el">
                                <div class="blog-showcase-thumb col-lg-4">
                                    <div class="post-body">
                                        <a class="post-item-link" href="{{ asset('home/img/portfolio/portfolio-7.jpg') }}" data-rel="prettyPhoto"><span class="post-item-hover"></span><span class="fullscreen"><i class="icon-search"></i></span><img alt="" src="{{ asset('home/img/portfolio/portfolio-7.jpg') }}"></a>
                                    </div>
                                </div>
                                <div class="blog-showcase-extra-info col-lg-4">
                                    <span><a href="#">Sep 11th, 2013</a></span>
                                    <h4><a href="#" class="title">Blog post title</a></h4>
                                    <p>Mauris sed mauris bibendum est imperdiet porttitor tincidunt at lorem. Proin augue massa</p>
                                    <a href="#">Read more <i class="icon-double-angle-right"></i></a>
                                </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
        </div>
        <!-- Latest Posts End -->
        <!-- Our Clients Start-->
        <div class="our-clients">
            <div class="container">
                <div class="row">
                    <div class="client">
                        <div class="client-logo">
                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                                <div class="clients-title">
                                    <h3 class="title">Our Clients</h3>
                                    <div class="carousel-controls pull-right">
                                        <a class="prev" href="#client-carousel" data-slide="prev"><i class="icon-angle-left"></i></a>
                                        <a class="next" href="#client-carousel" data-slide="next"><i class="icon-angle-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div id="client-carousel" class="client-carousel slide">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item animate_afc d1">
                                                    <div class="item-inner"><a href="#"><img alt="Upportdash" src="{{ asset('home/img/clientslogo/logo-1.png') }}"></a></div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item animate_afc d2">
                                                    <div class="item-inner"><a href="#"><img alt="Upportdash" src="{{ asset('home/img/clientslogo/logo-2.png') }}"></a></div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item animate_afc d3">
                                                    <div class="item-inner"><a href="#"><img alt="Upportdash" src="{{ asset('home/img/clientslogo/logo-3.png') }}"></a></div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item animate_afc d4">
                                                    <div class="item-inner"><a href="#"><img alt="Upportdash" src="{{ asset('home/img/clientslogo/logo-4.png') }}"></a></div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                                                    <div class="item-inner"><a href="#"><img alt="Upportdash" src="{{ asset('home/img/clientslogo/logo-5.png') }}"></a></div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                                                    <div class="item-inner"><a href="#"><img alt="Upportdash" src="{{ asset('home/img/clientslogo/logo-4.png') }}"></a></div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                                                    <div class="item-inner"><a href="#"><img alt="Upportdash" src="{{ asset('home/img/clientslogo/logo-3.png') }}"></a></div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                                                    <div class="item-inner"><a href="#"><img alt="Upportdash" src="{{ asset('home/img/clientslogo/logo-2.png') }}"></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <!-- Testimonials Widget Start -->
                                <div class="row ">
                                    <div class="testimonials widget">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="testimonials-title">
                                                <h3 class="title">Testimonials</h3>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div id="testimonials-carousel" class="testimonials-carousel slide animate_afr d5">
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="testimonial item">
                                                            <p>
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                                                            </p>
                                                            <div class="testimonials-arrow">
                                                            </div>
                                                            <div class="author">
                                                                <div class="testimonial-image "><img alt="" src="{{ asset('home/img/testimonial/team-member-1.jpg') }}"></div>
                                                                <div class="testimonial-author-info">
                                                                    <a href="#"><span class="color">Monica Sing</span></a> FIFO Themes
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="testimonial item">
                                                            <p>
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                                                            </p>
                                                            <div class="testimonials-arrow">
                                                            </div>
                                                            <div class="author">
                                                                <div class="testimonial-image "><img alt="" src="{{ asset('home/img/testimonial/team-member-2.jpg') }}"></div>
                                                                <div class="testimonial-author-info">
                                                                    <a href="#"><span class="color">Monzurul Haque</span></a> FIFO Themes
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="testimonial item">
                                                            <p>
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                                                            </p>
                                                            <div class="testimonials-arrow">
                                                            </div>
                                                            <div class="author">
                                                                <div class="testimonial-image "><img alt="" src="{{ asset('home/img/testimonial/team-member-3.jpg') }}"></div>
                                                                <div class="testimonial-author-info">
                                                                    <a href="#"><span class="color">Carol Johansen</span></a> FIFO Themes
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Clients End -->
    </div>
@endsection