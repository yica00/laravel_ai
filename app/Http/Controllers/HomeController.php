<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seting = readJson();
        return view('admin.index',compact('seting'));
    }

    public function update(){
        $data = [
            'week'=>Input::get('week'),
            'month'=>Input::get('month'),
            'shop_month'=>Input::get('shop_month'),
        ];
        writeJson($data);
        return back();
    }


    public function head_img(){
        $seting = readJson();
        return view('admin.head_img',compact('seting'));
    }

    public function uphead_img( Request $request ){
        $img1 = getUrl($request,'img1');
        $img2 = getUrl($request,'img2');
        $img3 = getUrl($request,'img3');
        $img4 = getUrl($request,'img4');
        $img5 = getUrl($request,'img5');
        $seting = readJson();
        $data = [
            'img1'=>$img1?$img1:$seting['img1'],
            'img2'=>$img2?$img2:$seting['img2'],
            'img3'=>$img3?$img3:$seting['img3'],
            'img4'=>$img4?$img4:$seting['img4'],
            'img5'=>$img5?$img5:$seting['img5']
        ];
        writeJson($data);
        return back()->with('errors',"修改成功");
    }

    public function product(){
        $seting = readJson2();
        return view('admin.product',compact('seting'));
    }

    public function upproduct( Request $request ){
        $data = [
            'product1'=>$request->get('product1'),
            'product_intro1'=>$request->get('product_intro1'),
            'product_det1_1'=>$request->get('product_det1_1'),
            'product_det1_2'=>$request->get('product_det1_2'),
            'product_det1_3'=>$request->get('product_det1_3'),
            'product_det1_4'=>$request->get('product_det1_4'),

            'product2'=>$request->get('product2'),
            'product_intro2'=>$request->get('product_intro2'),
            'product_det2_1'=>$request->get('product_det2_1'),
            'product_det2_2'=>$request->get('product_det2_2'),
            'product_det2_3'=>$request->get('product_det2_3'),
            'product_det2_4'=>$request->get('product_det2_4'),

            'product3'=>$request->get('product3'),
            'product_intro3'=>$request->get('product_intro3'),
            'product_det3_1'=>$request->get('product_det3_1'),
            'product_det3_2'=>$request->get('product_det3_2'),
            'product_det3_3'=>$request->get('product_det3_3'),
            'product_det3_4'=>$request->get('product_det3_4'),

            'product4'=>$request->get('product4'),
            'product_intro4'=>$request->get('product_intro4'),
            'product_det4_1'=>$request->get('product_det4_1'),
            'product_det4_2'=>$request->get('product_det4_2'),
            'product_det4_3'=>$request->get('product_det4_3'),
            'product_det4_4'=>$request->get('product_det4_4'),

        ];

        writeJson2($data);
        return back()->with('errors',"修改成功");
    }

    public function setting(){
//        $data = [
//            'web_name'=>'南充嘉彩包装印刷有限公司',
//            'phone'=>'189-9080-6536 （李总）    138-0827-0940（张总）',
//            'fix_phone'=>'0817-3889628',
//            'qq'=>'2606531440',
//            'bases'=>'南充市嘉陵区燕京大道工业园区（燕京啤酒厂前200米）',
//            'keywords'=>'网站关键词',
//            'description'=>'关键词描述',
//            'wx_map'=>'/sah/sadas',
//        ];
//        writeJson($data);die();

        $setting = readJson();
        return view('admin.setting',compact('setting'));
    }

    public function do_setting( Request $request ){
        $setting = readJson();
        $url = getUrl($request,'wx_map');
        $data = [
            'web_name'=>$request->get('web_name'),
            'phone'=>$request->get('phone'),
            'fix_phone'=>$request->get('fix_phone'),
            'qq'=>$request->get('qq'),
            'bases'=>$request->get('bases'),
            'keywords'=>$request->get('keywords'),
            'description'=>$request->get('description'),
            'wx_map'=>$url?$url:$setting['wx_map'],
        ];
        writeJson($data);
        return back()->with('errors',"修改成功");
    }


}
