<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<!-- saved from url=(0024)http://www.clearedu.net/ -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>{{ session('setting')['web_name']  }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <!-- 适应手机 -->
    <meta name="viewport" content="width=1160px;">
    <link href="css/base.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.source.js"></script>

    <!--[if lt IE 9]><!-->
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <!--[endif]-->
    <!-- 先后 -->

</head>
<body>
<!-- header -->
<div class="header">
    <div class="w1160 clearfix">
        <span class="bk30">&nbsp;</span>
        <a href="/" class="logo"><img src="images/logo.png"></a>
    </div>
</div>
<!-- nav -->
<div class="nav_box">
    <div class="w1160 clearfix">
        <ul id="nav" class="nav clearfix">
            <li class="nLi on">
                <h3><a href="/">网站首页</a></h3>
            </li>
            <li class="nLi">
                <h3><a href="/about_us">关于我们</a></h3>
                <ul class="sub">
                    <li><a href="/about_us">神鹰简介</a></li>
                    <li><a href="/team">教练团队</a></li>
                    <li><a href="/honor">荣誉资质</a></li>
                </ul>
            </li>
            <li class="nLi">
                <h3><a href="/enterprise">拓展培训</a></h3>
                <ul class="sub">
                    <li><a href="/enterprise">企业拓展</a></li>
                    <li><a href="/parenting">亲子拓展</a></li>
                </ul>
            </li>
            <li class="nLi">
                <h3><a href="/cs">真人CS</a></h3>
            </li>
            <li class="nLi">
                <h3><a href="/camp">夏令营</a></h3>
            </li>
            <li class="nLi">
                <h3><a href="/training">军训</a></h3>
            </li>
            <li class="nLi">
                <h3><a href="/base_xisan">基地展示</a></h3>
                <ul class="sub">
                    <li><a href="/base_xisan">西山基地</a></li>
                    <li><a href="/base_qingshan">搬罾青山湖基地</a></li>
                    <li><a href="/base_guoleyuan">搬罾果乐园基地</a></li>
                </ul>
            </li>
            <li class="nLi">
                <h3><a href="/case">合作案例</a></h3>
            </li>
            <li class="nLi">
                <h3><a href="/plan">活动方案</a></h3>
            </li>
            <li class="nLi">
                <h3><a href="/contact">联系我们</a></h3>
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

@yield('content')
<div class="contact_out">
    <div class="w1160 clearfix">
        <div class="top clearfix">
            <div class="ewm fr">
                <img src="{{ session('setting')['wx_map']  }}">
                <p>南充神鹰户外</p>
            </div>
            <div class="txt fl">
                <img src="images/ho_tit_6.png">
                <span class="bk20">&nbsp;</span>
                <dl class="clearfix">
                    <dt><span class="col_1">&nbsp;</span>座机：{{ session('setting')['fix_phone']  }}</dt>
                    <dd><span class="col_3">&nbsp;</span>手机：{{ session('setting')['contacts']  }}</dd>
                </dl>
                <dl class="clearfix">
                    <dt><span class="col_2">&nbsp;</span>QQ：{{ session('setting')['qq']  }}</dt>
                    <dd><span class="col_4">&nbsp;</span>基地：{{ session('setting')['bases']  }}</dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="footer">
        CopyRight © 2017   南充神鹰户外军事拓展连锁&nbsp;&nbsp;&nbsp;&nbsp;All Rights Reserved.&nbsp;&nbsp;&nbsp;&nbsp;蜀ICP备8888888号蜀ICP备12345678号&nbsp;&nbsp;&nbsp;&nbsp;技术支持：<a href="">诺航科技</a>
    </div>
</div>
<!-- 侧边 -->
<div class="float_onlie">
    <a class="on_1" href="tencent://message/?uin={$qq[1]}&amp;Menu=yes">&nbsp;</a>
    <a class="on_2 ph" href=""><em><img src="images/phone.jpg"></em></a>
    <a class="on_3 add" href=""><em><img src="images/address.jpg"></em></a>
    <a class="on_4 ewm" href=""><em><img src="{{ session('setting')['wx_map']  }}"></em></a>
    <a class="on_5" href="" onclick="javascript:scroll(0,0)">&nbsp;</a>
</div>
<div class="float_erwm">
    <img src="images/cbar_erwm.jpg  ">
</div>
<script>RememberScroll.init();</script>
<script>
    if (document.location.search.match(/type=embed/gi)) {
        window.parent.postMessage('resize', "*");
    }
</script>
</body>
</html>