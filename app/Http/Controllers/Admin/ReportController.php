<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Article;
use App\Models\Admin\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::paginate(10);
        return view('admin.report',compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Article::where('pid',3)->get();
//        $ids = getIds($cates);
//        $articles = Article::select('id','title')->whereIn('pid',$ids)
//            ->orderBy('id','desc')->get();
        return view('admin.report_add',compact('items'));
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
        $atic['thumbnail'] = getMultiUrl($request,'imgs');
//        $atic['wx_img'] = getUrl($request,'wx_img');
//        $atic['production'] = isset( $atic['production']) ?implode(',',$atic['production']):"";
        $rel = Report::create($atic);
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
        $report = Report::find($id);
//        $team->production = explode(',',$team->production);
//        $cates = Article::where('pid',15)->get();
//        $ids = getIds($cates);
//        $articles = Article::select('id','title')->whereIn('pid',$ids)
//            ->orderBy('id','desc')->get();
//        $items = Article::where('pid',3)->get();
        return view('admin.report_edit',compact('report','items'));
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
        $atic['thumbnail'] = getMultiUrl($request,'imgs');
//        $atic['wx_img'] = getUrl($request,'wx_img');
//        $atic['production'] = isset( $atic['production']) ?implode(',',$atic['production']):"";
        if( ! $atic['thumbnail'] ){
            unset( $atic['thumbnail']);
        }
        $team = Report::find($id);
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
        $article = Report::find($id);
        if($article && $article->delete()){
            return back()->with('errors',"删除成功");
        }
        return back()->with('errors',"删除失败");
    }
}
