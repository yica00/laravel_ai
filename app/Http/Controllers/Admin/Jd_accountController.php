<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Jd_accountRequest;
use App\Models\Admin\Jd_account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;


class Jd_accountController extends Controller
{

    /**
     * 账号列表
     */
    public function index(){
        $jd_accounts = Jd_account::orderBy('id','desc')->paginate(6);
        return view('admin.jd_account',compact('jd_accounts'));
    }

    /**
     * 展示添加页面
     */
    public function create(){
        return view('admin.jd_account_create');
    }

    /**
     * 添加jd账号
     */
    public function store( Jd_accountRequest $request ){
        $rel = Jd_account::create(Input::all());
        if($rel->wasRecentlyCreated) {
            return back()->with('errors','添加成功');
        }
        return back()->withErrors();
    }

    /**
     * 展示修改账号页面
     */
    public function edit($id){
        $jd_account = Jd_account::find($id);
        if(!$jd_account){
            return back()->with('errors','无此数据');
        }
        return view('admin.jd_account_create',compact('jd_account'));
    }

    /**
     * 处理更新数据
     */
    public function update($id, Jd_accountRequest $request){
        $jd_account = Jd_account::find($id);
        if(!$jd_account){
            return back()->with('errors',"无此数据");
        }
        $rel = $jd_account->update(Input::except('_method','_token'));
        if($rel){
            return back()->with('errors',"更新成功");
        }
        return back()->with('errors',"更新失败");
    }

    /**
     * 删除一个账户
     * @param $id
     */
    public function destroy($id){
        $jd_account = Jd_account::find($id);
        if($jd_account&&$jd_account->delete()){
            return back()->with('errors',"删除成功");
        }
        return back()->with('errors',"删除失败");
    }

    /**
     * 客户端添加数据
     */
    public function cliStore(){
        $rel = Jd_account::create(Input::all());
        if($rel->wasRecentlyCreated) {
            return ['code'=>1000];
        }
        return ['code'=>1001];
    }

    /**
     *客户端修改数据
     */
    public function cliUpdate($id){
        $jd_account = Jd_account::find($id);
        if(!$jd_account){
            return ['code'=>2001];
        }
        $rel = $jd_account->update(Input::except('_method'));
        if($rel){
            return ['code'=>2000];
        }
        return ['code'=>2001];
    }

    /**
     * 上传文件批处理
     */
    public function uploadFile( Request $request ){
        $file = $request->file('mfile');
        if($file->isValid()){
            if($file->getClientOriginalExtension()!="txt"){
                die('请上传txt格式文件');
            }
            $suid = substr($file->getClientOriginalName(),0,-4);
            $rel =file_get_contents($file->getRealPath());
            $html = iconv("gb2312", "utf-8//IGNORE",$rel);
            $array = explode('****z', str_replace("\r\n","****z",$html));
            for( $i=0;$i<count($array);$i++ ){
                if( $array[$i] ){
                    $acount = explode('----',$array[$i]);
                    if( count($acount) ==8 ){
                        $jd_account = [
                            'account'=>$acount[0],
                            'password'=>$acount[1],
                            'charge_password'=>$acount[2],
                            'phone'=>$acount[3],
                            'email'=>$acount[4],
                            'email_password'=>$acount[5],
                            'ip_location'=>$acount[7],
                        ];
                        Jd_account::create($jd_account);
                    }
                }
            }
        }
        return back();
    }


}


