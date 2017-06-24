<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\TagRequest;
use App\Models\Admin\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class TagController extends Controller
{

    /**
     * 列表
     */
    public function index(){
        $tags = Tag::select('id','name','created_at')->orderBy('id','desc')->paginate(10);
        return view('admin.tag',compact('tags'));
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
        return view('admin.tag_create');
    }

    /**
     * 新增
     */
    public function store( TagRequest $request ){
        $rel = Tag::create(['name'=>Input::get('name')]);
        if($rel->wasRecentlyCreated){
            return back()->with('errors','添加成功');
        }
        return back()->withErrors();
    }

    /**
     * 编辑页面
     */
    public function edit($id){
        $tag = Tag::find($id);
        if(!$tag){
            return back()->with('errors','无此数据');
        }
        return view('admin.tag_create',compact('tag'));
    }

    /**
     * 保存编辑
     */
    public function update($id,TagRequest $request){
        $tag = Tag::find($id);
        if(!$tag){
            return back()->with('errors',"无此数据");
        }
        $rel = $tag->update(Input::except('_method','_token'));
        if($rel){
            return back()->with('errors',"更新成功");
        }
        return back()->with('errors',"更新失败");
    }

    /**
     * 删除数据
     */
    public function destroy($id){
        $tag = Tag::find($id);
        if($tag && $tag->delete()){
            return back()->with('errors',"删除成功");
        }
        return back()->with('errors',"删除失败");
    }


}
