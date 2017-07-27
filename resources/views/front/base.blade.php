<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<!-- saved from url=(0024)http://www.clearedu.net/ -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>杨氏鼻炎</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <!-- 适应手机 -->
    <meta name="viewport" content="width=1160px;">
    <link href="/css/base.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/js/jquery.SuperSlide.2.1.1.source.js"></script>

    <!--[if lt IE 9]><!-->
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>
    <!--[endif]-->
    <!-- 先后 -->
</head>
<body>
<div class="header">
    <div class="w1160 hd_line clearfix">
        <div class="w758 fr">
            <div class="top clearfix">
                <span class="call fr">24小时就诊热线<br/><b>0817-4567894</b></span>
                <img src="images/slogn.png" class="slogn fl">
            </div>
            <div class="nav_box">
                <ul id="nav" class="nav clearfix">
                    <li class="nLi">
                        <h3><a href="/">网站首页</a></h3>
                    </li>
                    <li class="nLi">
                        <h3><a href="/about">杨氏鼻炎</a></h3>
                    </li>
                    <li class="nLi">
                        <h3><a href="/treatment">特色治疗</a></h3>
                    </li>
                    <li class="nLi">
                        <h3><a href="/doctor">祖传医师</a></h3>
                    </li>
                    <li class="nLi  on">
                        <h3><a href="/case">成功案例</a></h3>
                    </li>
                    <li class="nLi">
                        <h3><a href="/news">保养须知</a></h3>
                    </li>
                    <li class="nLi">
                        <h3><a href="/contact">联系我们</a></h3>
                        <!--
                        <ul class="sub">
                          <li><a href="contact">联系方式</a></li>
                           <li><a href="leave">在线留言</a></li>
                        </ul>
                        -->
                    </li>
                </ul>
                <script id="jsID" type="text/javascript">
                    jQuery("#nav").slide({
                        type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
                        titCell:".nLi", //鼠标触发对象
                        targetCell:".sub", //titCell里面包含的要显示/消失的对象
                        effect:"slideDown", //targetCell下拉效果
                        delayTime:300 , //效果时间
                        triggerTime:0, //鼠标延迟触发时间（默认150）
                        returnDefault:true //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
                    });
                </script>
            </div>
        </div>
        <a href="index" class="logo fl">&nbsp;</a>
    </div>
</div>
</div>

@yield('content')

<!-- footer -->
<div class="footer">
    <div class="w1160 clearfix">
        <div class="txt">
            <dl class="clearfix">
                <dt><span class="col_1">&nbsp;</span>座机：0817-3869772</dt>
                <dd><span class="col_4">&nbsp;</span>手机：138-9086-5033</dd>
            </dl>
            <dl class="clearfix">
                <dt><span class="col_2">&nbsp;</span>QQ：1521770461</dt>
                <dd><span class="col_4">&nbsp;</span>地址：四川省南充市嘉陵区光彩大市场1区3幢1-3号</dd>
            </dl>
        </div>
    </div>
    <div class="bot">
        CopyRight © 2017   杨氏鼻炎&nbsp;&nbsp;&nbsp;&nbsp;All Rights Reserved.&nbsp;&nbsp;&nbsp;&nbsp;蜀ICP备8888888号&nbsp;&nbsp;&nbsp;&nbsp;技术支持：<a href="http://www.scnuohang.com/" target="_blank">诺航科技</a>
    </div>
</div>
<!-- 侧边 -->
<div class="float_onlie">
    <a class="on_1" href="tencent://message/?uin={$qq[1]}&amp;Menu=yes">&nbsp;</a>
    <a class="on_2 ph" href=""><em>电话：0817-2519567<br/>手机：138-0827-0978</em></a>
    <a class="on_3 add" href=""><em>南充市顺庆区北湖路99号罗曼威森308室</em></a>
    <a class="on_4 ewm" href=""><em><img src="/images/erwm.png"></em></a>
    <a class="on_5" href="" onclick="javascript:scroll(0,0)">&nbsp;</a>
</div>
</body>
</html>