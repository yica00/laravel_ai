$(window).resize(function(){htmlSize();});
htmlSize();

function htmlSize(){
    var cw=$(window).width();
    cw=cw/16;
    //计算倍数，数值可变。
    if(cw<20){cw=20} //最小像素
    if(cw>40){cw=40} //最大像素
    $('html').css("font-size",cw+'px');
}/**
 * Created by Administrator on 2016/1/27.
 */
