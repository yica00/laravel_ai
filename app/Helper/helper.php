<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/6/22
 * Time: 15:31
 */

if (!function_exists('getIds')){
    function getIds( $data ){
        $arr = [];
        for( $i=0;$i<count($data);$i++ ){
            $arr[] = $data[$i]->jd_account_id;
        }
        return $arr;
    }
}

if (!function_exists('getRandom')){
    function getRandom( $data){
        $id = rand(0,count($data)-1);
        return $data[$id];
    }
}

if (!function_exists('writeJson')){
    function writeJson( $data){
        $json_string = json_encode($data);
        file_put_contents(__DIR__.'/data.json', $json_string);
    }
}

if (!function_exists('readJson')){
    function readJson(){
        $json_string = file_get_contents(__DIR__.'/data.json');
        $data = json_decode($json_string, true);
        return $data;
    }
}

function getUrl($request,$img){
    $rel = $request->file($img);
    if(!$rel) return null;
    $name = $rel->getClientOriginalExtension();
    $name = time().rand(100,999).".".$name;
    $rel->move('images',$name);
    return 'images/'.$name;
}


function writeJson2( $data){
    $json_string = json_encode($data);
    file_put_contents(__DIR__.'/data2.json', $json_string);
}

function readJson2(){
    $json_string = file_get_contents(__DIR__.'/data2.json');
    $data = json_decode($json_string, true);
    return $data;
}
