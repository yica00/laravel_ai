<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;
use Laracasts\Utilities\JavaScript\ViewBinder;

class ArticleController extends Controller
{
    public function index(Request $request){
        $this->getlevel(5,$request);
        return $request->get('str');
//        $articles = Article::select('id','title','pid')->orderBy('id','asc')->get();
        $rel = Article::select('id','title','pid')->orderBy('id','asc')->get();
//        $articles = getSubs($articles,$pid=0);
//        return getSubs($articles);

        $arr = $arr2 = '';
        for ( $i=$j=0;$i<count($rel);$i++ ){
            if($rel[$i]->pid==0){
                $arr[] = $rel[$i];
            }else{
                $arr2[] = $rel[$i];
            }
        }
        for ( $i=0;$i<count($arr2);$i++ ) {
            for ( $j=0;$j<count($arr);$j++ ) {
                if ($arr[$j]->id == $arr2[$i]->pid) {
                    array_splice($arr, $j+1,0,array($arr2[$i]));
                }
            }
        }
        return view('admin.article')->with('permission',$arr);
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
        return view('admin.article_create');
    }

    /**
     * 新增
     */
     public function store( ){
         $pid = Input::get('pid');

        $rel = Article::create(['name'=>Input::get('name')]);
        if($rel->wasRecentlyCreated){
            return back()->with('errors','添加成功');
        }
        return back()->withErrors();
    }

    private function getlevel($pid,$request,$str=""){
        $artical = Article::find($pid);
        if( $artical->pid != 0 ){
            $str .= "　　_";
            $request->attributes->add(['str'=>$str]);
            $artical = Article::find($pid);
            if($artical->pid != 0){
                $this->getlevel($artical->pid,$request,$str);
            }
        }
    }

    /**
     * 编辑页面
     */
    public function edit($id){
        $article = Article::find($id);
        if(!$article){
            return back()->with('errors','无此数据');
        }
        return view('admin.article_create',compact('article'));
    }

    /**
     * 保存编辑
     */
    public function update($id){
        $article = Article::find($id);
        if(!$article){
            return back()->with('errors',"无此数据");
        }
        $rel = $article->update(Input::except('_method','_token'));
        if($rel){
            return back()->with('errors',"更新成功");
        }
        return back()->with('errors',"更新失败");
    }

    /**
     * 删除数据
     */
    public function destroy($id){
        $article = Article::find($id);
        if($article && $article->delete()){
            return back()->with('errors',"删除成功");
        }
        return back()->with('errors',"删除失败");
    }

}
