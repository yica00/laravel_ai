<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<!-- saved from url=(0024)http://www.clearedu.net/ -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>{{ session('setting')['web_name']  }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="{{ session('setting')['keywords']  }}">
    <meta name="description" content="{{ session('setting')['description']  }}">
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
<!-- header -->
<div class="header">
    <div class="w1160 clearfix">
        <span class="call fr">&nbsp;</span>
        <a href="/" class="logo fl">&nbsp;</a>
    </div>
</div>
<!-- nav -->
<div class="nav_box">
    <div class="w1160 clearfix">
        <ul id="nav" class="nav clearfix">
            <li class="nLi  @if( $nav == 1 ) on @endif">
                <h3><a href="/">网站首页</a></h3>
            </li>
            <li class="nLi @if( $nav == 2 ) on @endif">
                <h3><a href="/about">关于嘉彩</a></h3>
                <ul class="sub">
                    @foreach( session('header_nav')[2]->sons as $leader1 )
                        <li><a href="{{ $leader1->link  }}"> {{  mb_substr($leader1->title,2,20,'utf8' ) }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="nLi @if( $nav == 3 ) on @endif">
                <h3><a href="/news">新闻中心</a></h3>
                <ul class="sub">
                    @foreach( session('header_nav')[3]->sons as $leader1 )
                        <li><a href="{{ $leader1->link  }}"> {{  mb_substr($leader1->title,2,20,'utf8' ) }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="nLi @if( $nav == 4 ) on @endif">
                <h3><a href="/product">产品中心</a></h3>
                <ul class="sub">
                    @foreach( session('header_nav')[4]->sons as $leader1 )
                        <li><a href="/product/category/{{ $leader1->id  }}"> {{  mb_substr($leader1->title,2,20,'utf8' ) }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="nLi @if( $nav == 5 ) on @endif">
                <h3><a href="/case">成功案例</a></h3>
            </li>
            <li class="nLi @if( $nav == 6 ) on @endif">
                <h3><a href="/equipment">专业设备</a></h3>
            </li>
            <li class="nLi @if( $nav == 7 ) on @endif">
                <h3><a href="/service">服务中心</a></h3>
                <ul class="sub">
                    @foreach( session('header_nav')[7]->sons as $leader1 )
                        <li><a href="{{ $leader1->link  }}"> {{  mb_substr($leader1->title,2,20,'utf8' ) }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="nLi @if( $nav == 8 ) on @endif">
                <h3><a href="/contact">联系我们</a></h3>
                <ul class="sub">
                    @foreach( session('header_nav')[8]->sons as $leader1 )
                        <li><a href="{{ $leader1->link  }}"> {{  mb_substr($leader1->title,2,20,'utf8' ) }}</a></li>
                    @endforeach
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

<div class="footer">
    <span class="bk30">&nbsp;</span>
    <div class="w1160 clearfix">
        <div class="ewm fr">
            <img src="{{ session('setting')['wx_map']  }}">
            <p>扫一扫，关注我们</p>
        </div>
        <div class="txt fl">
            <p class=" clearfix"><img src="/images/fot_3.png">座机：{{ session('setting')['fix_phone']  }}</p>
            <p class=" clearfix"><img src="/images/fot_2.png">电话：{{ session('setting')['phone']  }}</p>
            <p class=" clearfix"><img src="/images/fot_1.png">QQ：{{ session('setting')['qq'] }}</p>
            <p class=" clearfix"><img src="/images/fot_4.png">公司地址：{{ session('setting')['bases']  }}</p>
        </div>
    </div>
    <span class="bk30">&nbsp;</span>
    <div class="bot">
        <div class="w1160 clearfix">
            <div class="link clearfix">
                <span class="fl mR10">友情链接 </span>
                <div class="fl">
                    @foreach( session('links') as $link )
                    <a href="{{  $link->link }}" target="_blank">{{ $link->title }}</a>
                    @endforeach
                </div>
            </div>
            <div class="copy">CopyRight ◎ 2017 {{ session('setting')['web_name']  }} All Right Reserved&nbsp;&nbsp;&nbsp;&nbsp;蜀ICP备12345678号&nbsp;&nbsp;&nbsp;&nbsp;技术支持：<a href="http://www.scnuohang.com" target="_blank">诺航科技</a></div>
        </div>
    </div>
</div>
<!-- 侧边 -->
<div class="float_onlie">
    <a class="on_1" href="tencent://message/?uin={{ session('setting')['qq']  }}&amp;Menu=yes">&nbsp;</a>
    <a class="on_2 ph" href=""><em><img src="/images/phone.jpg"></em></a>
    <a class="on_3 add" href=""><em><img src="/images/address.jpg"></em></a>
    <a class="on_4 ewm" href=""><em><img src="{{ session('setting')['wx_map']  }}"></em></a>
    <a class="on_5" href="" onclick="javascript:scroll(0,0)">&nbsp;</a>
</div>
</body>
</html>