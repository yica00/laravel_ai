<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\AreaRequest;
use App\Models\Admin\Area;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AreaController extends Controller
{
    /**
     * 列表
     */
    public function index(){
        $areas = Area::select('id','name','pid')->paginate(10);
        return view('admin.area',compact('areas'));
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
        return view('admin.area_create');
    }

    /**
     * 新增
     */
    public function store( AreaRequest $request ){
        $rel = Area::create(Input::all());
        if($rel->wasRecentlyCreated){
            return back()->with('errors','添加成功');
        }
        return back()->withErrors();
    }

    /**
     * 编辑页面
     */
    public function edit($id){
        $area = Area::find($id);
        if(!$area){
            return back()->with('errors','无此数据');
        }
        return view('admin.area_create',compact('area'));
    }

    /**
     * 保存编辑
     */
    public function update($id,AreaRequest $request){
        $area = Area::find($id);
        if(!$area){
            return back()->with('errors',"无此数据");
        }
        $rel = $area->update(Input::except('_method','_token'));
        if($rel){
            return view('admin.area_create',compact('area'))->with('errors',"更新成功");
        }
        return back()->with('errors',"更新失败");
    }

    /**
     * 删除数据
     */
    public function destroy($id){
        $area = Area::find($id);
        if($area && $area->delete()){
            return back()->with('errors',"删除成功");
        }
        return back()->with('errors',"删除失败");
    }

    /**
     * 省市查询接口
     */
    public function searchCity( Request $request ){
        $province = Input::get('province');
        $city = Input::get('city');
        $area = Area::where('name',$province)->where('pid','4744')->first();
        if(!$area){
            return ['code'=>3001];
        }
        $sons = $area->areas()->get();
        $arr = [];
        $arr[] = $area->id;
        for ( $i=0;$i<count($sons);$i++ ){
            if($sons[$i]->name == $city  ){
                $arr[] = $sons[$i]->id;
                break;
            }
        }
        if( count($arr)==1 ){
            return ['code'=>3001];
        }

        $request->attributes->add(['arrs'=>$arr]);
        $this->getSon($arr[1],$request);
        $arr = $request->get('arrs');
        $area = implode('_',$arr);
        return $area;

    }

    private function getSon($pid,$request){
        $sons = Area::where('pid',$pid)->get();
        if(count($sons)){
            $count = count($sons);
            $id = rand(0,$count-1);
            $arr = $request->get('arrs');
            $arr[] = $sons[$id]->id;
            $request->attributes->add(['arrs'=>$arr]);
            $this->getSon($sons[$id]->id,$request);
        }
    }

}
