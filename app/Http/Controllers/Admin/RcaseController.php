<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Article;
use App\Models\Admin\Rcase;
use App\Models\Admin\Teams;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class RcaseController extends Controller
{
    public function index()
    {
        $rcases = Rcase::paginate(10);
        $rcases = $this->subSqlStr($rcases);
        return view('admin.rcase',compact('rcases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $houses = Article::where('pid',25)->get();
        $styles = Article::where('pid',26)->get();
        $teams = Teams::get();
        return view('admin.rcase_add',compact('houses','styles','teams'));
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
        $atic['thumbnail'] = getUrl($request,'thumbnail');
        $rel = Rcase::create($atic);
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
        $houses = Article::where('pid',25)->get();
        $styles = Article::where('pid',26)->get();
        $teams = Teams::get();
        $rcase = Rcase::find($id);
        return view('admin.rcase_edit',compact('rcase','houses','styles','teams'));
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
        $atic['thumbnail'] = getUrl($request,'thumbnail');
        if( ! $atic['thumbnail'] ){
            unset( $atic['thumbnail']);
        }
        $rcase = Rcase::find($id);
        $rel = $rcase->update($atic);
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
        $article = Rcase::find($id);
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
