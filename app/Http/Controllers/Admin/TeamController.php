<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Article;
use App\Models\Admin\Teams;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Teams::get();
        $teams = $this->subSqlStr($teams);
        return view('admin.team',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cates = Article::where('pid',15)->get();
        $ids = getIds($cates);
        $articles = Article::select('id','title')->whereIn('pid',$ids)
            ->orderBy('id','desc')->get();
        return view('admin.team_add',compact('articles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $atic = Input::all();
        $atic['photo'] = getUrl($request,'photo');
        $atic['wx_img'] = getUrl($request,'wx_img');
        $atic['production'] = isset( $atic['production']) ?implode(',',$atic['production']):"";
        $rel = Teams::create($atic);
        if( $rel->wasRecentlyCreated ){
            return back()->with('errors','添加成功');
         }
        return back()->withErrors();
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
    public function edit($id)
    {
        $team = Teams::find($id);
        $team->production = explode(',',$team->production);
        $cates = Article::where('pid',15)->get();
        $ids = getIds($cates);
        $articles = Article::select('id','title')->whereIn('pid',$ids)
            ->orderBy('id','desc')->get();
        return view('admin.team_edit',compact('team','articles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $atic = Input::except('_token','_method');
        $atic['photo'] = getUrl($request,'photo');
        $atic['wx_img'] = getUrl($request,'wx_img');
        $atic['production'] = isset( $atic['production']) ?implode(',',$atic['production']):"";
        if( ! $atic['photo'] ){
            unset( $atic['photo']);
        }
        if( ! $atic['wx_img'] ){
            unset( $atic['wx_img']);
        }
        $team = Teams::find($id);
        $rel = $team->update($atic);
        if( $rel){
            return back()->with('errors','修改成功');
        }
        return back()->withErrors();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Teams::find($id);
        if($article && $article->delete()){
            return back()->with('errors',"删除成功");
        }
        return back()->with('errors',"删除失败");
    }


    public function subSqlStr( $data ){
        for( $i=0;$i<count($data);$i++ ){
            $data[$i]->introduce = mb_substr($data[$i]->introduce,0,10,'utf8')."...";
        }
        return $data;
    }
}
