@extends('layouts.home')
@section('info')
    <title>Blog</title>
    <meta name="description" content="">
    <meta name="author" content="">
@endsection
@section('content')
    <div id="main">
        <!-- Title, Breadcrumb Start-->
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
                                <li>Blog Single Post</li>
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
                    <div class="posts-block col-lg-9 col-md-9 col-sm-8 col-xs-12 bottom-pad">
                        @foreach($data as $k)
                        <article class="post hentry">
                            <div class="post-image">
                                <a href="{{ url($k->art_thumb) }}" data-rel="prettyPhoto">
                                    <span class="img-hover"></span>
                                    <span class="fullscreen"><i class="icon-search"></i></span>
                                    <img src="{{ url($k->art_thumb) }}" alt="">
                                </a>
                            </div>
                            <header class="post-header">
                                <h3 class="content-title">{{ $k->art_title }}</h3>
                                <div class="blog-entry-meta">
                                    <div class="blog-entry-meta-date">
                                        <i class="icon-time"></i>
                                        <span class="blog-entry-meta-date-month">{{ $k->art_time }}</span>
                                    </div>
                                    <div class="blog-entry-meta-author">
                                        <i class="icon-user"></i>
                                        <a href="javascript:;" class="blog-entry-meta-author">{{ $k->art_editor }}</a>
                                    </div>
                                    <div class="blog-entry-meta-tags">
                                        <i class="icon-tags"></i>
                                        <a href="javascript:;">{{ $k->art_tag }}</a>,
                                    </div>
                                    <div class="blog-entry-meta-comments">
                                        <i class="icon-comments"></i>
                                        <a href="javascript:;" class="blog-entry-meta-comments">{{ $k->art_view }} comments</a>
                                    </div>
                                </div>
                            </header>
                            <div class="post-content">
                                {!! $k->art_content !!}
                            </div>
                        </article>
                        @endforeach
                        <div class="blog-divider"></div>
                        <ul class="pager">
                            <li class="previous">
                                @if($article['pre'])
                                    <a href="{{ url('blog/article/'.$article['pre']->art_id) }}">&larr; Older</a>
                                @else
                                    <a href="javascript:;">Top</a>
                                @endif
                            </li>
                            <li class="next">
                                @if($article['next'])
                                    <a href="{{ url('blog/article/'.$article['next']->art_id) }}"> Newer &rarr;</a>
                                @else
                                    <a href="javascript:;">Bottom</a>
                                @endif
                            </li>
                        </ul>
                        <!-- Start About Author -->
                        {{--<div class="about-author">--}}
                            {{--<h3 class="title">About The Author</h3>--}}
                            {{--<div class="author-content">--}}
                                {{--<div class="avatar"><img alt="" src="img/fifo-small.jpg"></div>--}}
                                {{--<div class="data">--}}
                                    {{--<h4><a href="#">FIFO Themes</a></h4>--}}
                                    {{--<p>--}}
                                        {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                                {{--<!-- End data -->--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <!-- End About Author -->
                        <div class="divider"></div>
                        <!-- Comments Section Start -->
                        <div class="comment-wrapper">
                            <h3 class="title">Comments</h3>
                            <div class="clearfix"></div>
                            <div class="comments-sec">
                                <ol class="commentlist">
                                    <li>
                                        <div class="comment" id="1">
                                            <div class="avatar">
                                                <img alt="" src="{{ asset('home/img/team/team-member-2.jpg') }}">
                                            </div>
                                            <div class="comment-des">
                                                <div class="arrow-comment">
                                                </div>
                                                <div class="comment-by">
                                                    <strong>Simon Jones</strong><span class="date">July 30, 2013</span><span class="reply"><a href="#"><i class="icon-reply"></i> Reply</a></span>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </p>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                        <ol class="childlist">
                                            <li>
                                                <div class="comment" id="3">
                                                    <div class="avatar">
                                                        <img alt="" src="{{ asset('home/img/team/team-member-1.jpg') }}">
                                                    </div>
                                                    <div class="comment-des">
                                                        <div class="arrow-comment">
                                                        </div>
                                                        <div class="comment-by">
                                                            <strong>Admin</strong><span class="date">July 30, 2013</span><span class="reply"><a href="#"><i class="icon-reply"></i> Reply</a></span>
                                                        </div>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </p>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                        <div class="clearfix">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment" id="2">
                                            <div class="avatar">
                                                <img alt="" src="{{ asset('home/img/testimonial/team-member-2.jpg') }}">
                                            </div>
                                            <div class="comment-des">
                                                <div class="arrow-comment">
                                                </div>
                                                <div class="comment-by">
                                                    <strong>Loren Simpson</strong><span class="date">July 30, 2013</span><span class="reply"><a href="#"><i class="icon-reply"></i> Reply</a></span>
                                                </div>
                                                <p>
                                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                                </p>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment" id="4">
                                            <div class="avatar">
                                                <img alt="" src="{{ asset('home/img/testimonial/team-member-3.jpg') }}">
                                            </div>
                                            <div class="comment-des">
                                                <div class="arrow-comment">
                                                </div>
                                                <div class="comment-by">
                                                    <strong>Indy Parker</strong><span class="date">July 30, 2013</span><span class="reply"><a href="#"><i class="icon-reply"></i> Reply</a></span>
                                                </div>
                                                <p>
                                                    Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                                </p>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                        <!-- Comments Section End -->
                        <div class="divider"></div>
                        <!-- Reply Section Start -->
                        <div class="reply">
                            <h3 class="title">Leave a reply</h3>
                            <form class="reply" id="reply">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <label>Name: <span>*</span></label>
                                            <input class="form-control" type="text" value="" required>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <label>Email: <span>*</span></label>
                                            <input class="form-control" type="text" value="" required>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <label>Website: </label>
                                            <input class="form-control" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label>Comment: <span>*</span></label>
                                            <textarea class="form-control" rows="3" cols="40" required></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                <button class="btn-normal btn-color" type="submit">Post Reply</button>
                                <div class="clearfix">
                                </div>
                            </form>
                        </div>
                        <!-- Reply Section End -->
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
                                            @foreach($popular as $n)
                                                <li>
                                                    <a href="{{ url('blog/article/'.$n->art_id) }}"><img class="img-thumbnail recent-post-img" alt="" src="{{ url($n->art_thumb) }}"></a>
                                                    <p><a href="{{ url('blog/article/'.$n->art_id) }}">{{ $n->art_title }}</a></p>
                                                    <span class="color">{{$n->art_time}}</span>
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
                        <div class="widget category">
                            <h3 class="title">Category</h3>
                            <ul class="category-list slide">
                                @foreach($cate as $v)
                                    <li><a href="{{ url('blog/cate/'.$v->cate_id) }}">{{ $v->cate_name }}</a></li>
                                @endforeach

                            </ul>
                        </div>
                        <!-- Category Widget End -->
                    </div>
                    <!-- Sidebar End -->
                </div>
            </div>
        </div>
        <!-- Main Content end-->
    </div>
@endsection