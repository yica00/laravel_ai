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
<!-- header -->
<div class="header inheader">
    <div class="w1160 clearfix">
        <!-- nav -->
        <div class="nav_box fr">
            <ul id="nav" class="nav clearfix">
                @foreach( session('header_nav') as $navs )
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
<div class="footer">
    <div class="w1160 clearfix">
        <div class="clearfix">
            <div class="call fr">
                <h2>有任何建议或意见请联系我们 </h2>
                <p>{{ session('setting')['fix_phone']  }}</p>
            </div>
            <img src="/images/price_case.gif" class="fl">
        </div>
        <span class="bk20">&nbsp;</span>
        <div class="clearfix">
            <div class="ewm fr">
                <img src="{{ session('setting')['wx_map']  }}">
            </div>
            <div class="txt fl">
                <p>座机：{{ session('setting')['fix_phone']  }}</p>
                <P>电话：{{ session('setting')['phone']  }}</p>
                <P>Q Q：{{ session('setting')['qq']  }}</p>
                <P>地址：{{ session('setting')['bases']  }}</p>
            </div>
        </div>
        <span class="bk40">&nbsp;</span>
    </div>
    <div class="bot">
        <div class="w1160 clearfix">
            copyright 2017© 交换空间装饰  {{ session('setting')['icp']  }}  <span>技术支持：<a href="http://www.scnuohang.com/" target="_blank">诺航科技</a></span>
        </div>
    </div>
</div>
<!-- float -->
<div class="float_onlie">
    <a class="on_1" href="tencent://message/?uin={{ session('setting')['qq']  }}&amp;Menu=yes">&nbsp;</a>
    <a class="on_2 ph" href=""><em>电话：{{ session('setting')['fix_phone']  }}<br>手机：{{ session('setting')['phone']  }}</em></a>
    <a class="on_3 add" href=""><em>{{ session('setting')['bases']  }}</em></a>
    <a class="on_4 ewm" href=""><em><img src="{{ session('setting')['wx_map']  }}"></em></a>
    <a class="on_5" href="" onclick="javascript:scroll(0,0)">&nbsp;</a>
</div>
</body>
</html>