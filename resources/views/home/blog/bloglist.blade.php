@extends('layouts.home')
@section('info')
    <title>Blog</title>
    <meta name="description" content="">
    <meta name="author" content="">
@endsection
@section('content')
    <div id="main">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title">Blog</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                            <ul>
                                <li>You are here:</li>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/blog') }}">Blog</a></li>
                                <li>Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Title, Breadcrumb End-->
        <!-- Main Content start-->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="posts-block col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        @foreach($data as $v)
                        <article class="post hentry">
                            <div class="post-image">
                                <a href="{{url($v->art_thumb)}}" data-rel="prettyPhoto">
                                    <span class="img-hover"></span>
                                    <span class="fullscreen"><i class="icon-search"></i></span>
                                    <img src="{{url($v->art_thumb)}}" alt="">
                                </a>
                            </div>
                            <header class="post-header">
                                <h3 class="content-title">{{ $v->art_title }}</h3>
                                <div class="blog-entry-meta">
                                    <div class="blog-entry-meta-date">
                                        <i class="icon-time"></i>
                                        <span class="blog-entry-meta-date-month">{{ $v->art_time }}</span>
                                    </div>
                                    <div class="blog-entry-meta-author">
                                        <i class="icon-user"></i>
                                        <a href="javascript:;" class="blog-entry-meta-author">{{ $v->art_editor }}</a>
                                    </div>
                                    <div class="blog-entry-meta-tags">
                                        <i class="icon-tags"></i>
                                        <a href="javascript:;">{{ $v->art_tag }}</a>,
                                    </div>
                                    <div class="blog-entry-meta-comments">
                                        <i class="icon-comments"></i>
                                        <a href="javascript:;" class="blog-entry-meta-comments">{{ $v->art_view }} views</a>
                                    </div>
                                </div>
                            </header>
                            <div class="post-content">
                                <p>{{ $v->art_description }}</p>
                            </div>
                            <footer class="post-footer">
                                <a href="{{ url('blog/article/'.$v->art_id) }}" class="btn-small btn-color">Read More</a>
                            </footer>
                        </article>
                        <div class="blog-divider"></div>
                        @endforeach
                        <div class="pagination-centered">
                            {{--<ul class="pagination">--}}
                                {{--<li class="disabled"><a href="#">«</a></li>--}}
                                {{--<li class="active"><a href="#">1</a></li>--}}
                                {{--<li><a href="#">2</a></li>--}}
                                {{--<li><a href="#">3</a></li>--}}
                                {{--<li><a href="#">4</a></li>--}}
                                {{--<li><a href="#">5</a></li>--}}
                                {{--<li><a href="#">»</a></li>--}}
                            {{--</ul>--}}
                            {{ $data->links() }}
                        </div>
                    </div>
                    <div class="sidebar col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <!-- Search Widget Start -->
                        <div class="widget search-form">
                            <div class="input-group">
                                <input type="text" value="Search..." onfocus="if(this.value=='Search...')this.value='';" onblur="if(this.value=='')this.value='Search...';" class="search-input form-control">
                              <span class="input-group-btn">
                              <button type="submit" class="subscribe-btn btn"><i class="icon-search"></i></button>
                              </span>
                            </div>
                            <!-- /input-group -->
                        </div>
                        <!-- Search Widget End -->
                        <!-- Tab Start -->
                        <div class="widget tabs">
                            <div id="horizontal-tabs">
                                <ul class="tabs">
                                    <li id="tab1" class="current">Popular</li>
                                    <li id="tab2">Recent</li>
                                </ul>
                                <div class="contents">
                                    <div class="tabscontent" id="content1" style="display: block;">
                                        <ul class="posts">
                                            @foreach($popular as $k)
                                            <li>
                                                <a href="{{ url('blog/article/'.$k->art_id) }}"><img class="img-thumbnail recent-post-img" alt="" src="{{ url($k->art_thumb) }}"></a>
                                                <p><a href="{{ url('blog/article/'.$k->art_id) }}">{{ $k->art_title }}</a></p>
                                                <span class="color">{{$k->art_time}}</span>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="tabscontent" id="content2">
                                        <ul class="posts">
                                            @foreach($popular as $m)
                                                <li>
                                                    <a href="{{ url('blog/article/'.$m->art_id) }}"><img class="img-thumbnail recent-post-img" alt="" src="{{ url($m->art_thumb) }}"></a>
                                                    <p><a href="{{ url('blog/article/'.$m->art_id) }}">{{ $m->art_title }}</a></p>
                                                    <span class="color">{{$m->art_time}}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab End -->
                        <!-- Testimonials Widget Start -->
                        <!-- Category Widget Start -->
                        <div class="widget category">
                            <h3 class="title">Category</h3>
                            <ul class="category-list slide">
                                @foreach($cate as $n)
                                    <li><a href="{{ url('blog/cate/'.$n->cate_id) }}">{{ $n->cate_name }}</a></li>
                                @endforeach

                            </ul>
                        </div>
                        <!-- Category Widget End -->
                        <!-- Ads Widget Start -->
                        <!-- Ads Widget End -->
                    </div>
                    <!-- Sidebar End -->
                </div>
            </div>
        </div>
        <!-- Main Content end-->
    </div>
@endsection