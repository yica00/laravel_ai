<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Crm\UserRequest;
use App\Models\Admin\Area;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{

    /**
     * 修改密码
     */
    public function up_password(){
        return view('admin.up_password');
    }

    /**
     * 处理修改密码
     */
    public function do_up_password(){
        $old_password = Input::get('old_password');
        $new_password = Input::get('new_password');
        $query_password = Input::get('query_password');
        if($new_password != $query_password){
            return back()->with('errors',"两次新密码不一致");
        }
        if(! Hash::check($old_password,Auth::user()->password)){
            return back()->with('errors',"旧密码不正确");
        }
        $user = Auth::user();
        $user->password = Hash::make($new_password);
        $user->save();
        return back()->with('errors',"修改成功");
    }


    /**
     * 展示一条数据
     */
    public function show($id){

    }

    /**
     * 展示新增页面
     */
    public function create(){

    }

    /**
     * 新增
     */
    public function store(){

    }

    /**
     * 编辑页面
     */
    public function edit($id){

    }

    /**
     * 保存编辑
     */
    public function update($id){

    }

    /**
     * 删除数据
     */
    public function destroy($id){

    }



}
