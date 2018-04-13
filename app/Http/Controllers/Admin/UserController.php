<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Crm\UserRequest;
use App\Models\Admin\Area;
use App\Models\Admin\Teams;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{

    public function index(){
        $teams = User::orderBy('id','desc')->paginate(20);
        return view('admin.team',compact('teams'));
    }

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


    public function pushCode(){
        $code = Input::get('code');
        $refer = Input::get('uid');
        $app = app('wechat');
        $miniProgram = $app->mini_program;
        $rel = $miniProgram->sns->getSessionKey($code);
        if ( isset($rel->openid) ){
            $user = User::where('openid',$rel->openid)->first();
            if( !$user ){
                $xxx = User::find($refer);
                if(!$xxx){
                    $refer = 0;
                }
                $user = [
                    'name'=>num11(),
                    'password'=>Hash::make("123456"),
                    'openid'=>$rel->openid,
                    'refer'=>$refer,
                ];
                $user = User::create($user);
            }
            Auth::login($user);
            return ['statue'=>1 ];
        }else{
            file_put_contents(storage_path('notify.txt'), '时间：' . Carbon::now(). "\r\n", FILE_APPEND);
            return ['statue'=>0 ];
        }
    }

    public function authCheck(){
        if( Auth::check() ){
            return ['statue'=>1 ];
        }
        return ['statue'=>0 ];
    }



}
