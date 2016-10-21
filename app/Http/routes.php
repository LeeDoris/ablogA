<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web','menus']], function () {
    Route::get('/', 'Home\IndexController@index');

    Route::get('blog','Home\IndexController@blog');
    Route::get('blog/cate/{cate_id}', 'Home\IndexController@blogCate');
    Route::get('blog/article/{art_id}', 'Home\IndexController@blogArticle');
});


Route::get('login','Auth\AuthController@admin');
Route::auth();



Route::group(['middleware' => ['web','auth'],'prefix'=>'admin','namespace'=>'Admin'], function (){
    Route::get('index', 'IndexController@index');
    Route::any('pass', 'IndexController@pass');
    Route::any('upload','CommonController@upload');
    Route::resource('category', 'CategoryController');
    Route::resource('article', 'ArticleController');
    Route::resource('links','LinksController');
    Route::resource('navs', 'NavsController');
    Route::resource('config','ConfigController');
    Route::post('config/changeconfig','ConfigController@changeConfig');
    Route::get('config/putfile', 'ConfigController@putFile');
});



