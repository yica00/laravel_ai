<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Img;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ImgController extends Controller
{
    public function index()
    {
        $imgs = Img::get();
        return view('admin.img',compact('imgs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.img_add');
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
        $rel = Img::create($atic);
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
        $img = Img::find($id);
        return view('admin.img_edit',compact('img'));
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
        if( ! $atic['photo'] ){
            unset( $atic['photo']);
        }
        $img = Img::find($id);
        $rel = $img->update($atic);
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
        $article = Img::find($id);
        if($article && $article->delete()){
            return "删除成功";
            return back()->with('errors',"删除成功");
        }
        return "删除失败";
        return back()->with('errors',"删除失败");
    }

    
}
