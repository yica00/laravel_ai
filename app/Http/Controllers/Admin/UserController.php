<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Crm\UserRequest;
use App\Models\Admin\Area;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * 列表
     */
    public function index(){

        $ids = Area::distinct('id')->count();
        return $ids;
//        for($i=0;$i<60000;$i++){
//            $rel = Area::find([$i]);
//            if(count($rel)>1){
//                $arrx= [
//                    'id'=>$rel[0]['id'],
//                    'name'=>$rel[0]['name'],
//                    'pid'=>$rel[0]['pid'],
//                ];
//                Area::destroy([$i]);
//                Area::create($arrx);
//            }
//        }
//        for( $i=1;$i<32;$i++ ){
            $this->getArea(4744);
//        }
        return  111;
//        $rel = $this->getArea();
//        dd(  $rel );
//        return $rel->getAreaListCallback;
    }

    private function getArea($pid=0){
        $arr = [];
        $url = "https://d.jd.com/area/get?callback=getAreaListCallback&fid=".$pid;
        $rel = $this->getCont($url);
        $arr =  json_decode(substr($rel,20,-1),true) ;
        is_array($arr)?$arr:$arr = [];
        foreach ( $arr as $value ){
            if( isset($value['id']) ){
                $arrx= [
                    'id'=>$value['id'],
                    'name'=>$value['name'],
                    'pid'=>$pid,
                ];
                Area::create($arrx);
                $son = $this->getArea($value['id']);
//                if($son){
//                    $arrx['son'] = $son;
//                }
////                dd($arrx);
//                $arr[] = $arrx;
            }
        }

//        for( $i=0;$i<count($arr);$i++ ){
//
//            if( isset($arr[$i]['id']) ){
//                $arrx= [
//                    'id'=>$arr[$i]['id'],
//                    'name'=>$arr[$i]['name'],
//                    'pid'=>$pid,
//                ];
////                dd($arr);
////                if ($pid=41071 ) break;
//                $son = $this->getArea($arr[$i]['id']);
//                if($son){
//                    $arrx['son'] = $son;
////                    dd($arrx);
//                }
//                $arr[] = $arrx;
//            }
//        }


        return $arr;
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

    }

    /**
     * 新增
     */
    public function store(){

    }

    /**
     * 编辑页面
     */
    public function edit($id){

    }

    /**
     * 保存编辑
     */
    public function update($id){

    }

    /**
     * 删除数据
     */
    public function destroy($id){

    }

    public function getCont($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ;
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ;
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        $r = curl_exec($ch);
        curl_close($ch);
        return $r;
    }
}
