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
    <meta name="viewport" content="width=1280px;">
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
<div class="header inheader">
    <div class="w1280 clearfix">
        <!-- nav -->
        <div class="nav_box fr">
            <ul id="nav" class="nav clearfix">
                @foreach( session('header_nav') as $k=>$navs )
                    @if( $k==1 )
                        @foreach( $navs->articles as $arti )
                            <li class="nLi">
                                <h3><a href="/item/{{$arti->id}}">{{$arti->title}}</a></h3>
                            </li>
                        @endforeach
                    @elseif( $k<7 )
                        <li class="nLi @if( session('urls') == $navs->link )on @endif">
                            <h3><a href="{{$navs->link}}">{{$navs->title}}<span>{{$navs->introduce}}</span></a></h3>
                            @if( count($navs->articles)>0 )
                                <ul class="sub">
                                    @foreach( $navs->articles as $arti )
                                        <li>
                                            <a href="@if( $arti->link ){{$arti->link}}@else{{$navs->link}}/category/{{$arti->id}}@endif">{{$arti->title}}</a>
                                        </li>
                                    @endforeach
                                </ul>
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
        <a href="/" class="logo fl">&nbsp;</a>
    </div>
</div>
<span class="bk80">&nbsp;</span>


@yield('content')

<!-- footer -->
<div class="item_out">
    <div class="w1280 clearfix">
        <ul class="list clearfix">
            @foreach( session('header_nav') as $k=>$navs )
                @if( $k==1 )
                    @foreach( $navs->articles as $arti )
                        <li>
                            <a href="/item/{{$arti->id}}">
                                <div class="btn_all btn_1">&nbsp;</div>
                                <h2>{{$arti->title}}</h2>
                                <p>{{$arti->introduce}}</p>
                            </a>
                        </li>
                    @endforeach
                @endif
            @endforeach
        </ul>
    </div>
</div>
<span class="bk60">&nbsp;</span>
<!-- goenrol -->
<div class="goenrol">
    <div class="w1280 clearfix">
        <h2>Welcome to our school</h2>
        <p>您所了解的美丽俏佳人化妆培训学校远远超越一所普通的形象设计学校！</p>
        <a href="/contact">点击立即报名</a>
    </div>
</div>
<div class="footer">
    <span class="bk30">&nbsp;</span>
    <div class="w1280 clearfix">
        <p class="fot_nav">
            @foreach( session('header_nav') as $k=>$navs )
                @if( $k==1 )
                    @foreach( $navs->articles as $arti )
                        <a href="/item/{{$arti->id}}">{{$arti->title}}</a>
                    @endforeach
                @endif
            @endforeach
        </p>
        <span class="bk30">&nbsp;</span>
        <div class="ewm">
            <img src="{{ session('setting')['wx_map']  }}">
            <p>扫描二维码关注我们</p>
        </div>
        <span class="bk20">&nbsp;</span>
        <div class="txt">
            <p>招生服务咨询热线 / <span>{{ session('setting')['fix_phone']  }}</span></p>
            <p>总校地址 / <span>{{ session('setting')['bases']  }}</span></p>
            <p>QQ在线咨询 / <span>{{ session('setting')['qq']  }}</span></p>
        </div>
        <span class="bk30">&nbsp;</span>
    </div>
    <div class="bot">
        <div class="w1280 clearfix">版权所有 © 四川美丽俏佳人企业管理有限公司 Copyright Qiaojiaren All Rights Reserved <span>技术支持 ：<a href="http://www.scnuohang.com/" target="_blank">诺航科技</a></span>
        </div>
    </div>
</div>
<!-- float -->
<div class="float_onlie">
    <a class="on_1" href="/contact">&nbsp;</a>
    <a class="on_2 ph" href=""><em>电话：{{ session('setting')['fix_phone']  }}</em></a>
    <a class="on_3 add" href=""><em>{{ session('setting')['bases']  }}</em></a>
    <a class="on_4 ewm" href=""><em><img src="{{ session('setting')['wx_map']  }}"></em></a>
    <a class="on_5" href="" onclick="javascript:scroll(0,0)">&nbsp;</a>
</div>
</body>
</html>