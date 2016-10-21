<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Links;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class LinksController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Links::all();
        return view('admin.links.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Links::where('link_id',0)->get();
        return view('admin/links/add', compact('data'));
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
            'link_name' => 'required',
            'link_title' => 'required',
            'link_url' => 'required',
        ];
        $messages = [
            'link_name.required' => '链接名称不能为空',
            'link_title.required' => '链接标题不能为空',
            'link_url.required' => '超链接不能为空',
        ];
        $validator = Validator::make($input, $roles, $messages);

        if ($validator->passes()){
            $re = Links::create($input);
            if ($re){
                return redirect('admin/links');
            }else{
                return back()->with('errors','添加失败,请稍后重试!');
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
    public function edit($link_id)
    {
        $field = Links::find($link_id);
        return view('admin.links.edit',compact('field'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($link_id)
    {
        $input = Input::except('_method','_token');
        $re = Links::where('link_id',$link_id)->update($input);
        if ($re){
            return redirect('admin/links');
        }else{
            return back()->with('errors','更新链接失败,请稍后重试');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($link_id)
    {
        $re = Links::where('link_id',$link_id)->delete();
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
