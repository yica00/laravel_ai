<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::get();
        return view('admin.customer',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customer_add');
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
        $atic['imgs'] = getMultiUrl($request,'imgs');
        $rel = Customer::create($atic);
        if($rel->wasRecentlyCreated){
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
        $customer = Customer::find($id);
        return view('admin.customer_edit',compact('customer'));
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
        $atic['imgs'] = getMultiUrl($request,'imgs');
        if( ! $atic['imgs'] ){
            unset( $atic['imgs']);
        }
        $customer = Customer::find($id);
        $rel = $customer->update($atic);
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
        $article = Customer::find($id);
        if($article && $article->delete()){
            return back()->with('errors',"删除成功");
        }
        return back()->with('errors',"删除失败");
    }



}
