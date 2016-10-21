<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class IndexController extends CommonController
{
    public function index()
    {
        return view('admin.index');
    }

    /**
     * @return mixed
     */

    public function pass(Request $request)
    {
        $oldpassword = $request->input('password_o');
        $password = $request->input('password');
        if($input = Input::all()){

            $rules = [
                'password'=>'required|between:6,20|confirmed',
            ];

            $message = [
                'password.required'=>'新密码不能为空！',
                'password.between'=>'新密码必须在6-20位之间！',
                'password.confirmed'=>'新密码和确认密码不一致！',
            ];

            $validator = Validator::make($input,$rules,$message);

            if($validator->passes()){
                $user = Auth::user();
                if(Hash::check($oldpassword, $user->password)){
                    $user->password = bcrypt($password);
                    $user->update();
                    return redirect('admin/index');
                }else{
                    return back()->with('errors','原密码错误！');
                }
            }else{
                return back()->withErrors($validator);
            }

        }else{
            return view('admin.pass');
        }
    }
    
    
//    public function passRest(Request $request)
//    {
//        $oldpassword = $request->input('password_o');
//        $password = $request->input('password');
//        $data = $request->all();
//        $rules = [
//            'password_o'=>'required|between:6,20',
//            'password'=>'required|between:6,20|confirmed',
//        ];
//        $messages = [
//            'required' => '密码不能为空',
//            'between' => '密码必须是6~20位之间',
//            'confirmed' => '新密码和确认密码不匹配'
//        ];
//        $validator = Validator::make($data, $rules, $messages);
//        $user = Auth::user();
//        $validator->after(function($validator) use ($oldpassword, $user) {
//            if (!\Hash::check($oldpassword, $user->password)) {
//                $validator->errors()->add('password_o', '原密码错误');
//            }
//        });
//        if ($validator->fails()) {
//            return back()->withErrors($validator); //返回一次性错误
//        }
//        
//        $user->password = bcrypt($password);
//        $user->save();
//        Auth::logout();
//        return redirect('admin/pass')->with('errors','密码修改成功');
//    }
//    public function pass()
//    {
//        return view('admin.pass');
//    }
}
