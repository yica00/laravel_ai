<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<!-- saved from url=(0024)http://www.clearedu.net/ -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>{{ session('setting')['web_name']  }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="{{ session('setting')['web_name']  }}">
    <meta name="description" content="{{ session('setting')['web_name']  }}">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <!-- 适应手机 -->
    <meta name="viewport" content="width=1160px;">
    <link href="css/base.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.source.js"></script>
</head>
<body>
<!-- header -->
<div class="header">
    <div class="w1160 clearfix">
        <span class="call fr">&nbsp;</span>
        <a class="logo fl" href="/">&nbsp;</a>
    </div>
</div>
<!-- nav -->
<div class="nav_box">
    <div class="w1160 clearfix">
        <ul id="nav" class="nav clearfix">
            <li class="nLi
            @if( $sty == "index" )
                    on
            @endif
                    ">
                <h3><a href="/">网站首页</a></h3>
            </li>

            <li class="nLi
            @if( $sty == "about" )
                    on
            @endif">
                <h3><a href="about">走进星维</a></h3>
                <ul class="sub">
                    <li><a href="about">星维简介</a></li>
                    <li><a href="about">企业文化</a></li>
                    <li><a href="office">办公环境</a></li>
                    <li><a href="office">优秀团队</a></li>
                    <li><a href="office">荣誉资质</a></li>
                </ul>
            </li>

            <li class="nLi
            @if( $sty == "news" )
                    on
            @endif">
                <h3><a href="news">新闻中心</a></h3>
                <ul class="sub">
                    <li><a href="news">公司新闻</a></li>
                    <li><a href="news">行业资讯</a></li>
                </ul>
            </li>

            <li class="nLi
            @if( $sty == "product" )
                on
            @endif
            ">
                <h3><a href="product">产品中心</a></h3>
                <ul class="sub">
                    <li><a href="product">醚类</a></li>
                    <li><a href="product">苯类</a></li>
                    <li><a href="product">酮类</a></li>
                    <li><a href="product">酯类</a></li>
                    <li><a href="product">醇类</a></li>
                    <li><a href="product">石油烷烃</a></li>
                    <li><a href="product">其他类</a></li>
                </ul>
            </li>

            <li class="nLi
            @if( $sty == "core" )
                    on
            @endif">
                <h3><a href="core">核心技术</a></h3>
                <ul class="sub">
                    <li><a href="core">产品优势</a></li>
                    <li><a href="core_2">产品特点</a></li>
                </ul>
            </li>
            <li class="nLi
            @if( $sty == "service" )
                    on
            @endif">
                <h3><a href="service">营销服务</a></h3>
            </li>
            <li class="nLi
            @if( $sty == "base" )
                    on
            @endif">
                <h3><a href="base">试验基地</a></h3>
                <ul class="sub">
                    <li><a href="base">自贡七星湖葡萄</a></li>
                    <li><a href="base">威远大棚蔬菜</a></li>
                    <li><a href="base">河南大豆</a></li>
                    <li><a href="base">眉山黄丰镇橘子</a></li>
                    <li><a href="base">云南西双版纳香蕉</a></li>
                    <li><a href="base">达州蘑菇</a></li>
                    <li><a href="base">贵州水稻</a></li>
                </ul>
            </li>
            <li class="nLi
            @if( $sty == "contact" )
                    on
            @endif">
                <h3><a href="contact">联系我们</a></h3>
                <ul class="sub">
                    <li><a href="contact">招贤纳士</a></li>
                    <li><a href="way">联系方式</a></li>
                </ul>
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
                <p>扫一扫，关注我们</p>
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
                    <dd><span class="col_4">&nbsp;</span>地址：{{ session('setting')['bases']  }}</dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="footer">
        CopyRight © 2017   {{ session('setting')['web_name']  }}&nbsp;&nbsp;&nbsp;&nbsp;All Rights Reserved.&nbsp;&nbsp;&nbsp;&nbsp;蜀ICP备12345678号&nbsp;&nbsp;&nbsp;&nbsp;技术支持：<a href="http://www.scnuohang.com">诺航科技</a>
    </div>
</div>
<!-- 侧边 -->
<div class="float_onlie">
    <a class="on_1" href="tencent://message/?uin={{ session('setting')['qq']  }}&amp;Menu=yes">&nbsp;</a>
    <a class="on_2 ph" href=""><em><img src="images/phone.jpg"></em></a>
    <a class="on_3 add" href=""><em><img src="images/address.jpg"></em></a>
    <a class="on_4 ewm" href=""><em><img src="{{ session('setting')['wx_map']  }}"></em></a>
    <a class="on_5" href="" onclick="javascript:scroll(0,0)">&nbsp;</a>
</div>
</body>
</html>