<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::get();
        $cars = $this->subSqlStr($cars);
        return view('admin.car',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.car_add');
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
        $rel = Car::create($atic);
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
        $car = Car::find($id);
        return view('admin.car_edit',compact('car'));
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
        $car = Car::find($id);
        $rel = $car->update($atic);
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
        $article = Car::find($id);
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
