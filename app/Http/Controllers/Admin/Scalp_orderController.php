<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Scalp_orderRequest;
use App\Models\Admin\Scalp_order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class Scalp_orderController extends Controller
{
    /**
     * 列表
     */
    public function index(){
        $scalp_orders = Scalp_order::orderBy('id','desc')->paginate(10);
        return view('admin.scalp_order',compact('scalp_orders'));
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
        return view('admin.scalp_order_create');
    }

    /**
     * 新增
     */
    public function store(Scalp_orderRequest $request ){
        $rel = Scalp_order::create(Input::all());
        if($rel->wasRecentlyCreated) {
            return back()->with('errors','添加成功');
        }
        return back()->withErrors();
    }

    /**
     * 编辑页面
     */
    public function edit($id){
        $scalp_order = Scalp_order::find($id);
        if(!$scalp_order){
            return back()->with('errors','无此数据');
        }
        return view('admin.scalp_order_create',compact('scalp_order'));
    }

    /**
     * 保存编辑
     */
    public function update($id){
        $scalp_order = Scalp_order::find($id);
        if(!$scalp_order){
            return back()->with('errors',"无此数据");
        }
        $rel = $scalp_order->update(Input::except('_method','_token'));
        if($rel){
            return back()->with('errors',"更新成功");
        }
        return back()->with('errors',"更新失败");
    }

    /**
     * 删除数据
     */
    public function destroy($id){
        $scalp_order = Scalp_order::find($id);
        if($scalp_order&&$scalp_order->delete()){
            return back()->with('errors',"删除成功");
        }
        return back()->with('errors',"删除失败");
    }
}
