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
  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <!-- <link rel="stylesheet" href="css/syheadstyle.css"> -->
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
<div class="header_banner">
  <!-- banner -->
  <div id="slideBox" class="slideBox">
    <div class="hd"><ul>
       @foreach( $sliders as $slider )
        <li>&nbsp;</li>
       @endforeach
      </ul></div>
    <div class="bd">
      <ul>
        @foreach( $sliders as $slider )
        <li><a href="" style="background:url({{$slider->thumbnail}}) center bottom no-repeat;">&nbsp;</a></li>
        @endforeach
      </ul>
    </div>
  </div>
  <script type="text/javascript">jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});</script>
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
  <div class="scroll_xx" id="scroll_xx"><img src="images/btn_xx.png"></div>
  <div class="item_nav">
    <ul class="list clearfix">
      @foreach( session('header_nav') as $ks=>$navs )
        @if( $ks == 2 )
          @foreach( $navs->articles as $k=>$arti )
        <li><a href="/item/category/{{$arti->id}}">{{$arti->title}}</a></li>
          @endforeach
        @endif
      @endforeach
    </ul>
  </div>
</div>
<div class="warp_box">
  <div class="warp_bot">
    <div class="w1280 clearfix">
      <!-- start -->
      <!-- 1 -->
      <div class="team_out">
        <span class="bk60">&nbsp;</span>
        <div class="ho_tit_all">
          <a href="/team">
            <h2>专/家/团/队</h2>
            <p>国内知名专家助阵<span>依美</span>，专业技术传递<span>恒久美</span></p>
          </a>
        </div>
        <span class="bk60">&nbsp;</span>
        <div class="picScroll-left" id="picScroll-left-1">
          <div class="hd">
            <a class="next"></a>
            <a class="prev"></a>
          </div>
          <div class="bd">
            <ul class="picList teacher_list_o">
              <li>
                <div class="ho_team_all clearfix">
                  <img src="{{$teams->thumbnail}}" class="pic wow fadeInLeft" data-wow-duration="1s" data-wow-offset="200" style="visibility: visible; animation-duration: 1s; animation-name: fadeInLeft;">
                  <div class="txt_1">
                    <div class="dis wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="200" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInDown;">
                      {{$teams->introduce}}
                    </div>
                    <p class="btns"><a href="/order" class="wow shake TalkUrl animated" data-wow-duration="8s" data-wow-iteration="infinite" style="visibility: visible; animation-duration: 8s; animation-iteration-count: infinite; animation-name: shake;">&nbsp;</a></p>
                  </div>
                  <div class="txt_2 wow bounceInUp DbImg2Show Abs" data-wow-duration="1s" data-wow-offset="300" style="visibility: visible; animation-duration: 0.5s; animation-name: bounceInUp;">
                    <h2>{{$teams->title}}</h2>
                    <div class="dis">
                      {!! $teams->comtent !!}
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <script type="text/javascript">
        jQuery("#picScroll-left-1").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1,trigger:"click"});
        </script>
      </div>
      <!-- 2 -->
      <div class="item_out">
        <span class="bk60">&nbsp;</span>
        <div class="ho_tit_all">
          <a href="/item">
            <h2>经/典/项/目</h2>
            <p>恒久美美雕<span>五大经典项目</span>，让你的<span>魅力永恒</span></p>
          </a>
        </div>
        <span class="bk60">&nbsp;</span>
        <div class="picScroll-left" id="picScroll-left-2">
          <div class="hd">
            <a class="next"></a>
            <a class="prev"></a>
          </div>
          <div class="bd">
            <ul class="picList item_olist">
              @foreach( session('header_nav1') as $ks=>$navs )
              <li class="swatch-container">
                <a href="/item/category/{{$navs->id}}" class="inner wow slideInDown" data-wow-duration="{{ 1+0.2*$k }}s" style="visibility: visible; animation-duration: {{ 1+0.2*$k }}s; animation-name: slideInDown;">
                  <img src="{{$navs->comtent[0][0]}}" class="front">
                  <img src="{{$navs->comtent[0][1]}}" class="back">
                </a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
        <script type="text/javascript">
        jQuery("#picScroll-left-2").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click"});
        </script>
      </div>
      <!-- 3 -->
      <div class="news_out">
        <span class="bk60">&nbsp;</span>
        <div class="ho_tit_all">
          <a href="/news">
            <h2>新/闻/咨/讯</h2>
            <p>行中圈内动态，依美<span>榜上有名</span></p>
          </a>
        </div>
        <span class="bk30">&nbsp;</span>
        <span class="x_line">&nbsp;</span>
        <span class="bk30">&nbsp;</span>
        <div class="picScroll-news" id="picScroll-news-1">
          <div class="bd">
            <ul class="picList">
              @foreach( $newss as $news )
              <li>
                <a href="/news/{{$news->id}}">
                  <h2>{{$news->title}}</h2>
                  <p>{{$news->introduce}}</p>
                </a>
              </li>
              @endforeach
            </ul>
          </div>
          <div class="hd">
            <ul>
              @foreach( $newss as $news )
              <li>&nbsp;</li>
              @endforeach
            </ul>
          </div>
        </div>
        <script type="text/javascript">
        jQuery("#picScroll-news-1").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1,trigger:"click"});
        </script>
      </div>
      <!-- end -->
      <span class="bk80">&nbsp;</span>
      <span class="bk100">&nbsp;</span>
    </div>
  </div>
</div>
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
    <a class="" href="/news" style="z-index: 999999" ><img src="/images/hdzt_bn.jpg"></a>
</div>
<script src="/js/wow.min.js"></script>
<script src="/js/swiper-3.3.1.jquery.min.js"></script>
<script src="/js/swiper.animate1.0.2.min.js"></script>
<script src="/js/global.js"></script>
</body>
</html>