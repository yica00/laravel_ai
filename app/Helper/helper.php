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
            $arr[] = $data[$i]->id;
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

if (!function_exists('getSubs')){
    function getSubs($menus,$pid=0){
        $subs=array();
        foreach($menus as $item){
            if($item['pid']==$pid){
                $item->sons = getSubs($menus,$item['id']);
                $subs[]=$item;
            }
        }
        return $subs;
    }
}

function getArraySubs($menus,$pid=0){
    $subs=array();
    foreach($menus as $item){
        if($item['pid']==$pid){
            $item['sons'] = getArraySubs($menus,$item['id']);
            $subs[]=$item;
        }
    }
    return $subs;
}

function getUrl($request,$img){
    $rel = $request->file($img);
    if(!$rel) return null;
    $name = $rel->getClientOriginalExtension();
    $name = strtolower($name);
    $arr = ['png','gif','jpeg','jpg'];
    if( !in_array($name,$arr) ){
        return null;
    }
    $name = time().rand(100,999).".".$name;
    $rel->move('images',$name);
    return '/images/'.$name;
}

function getMultiUrl($request,$img){
    $files = $request->file($img);
    if(!$files) return null;
    if($request->hasFile($img))
    {
        $arr = [];
        foreach($files as $file) {
            $name = $file->getClientOriginalExtension();
            $name = strtolower($name);
            $imgs = ['png','gif','jpeg','jpg'];
            if( !in_array($name,$imgs) ){
                return null;
            }
            $name = time().rand(1000,9999).".".$name;
            $file->move('images',$name);
            $arr[] = '/images/'.$name ;
        }
    }
    $imgstr = implode(',',$arr);
    return $imgstr;
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

function getPage($teams,$num){
    $page = \Illuminate\Support\Facades\Input::get('page')?\Illuminate\Support\Facades\Input::get('page'):1;
    $total =$teams->total();
    $total_page = ceil( $total/$num);
    if($page <= 1){
        $pre_page = null;
    }else{
        $pre_page = $page - 1;
    }
    if($page >= $total_page ){
        $next_page = null;
    }else{
        $next_page = $page + 1;
    }
    $page = [
        'page'=>$page,
        'pre_page' => $pre_page,
        'next_page' => $next_page,
        'total_page' => $total_page,
    ];
    return $page;
}

function get_up_down_page($id,$pid){
    $pre_page = \App\Models\Admin\Article::where('id','<',$id)->where('pid',$pid)->orderBy('id','desc')->first();
    if($pre_page){
        $pre_id = $pre_page->id;
    }else{
        $pre_id = null;
    }

    $next_page = \App\Models\Admin\Article::where('id','>',$id)->where('pid',$pid)->orderBy('id','asc')->first();
    if($next_page){
        $next_id = $next_page->id;
    }else{
        $next_id = null;
    }
    return [$id,$pre_id,$next_id];
}

function get_message_page($id){
    $pre_page = \App\Models\Admin\Message::where('id','>',$id)->first();
    if($pre_page){
        $pre_id = $pre_page->id;
    }else{
        $pre_id = null;
    }
    $next_page = \App\Models\Admin\Message::where('id','<',$id)->first();
    if($next_page){
        $next_id = $next_page->id;
    }else{
        $next_id = null;
    }
    return [$id,$pre_id,$next_id];
}

function get_article_imgs($str,$num){
    $page = \Illuminate\Support\Facades\Input::get('page')?\Illuminate\Support\Facades\Input::get('page'):1;
    $pattern = "/(?:\/Uploads).*?(?:\")/";
    preg_match_all($pattern,$str,$matches);
    if(!$matches[0]){
        return [];
    }
    $pages = getImgsPage(count($matches[0]),$num);
    $start = ( $page - 1 ) * $num;
    $max = $start + $num;
    $arr = [];
    for ( $i=$start;$i<$max;$i++ ){
        if( isset( $matches[0][$i] ) ){
            $arr[] = mb_substr($matches[0][$i],0,-1,'utf8');
        }
    }
    return [$arr,$pages];
}

function getImgsPage($total,$num){
    $page = \Illuminate\Support\Facades\Input::get('page')?\Illuminate\Support\Facades\Input::get('page'):1;
    $total_page = ceil( $total/$num);
    if($page <= 1){
        $pre_page = null;
    }else{
        $pre_page = $page - 1;
    }
    if($page >= $total_page ){
        $next_page = null;
    }else{
        $next_page = $page + 1;
    }
    $page = [
        'page'=>$page,
        'pre_page' => $pre_page,
        'next_page' => $next_page,
        'total_page' => $total_page,
    ];
    return $page;
}

//提取中文字符
function getChanese($str){
    $code = "/[\x7f-\xff]+/";
    preg_match_all($code,$str, $arr);
    return $arr[0][0];
}

//验证码
function getCaptcha($num,$w=100,$h=32) {
    $image = imagecreatetruecolor($w, $h);    //1>设置验证码图片大小的函数
    //5>设置验证码颜色 imagecolorallocate(int im, int red, int green, int blue);
    $bgcolor = imagecolorallocate($image,255,255,255); //#ffffff
    //6>区域填充 int imagefill(int im, int x, int y, int col) (x,y) 所在的区域着色,col 表示欲涂上的颜色
    imagefill($image, 0, 0, $bgcolor);
    //10>设置变量
    $captcha_code = "";
//7>生成随机的字母和数字
    for($i=0;$i<$num;$i++){
        //设置字体大小
        $fontsize = 6;
        //设置字体颜色，随机颜色
        $fontcolor = imagecolorallocate($image, rand(0,120),rand(0,120), rand(0,120));      //0-120深颜色
        //设置需要随机取的值,去掉容易出错的值如0和o
        $data ='abcdefghigkmnopqrstuvwxyz3456789';
        //取出值，字符串截取方法  strlen获取字符串长度
        $fontcontent = substr($data, rand(0,strlen($data)-1),1);
        //10>.=连续定义变量
        $captcha_code .= $fontcontent;
        //设置坐标
        $x = ($i*100/$num)+rand(5,10);
        $y = rand(1,15);
        imagestring($image,$fontsize,$x,$y,$fontcontent,$fontcolor);
    }
    //10>存到session
    \Illuminate\Support\Facades\Session::flash('captcha', $captcha_code);
    //8>增加干扰元素，设置雪花点
    for($i=0;$i<200;$i++){
        //设置点的颜色，50-200颜色比数字浅，不干扰阅读
        $pointcolor = imagecolorallocate($image,rand(50,200), rand(50,200), rand(50,200));
        //imagesetpixel — 画一个单一像素
        imagesetpixel($image, rand(1,99), rand(1,29), $pointcolor);
    }
    //9>增加干扰元素，设置横线
    for($i=0;$i<4;$i++){
        //设置线的颜色
        $linecolor = imagecolorallocate($image,rand(80,220), rand(80,220),rand(80,220));
        //设置线，两点一线
        imageline($image,rand(1,99), rand(1,29),rand(1,99), rand(1,29),$linecolor);
    }

    //2>设置头部，image/png
    header("Cache-Control: no-cache, must-revalidate");
    header('Content-Type: image/png');
    //3>imagepng() 建立png图形函数
    imagepng($image);
    //4>imagedestroy() 结束图形函数 销毁$image
    imagedestroy($image);

    ob_end_flush();
}

//判断验证码
function verifyCaptcha(){
    $orginCaptcha = session('captcha');
    \Illuminate\Support\Facades\Session::forget('captcha');
    $inputCaptcha = \Illuminate\Support\Facades\Input::get('captcha_code');
    if( $orginCaptcha == $inputCaptcha ){
        return 1;
    }
    return 0;
}