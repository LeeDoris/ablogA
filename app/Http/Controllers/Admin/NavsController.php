<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Links;
use App\Http\Model\Navs;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class NavsController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Navs::all();
        return view('admin.navs.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Navs::where('nav_id', 0)->get();
        return view('admin.navs.add',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $input = Input::except('_token');
        $roles = [
            'nav_name' => 'required|between:2,10',
            'nav_url' => 'required',
            'nav_order' => 'required',
        ];
        $messages = [
            'nav_name.required' => '导航名称不能为空',
            'nav_name.between' => '导航名称必须在2-10之间',
            'nav_url.required' => '导航链接不能为空',
            'nav_order.required' => '导航排序不能为空',
        ];
        $validator = Validator::make($input,$roles,$messages);
        if ($validator->passes()){
            $re = Navs::create($input);
            if ($re){
                return redirect('admin/navs');
            }else{
                return back()->with('errors', '导航创建失败,请稍后重试');
            }
        }else{
            return back()->withErrors($validator);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nav_id)
    {
        $field = Navs::find($nav_id);
        return view('admin.navs.edit',compact('field'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($nav_id)
    {
        $input = Input::except('_token', '_method');
        $re = Navs::where('nav_id',$nav_id)->update($input);
        if ($re){
            return redirect('admin/navs');
        }else{
            return back()->with('errors','导航更新失败,请稍后重试');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nav_id)
    {
        $re = Navs::where('nav_id',$nav_id)->delete();
        if ($re){
            $data = [
                'status' => 0,
                'msg' => '链接删除成功',
            ];
        }else{
            $data = [
                $data = [
                    'status' => 1,
                    'msg' => '链接删除失败',
                ]
            ];
        }
        return $data;
    }
}
