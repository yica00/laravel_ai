<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\EvaluateRequest;
use App\Models\Admin\Evaluate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class EvaluateController extends Controller
{
    /**
     * 列表
     */
    public function index(){
        $evaluates = Evaluate::select('id','detail','goods_id')->orderBy('id','desc')->paginate(10);
        return view('admin.evaluate',compact('evaluates'));
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
        return view('admin.evaluate_create');
    }

    /**
     * 新增
     */
    public function store( EvaluateRequest $request ){
        $rel = Evaluate::create(Input::all());
        if($rel->wasRecentlyCreated){
            return back()->with('errors','添加成功');
        }
        return back()->withErrors();
    }

    /**
     * 编辑页面
     */
    public function edit($id){
        $evaluate = Evaluate::find($id);
        if(!$evaluate){
            return back()->with('errors','无此数据');
        }
        return view('admin.evaluate_create',compact('evaluate'));
    }

    /**
     * 保存编辑
     */
    public function update($id,EvaluateRequest $request){
        $evaluate = Evaluate::find($id);
        if(!$evaluate){
            return back()->with('errors',"无此数据");
        }
        $rel = $evaluate->update(Input::except('_method','_token'));
        if($rel){
            return back()->with('errors',"更新成功");
        }
        return back()->with('errors',"更新失败");
    }

    /**
     * 删除数据
     */
    public function destroy($id){
        $evaluate = Evaluate::find($id);
        if($evaluate && $evaluate->delete()){
            return back()->with('errors',"删除成功");
        }
        return back()->with('errors',"删除失败");
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
                    Evaluate::create(['detail'=>$array[$i],'goods_id'=>$suid]);
                }
            }
        }
        return back();
    }
}
