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
//            'web_name'=>'南充神鹰户外军事拓展连锁',
//            'fix_phone'=>'0817-2189050',
//            'contacts'=>'手机：黄教练（152-2816-9898） /  许教练（152-2812-1788',
//            'qq'=>'360090407',
//            'bases'=>'西山基地、搬罾青山湖基地、搬罾果乐园基地',
//            'wx_map'=>'/sah/sadas',
//        ];
//        writeJson($data);die();

        $setting = readJson();
        return view('admin.setting',compact('setting'));
    }

    public function do_setting( Request $request ){
        $data = [
            'web_name'=>$request->get('web_name'),
            'fix_phone'=>$request->get('fix_phone'),
            'contacts'=>$request->get('contacts'),
            'qq'=>$request->get('qq'),
            'bases'=>$request->get('bases'),
            'wx_map'=>getUrl($request,'wx_map'),
        ];
        writeJson($data);
        return back()->with('errors',"修改成功");
    }


}
