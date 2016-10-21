<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Article;
use App\Http\Model\Category;
use App\Http\Model\Navs;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends CommonController
{
    public function index()
    {
        return view('home.index');
    }

    public function blog()
    {
        $cate = (new Category)->tree();
        $data = Article::orderBy('art_time','desc')->paginate(5);
        return view('home.blog.blog',compact('data','cate'));
    }

    public function blogCate($cate_id)
    {
        $cate = (new Category)->tree();
        $popular = Article::orderBy('art_view','desc')->take(2)->get();
        $recent = Article::orderBy('art_time','desc')->take(2)->get();
        $data = Article::where('cate_id',$cate_id)->orderBy('art_time','desc')->paginate(4);
        return view('home.blog.bloglist',compact('data','popular','recent','cate'));
    }

    public function blogArticle($art_id)
    {
        $cate = (new Category)->tree();
        Article::where('art_id',$art_id)->increment('art_view');
        $data = Article::where('art_id',$art_id)->get();
        $popular = Article::orderBy('art_view','desc')->take(2)->get();
        $recent = Article::orderBy('art_time','desc')->take(2)->get();
        $article['pre'] = Article::where('art_id','<',$art_id)->orderBy('art_id','desc')->first();
        $article['next'] = Article::where('art_id','>',$art_id)->orderBy('art_id','asc')->first();
        return view('home.blog.blogart',compact('data','article','popular','recent','cate'));
    }
}
