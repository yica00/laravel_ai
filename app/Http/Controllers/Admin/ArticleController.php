<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\ArticleCreateRequest;
use App\Http\Requests\Admin\ArticleUpdateRequest;
use App\Models\Admin\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;


class ArticleController extends Controller
{
    public function index(Request $request){
        $articles = Article::with(array('articles'=>function( $query ){
            $query->select('id','pid','title','serial_number')
                ->where('is_nav','1');
        }))
            ->select('id','pid','title','serial_number')->where('pid','0')->where('is_nav','1')
            ->orderBy('serial_number','asc')->orderBy('id','asc')->get();

//        $rel = Article::select('id','title','pid')->where('is_nav','1')->orderBy('id','asc')->get();
//        $arr = $arr2 = [];
//        for ( $i=$j=0;$i<count($rel);$i++ ){
//            if($rel[$i]->pid==0){
//                $arr[] = $rel[$i];
//            }else{
//                $arr2[] = $rel[$i];
//            }
//        }
//        for ( $i=0;$i<count($arr2);$i++ ) {
//            for ( $j=0;$j<count($arr);$j++ ) {
//                if ($arr[$j]->id == $arr2[$i]->pid) {
//                    array_splice($arr, $j+1,0,array($arr2[$i]));
//                }
//            }
//        }
        return view('admin.article')->with('permission',$articles);
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
     * 查看内容列表
     */
    public function look_son($id){
        $articles = Article::where('pid',$id)->orderBy('id','desc')->paginate(10);
        if( $id != 0 ){
            $pid = Article::find($id)->pid;
        }else{
            $pid = 0;
        }
        $article = Article::find($id);
        return view('admin.article_list',compact('articles','pid','article'));
    }

    /**
     * 展示添加内容页面
     */
    public function add_son($id){
        if( $id != 0 ){
            $article = Article::find($id);
            $pid = $article->pid;
        }else{
            $pid = 0;
            $article = null;
        }

        return view('admin.article_add_son',compact('id','pid','article'));
    }

    public function store_son( ArticleCreateRequest $articleCreateRequest ){
        $atic = Input::all();
        $atic['thumbnail'] = getUrl($articleCreateRequest,'thumbnail');
        $rel = Article::create($atic);
        if($rel->wasRecentlyCreated){
            return back()->with('errors','添加成功');
        }
        return back()->withErrors();
    }

    /**
     * 新增
     */
     public function store( ){
        $rel = Article::create(Input::all() );
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
        return view('admin.article_edit',compact('article'));
    }

    /**
     * 保存编辑
     */
    public function update($id,ArticleUpdateRequest $articleUpdateRequest){
        $article = Article::find($id);
        if(!$article){
            return back()->with('errors',"无此数据");
        }
        $atic = Input::all();
        $atic['thumbnail'] = getUrl($articleUpdateRequest,'thumbnail');
        if( !$atic['thumbnail'] ){
            unset( $atic['thumbnail']);
        }
        $rel = $article->update($atic);
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

    public function delete_son($id){
        $article = Article::find($id);
        if($article && $article->delete()){
            return back()->with('errors',"删除成功");
        }
        return back()->with('errors',"删除失败");
    }

}
