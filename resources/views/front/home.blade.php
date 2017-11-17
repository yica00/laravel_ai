<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<!-- saved from url=(0024)http://www.clearedu.net/ -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>依美医疗美容</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="">
  <meta name="description" content="">
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
    <div class="hd"><ul><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li></ul></div>
    <div class="bd">
      <ul>
        <li><a href="" style="background:url(images/bn_1.jpg) center bottom no-repeat;">&nbsp;</a></li>
        <li><a href="" style="background:url(images/bn_2.jpg) center bottom no-repeat;">&nbsp;</a></li>
        <li><a href="" style="background:url(images/bn_3.jpg) center bottom no-repeat;">&nbsp;</a></li>
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
            @if( $ks > 0 )
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
      <a href="home.html" class="logo fl">&nbsp;</a>
    </div>
  </div>
  <div class="scroll_xx" id="scroll_xx"><img src="images/btn_xx.png"></div>
  <div class="item_nav">
    <ul class="list clearfix">
      <li><a href="item.html">高贵飘逸眼</a></li>
      <li><a href="item.html">恒久时尚鼻</a></li>
      <li><a href="item.html">明快U型轮廓</a></li>
      <li><a href="item.html">魅力喜悦肌</a></li>
      <li><a href="item.html">秀美天鹅颈</a></li>
      <li><a href="item.html">笔直迷人背</a></li>
      <li><a href="item.html">丝滑质感肤</a></li>
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
          <a href="team.html">
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
                  <img src="images/team_1.png" class="pic wow fadeInLeft" data-wow-duration="1s" data-wow-offset="200" style="visibility: visible; animation-duration: 1s; animation-name: fadeInLeft;">
                  <div class="txt_1">
                    <div class="dis wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="200" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInDown;">
                      徐海教授医科大学毕业后一直从事临床医学工作，先后在医院的皮肤科与烧伤科担任医师，他从事的医学工作一直与人的形象和美有关。徐海教授是一个完美主义者,在他的临床实践中，他感觉到无论他多么的努力，也很难把一个皮肤破损的病人修饰成心中理想的形象，为此他非常痛苦，最终他毅然下决心放弃了医院的临床工作，走向了他心中的理想，创造完美形象的医疗美容之路。
                    </div>
                    <p class="btns"><a href="order.html" class="wow shake TalkUrl animated" data-wow-duration="8s" data-wow-iteration="infinite" style="visibility: visible; animation-duration: 8s; animation-iteration-count: infinite; animation-name: shake;">&nbsp;</a></p>
                  </div>
                  <div class="txt_2 wow bounceInUp DbImg2Show Abs" data-wow-duration="1s" data-wow-offset="300" style="visibility: visible; animation-duration: 0.5s; animation-name: bounceInUp;">
                    <h2>南充医疗美容医院院长</h2>
                    <div class="dis">
                      <p>中国医疗美容整形协会会员</p>
                      <p>国家认证整形外科副主任</p>
                      <p>香港依美医疗美容集团总裁</p>
                      <p>“恒久美美雕”医疗美容系列项目创始人</p>
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
          <a href="item.html">
            <h2>经/典/项/目</h2>
            <p>恒久美美雕<span>七大经典项目</span>，让你的<span>魅力永恒</span></p>
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
              <li class="swatch-container">
                <a href="item.html" class="inner wow slideInDown" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: slideInDown;">
                  <img src="images/item_img_1.png" class="front">
                  <img src="images/item_img_1h.png" class="back">
                </a>
              </li>
              <li class="swatch-container">
                <a href="item.html" class="inner wow slideInDown" data-wow-duration="1.2s" style="visibility: visible; animation-duration: 1.2s; animation-name: slideInDown;">
                  <img src="images/item_img_2.png" class="front">
                  <img src="images/item_img_2h.png" class="back">
                </a>
              </li>
              <li class="swatch-container">
                <a href="item.html" class="inner wow slideInDown" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: slideInDown;">
                  <img src="images/item_img_3.png" class="front">
                  <img src="images/item_img_3h.png" class="back">
                </a>
              </li>
              <li class="swatch-container">
                <a href="item.html" class="inner wow slideInDown" data-wow-duration="1.6s" style="visibility: visible; animation-duration: 1.6s; animation-name: slideInDown;">
                  <img src="images/item_img_4.png" class="front">
                  <img src="images/item_img_4h.png" class="back">
                </a>
              </li>
              <li class="swatch-container">
                <a href="item.html" class="inner wow slideInDown" data-wow-duration="1.8s" style="visibility: visible; animation-duration: 1.8s; animation-name: slideInDown;">
                  <img src="images/item_img_5.png" class="front">
                  <img src="images/item_img_5h.png" class="back">
                </a>
              </li>
              <li class="swatch-container">
                <a href="item.html" class="inner wow slideInDown" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: slideInDown;">
                  <img src="images/item_img_6.png" class="front">
                  <img src="images/item_img_6h.png" class="back">
                </a>
              </li>
              <li class="swatch-container">
                <a href="item.html" class="inner wow slideInDown" data-wow-duration="2.2s" style="visibility: visible; animation-duration: 2.2s; animation-name: slideInDown;">
                  <img src="images/item_img_7.png" class="front">
                  <img src="images/item_img_7h.png" class="back">
                </a>
              </li>
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
          <a href="news.html">
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
              <li>
                <a href="news_in.html">
                  <h2>玻尿酸致失明 微整形不能“危整形”</h2>
                  <p>“几百元就能打一支玻尿酸”、“1000元就能玻尿酸隆鼻”这样的广告充斥于黑美容院或是微整形工作室等“三非”(即非法医疗机构、非专业医...</p>
                </a>
              </li>
              <li>
                <a href="news_in.html">
                  <h2>玻尿酸致失明 微整形不能“危整形”2</h2>
                  <p>“几百元就能打一支玻尿酸”、“1000元就能玻尿酸隆鼻”这样的广告充斥于黑美容院或是微整形工作室等“三非”(即非法医疗机构、非专业医...</p>
                </a>
              </li>
              <li>
                <a href="news_in.html">
                  <h2>玻尿酸致失明 微整形不能“危整形”3</h2>
                  <p>“几百元就能打一支玻尿酸”、“1000元就能玻尿酸隆鼻”这样的广告充斥于黑美容院或是微整形工作室等“三非”(即非法医疗机构、非专业医...</p>
                </a>
              </li>
              <li>
                <a href="news_in.html">
                  <h2>玻尿酸致失明 微整形不能“危整形”4</h2>
                  <p>“几百元就能打一支玻尿酸”、“1000元就能玻尿酸隆鼻”这样的广告充斥于黑美容院或是微整形工作室等“三非”(即非法医疗机构、非专业医...</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="hd">
            <ul><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li></ul>
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
      <li><a href="item.html" class="wow slideInLeft" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: slideInLeft;"><img src="images/btn_3_1.png">高贵飘逸眼</a></li>
      <li><a href="item.html" class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: slideInLeft;"><img src="images/btn_3_2.png">恒久时尚鼻</a></li>
      <li><a href="item.html" class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: slideInLeft;"><img src="images/btn_3_3.png">明快U型轮廓</a></li>
      <li><a href="item.html" class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.6s; animation-name: slideInLeft;"><img src="images/btn_3_4.png">魅力喜悦肌</a></li>
      <li><a href="item.html" class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.8s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: slideInLeft;"><img src="images/btn_3_5.png">秀美天鹅颈</a></li>
      <li><a href="item.html" class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInLeft;"><img src="images/btn_3_6.png">笔直迷人背</a></li>
      <li><a href="item.html" class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="1.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 1.2s; animation-name: slideInLeft;"><img src="images/btn_3_7.png">丝滑质感肤</a></li>
    </ul>
    <span class="bk50">&nbsp;</span>
    <div class="ewm wow bounceInDown" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInDown;">
      <img src="images/ewm.jpg">
      <p>扫描二维码关注我们</p>
    </div>
    <span class="bk20">&nbsp;</span>
    <h2 class="call"><span>&nbsp;</span>0817-7100000</h2>
    <span class="bk10">&nbsp;</span>
    <div class="bot">
      <p>来院地址：南充市顺庆区文化路234号(北湖公园对面)</p>
      <p>版权所有 © 依美医疗美容机构 Copyright Yimei All Rights Reserved  技术支持 ：<a href="http://www.scnuohang.com/" target="_blank">诺航科技</a></p>
    </div>
  </div>
</div>
<!-- float_onlie -->
<div class="float_onlie">
    <a class="on_1" href="tencent://message/?uin={$qq[1]}&amp;Menu=yes">&nbsp;</a>
    <a class="on_2 ph" href=""><em>电话：0817-2866062<br>手机：180-8159-1458</em></a>
    <a class="on_3 add" href=""><em>顺庆区潆华工业园区<br>博雅豪庭3幢-102铺</em></a>
    <a class="on_4 ewm" href=""><em><img src="images/ewm.jpg"></em></a>
    <a class="on_5" href="" onclick="javascript:scroll(0,0)">&nbsp;</a>
</div>
<script src="js/wow.min.js"></script>
<script src="js/swiper-3.3.1.jquery.min.js"></script>
<script src="js/swiper.animate1.0.2.min.js"></script>
<script src="js/global.js"></script>
</body>
</html>