$(window).resize(function(){htmlSize();});
htmlSize();

function htmlSize(){
    var cw=$(window).width();
    cw=cw/16;
    //���㱶������ֵ�ɱ䡣
    if(cw<20){cw=20} //��С����
    if(cw>40){cw=40} //�������
    $('html').css("font-size",cw+'px');
}/**
 * Created by Administrator on 2016/1/27.
 */
