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
    <meta name="viewport" content="width=1280px,">
    <link rel="stylesheet" href="/css/swiper.min.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <!-- <link rel="stylesheet" href="/css/syheadstyle.css"> -->
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
    <div class="w1280 clearfix">
        <!-- nav -->
        <div class="nav_box fr">
            <ul id="nav" class="nav clearfix">
                @foreach( session('header_nav') as $ks=>$navs )
                    @if( $ks > 0 && $ks<6 )
                        <li class="nLi">
                            <h3><a href="{{$navs->link}}">{{$navs->title}}</a></h3>
                            @if( $navs->articles )
                                <div class="sub">
                                    @if( count($navs->articles) > 0 )
                                        <ul class="list list_1 clearfix">
                                            @foreach( $navs->articles as $k=>$arti )
                                                <li  class="li_{{$k+1}}">
                                                    <a href="@if( $arti->link ){{$arti->link}}@else{{$navs->link}}/category/{{$arti->id}}@endif"><span>&nbsp;</span>{{$arti->title}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            @endif
                        </li>
                    @endif
                @endforeach
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
        <a href="/home" class="logo fl">&nbsp;</a>
    </div>
</div>
<span class="bk80">&nbsp;</span>


@yield('content')

<!-- footer -->
<div class="footer">
    <div class="w1280 clearfix">
        <ul class="list  clearfix">
            @foreach( session('header_nav1') as $ks=>$navs )
                <li><a href="/item/category/{{$navs->id}}" class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="{{ $k*0.2 }}s" style="visibility: visible; animation-duration: 1s; animation-delay: {{ $k*0.2 }}s; animation-name: slideInLeft;"><img src="{{$navs->comtent[0][2]}}">{{$navs->title}}</a></li>
            @endforeach
        </ul>
        <span class="bk50">&nbsp;</span>
        <div class="ewm wow bounceInDown" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInDown;">
            <img src="{{ session('setting')['wx_map']  }}">
            <p>扫描二维码关注我们</p>
        </div>
        <span class="bk20">&nbsp;</span>
        <h2 class="call"><span>&nbsp;</span>{{ session('setting')['fix_phone']  }}</h2>
        <span class="bk10">&nbsp;</span>
        <div class="bot">
            <p>来院地址：{{ session('setting')['bases']  }}</p>
            <p>版权所有 © 依美医疗美容机构 Copyright Yimei All Rights Reserved  技术支持 ：<a href="http://www.scnuohang.com/" target="_blank">诺航科技</a></p>
        </div>
    </div>
</div>
<!-- float_onlie -->
<div class="float_onlie">
    <a class="on_1" href="tencent://message/?uin={{ session('setting')['qq']  }}&amp;Menu=yes">&nbsp;</a>
    <a class="on_2 ph" href=""><em>电话：{{ session('setting')['fix_phone']  }}<br>手机：{{ session('setting')['phone']  }}</em></a>
    <a class="on_3 add" href=""><em>{{ session('setting')['bases']  }}</em></a>
    <a class="on_4 ewm" href=""><em><img src="{{ session('setting')['wx_map']  }}"></em></a>
    <a class="on_5" href="" onclick="javascript:scroll(0,0)">&nbsp;</a>
</div>
<div class="float_huod">
    <a class="" href="/news"><img src="/images/hdzt_bn.jpg"></a>
</div>
<script src="/js/wow.min.js"></script>
<script src="/js/swiper-3.3.1.jquery.min.js"></script>
<script src="/js/swiper.animate1.0.2.min.js"></script>
<script src="/js/global.js"></script>
</body>
</html>