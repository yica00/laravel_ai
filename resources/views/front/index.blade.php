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
<div class="hed_ban">
  <!-- banner -->
  <div id="slideBox" class="slideBox">
    <div class="hd">&nbsp;</div>
      <div class="bd">
        <ul>
          @foreach( $sliders as $slider )
          <li><a href="" style="background:url({{$slider->thumbnail}}) center no-repeat;">&nbsp;</a></li>
          @endforeach
        </ul>
      </div>
      <a class="prev" href="javascript:void(0)"></a>
      <a class="next" href="javascript:void(0)"></a>
    </div>
    <script type="text/javascript">jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});</script>
  </div>
  <!-- header -->
  <div class="header">
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
</div>
<!-- item -->
<span class="bk60">&nbsp;</span>
<div class="item_out">
  <div class="w1280 clearfix">
    <div class="ho_tit_all">
      <a href="/item/15">
        <img src="images/ho_tit_1.png">
        <h2>王牌<span>课程</span></h2>
        <h3>一站式专业化妆造型培训综合平台</h3>
        <p>Walk into beautiful and beautiful world, witness our training legend, we will develop<br/>together with you</p>
        <img src="images/star_red.png">
      </a>
    </div>
    <span class="bk30">&nbsp;</span>
    <div class="clearfix">
      <div class="w310 fr">
        @if( isset( $classs[4] ) )
        <a href="/item/detail/{{ $classs[4]->id }}" class="img img_2 col_white">
          <img src="{{ $classs[4]->thumbnail }}">
          <div class="txt">
            <h2>{{ $classs[4]->title }}</h2>
            <p>{{ $classs[4]->link }}</p>
          </div>
        </a>
        @endif
        <span class="bk10">&nbsp;</span>
          @if( isset( $classs[5] ) )
        <a href="/item/detail/{{ $classs[5]->id }}" class="img img_4">
          <img src="{{ $classs[5]->thumbnail }}">
          <div class="txt">
            <h2>{{ $classs[5]->title }}</h2>
            <p>{{ $classs[5]->link }}</p>
          </div>
        </a>
            @endif
      </div>
      <div class="w960 fl">
        <div class="clearfix">
          <div class="w310 fr">
            @if( isset( $classs[1] ) )
            <a href="/item/detail/{{ $classs[1]->id }}" class="img img_2 ">
              <img src="{{ $classs[1]->thumbnail }}">
              <div class="txt">
                <h2>{{ $classs[1]->title }}</h2>
                <p>{{ $classs[1]->link }}</p>
              </div>
            </a>
            @endif
            <span class="bk10">&nbsp;</span>
            <a href="/item/detail/17" class="img img_2 ">
              <img src="images/item_3.jpg">
            </a>
          </div>
          @if( isset( $classs[0] ) )
          <a href="/item/detail/{{ $classs[0]->id }}" class="img img_1 col_white fl">
            <img src="{{ $classs[0]->thumbnail }}">
            <div class="txt">
              <h2>{{ $classs[0]->title }}</h2>
              <p>{{ $classs[0]->link }}</p>
            </div>
          </a>
          @endif
        </div>
        <span class="bk10">&nbsp;</span>
        <div class="clearfix">
          @if( isset( $classs[3] ) )
          <a href="/item/detail/{{ $classs[3]->id }}" class="img img_3 fr  col_white">
            <img src="{{ $classs[3]->thumbnail }}">
            <div class="txt">
              <h2>{{ $classs[3]->title }}</h2>
              <p>{{ $classs[3]->link }}</p>
            </div>
          </a>
          @endif
          @if( isset( $classs[2] ) )
          <a href="/item/detail/{{ $classs[2]->id }}" class="img img_2 fl  col_white">
            <img src="{{ $classs[2]->thumbnail }}">
            <div class="txt">
              <h2>{{ $classs[2]->title }}</h2>
              <p>{{ $classs[2]->link }}</p>
            </div>
          </a>
            @endif
        </div>
      </div>
    </div>
    <span class="bk40">&nbsp;</span>
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
<!-- teacher_out -->
<span class="bk60">&nbsp;</span>
<div class="teacher_out">
  <span class="bk60">&nbsp;</span>
  <div class="w1280 clearfix">
    <div class="ho_tit_all">
      <a href="/teacher">
        <img src="images/ho_tit_2.png">
        <h2>明星<span>师资</span></h2>
        <h3>一线大咖手把手教学</h3>
        <p>Walk into beautiful and beautiful world, witness our training legend, we will develop<br/>together with you</p>
        <img src="images/star_red.png">
      </a>
    </div>
    <span class="bk30">&nbsp;</span>
    <div class="picScroll-leftsys">
      <div class="hd">
        <a class="next"></a>
        <a class="prev"></a>
      </div>
      <div class="bd">
        <ul class="picList team_list_o">
          @foreach( $teams as $team )
          <li>
            <a href="/team/{{$team->id}}">
              <span class="pic"><img src="{{$team->photo}}" alt="" /></span>
              <div class="txt">
                <h2>{{$team->name}}</h2>
                <p>{{$team->title}}</p>
              </div>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    <script type="text/javascript">
    jQuery(".picScroll-leftsys").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:5,trigger:"click"});
    </script>
  </div>
  <span class="bk60">&nbsp;</span>
</div>
<!-- star_out -->
<span class="bk60">&nbsp;</span>
<div class="star_out">
  <div class="w1280 clearfix">
    <div class="ho_tit_all">
      <a href="/star">
        <img src="images/ho_tit_3.png">
        <h2>走进<span>片场</span></h2>
        <h3>您将有机会为您喜爱的明星化妆</h3>
        <p>Walk into beautiful and beautiful world, witness our training legend, we will develop<br/>together with you</p>
        <img src="images/star_red.png">
      </a>
    </div>
    <span class="bk30">&nbsp;</span>
    <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox-1.3.4.css" media="screen">
    <script type="text/javascript" src="/js/jquery.fancybox-1.3.4.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
         
        $("a[rel=images_group]").fancybox({
          'transitionIn':'none',
          'transitionOut':'none',
          'titlePosition':'over',
          'titleFormat':function(title, currentArray, currentIndex, currentOpts) {
            return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
          }
        });
      });
    </script>
    <ul class="list clearfix">
      <li class="li_1">
        @foreach( $stars as $k=>$star )
          @if( $k<2 )
        <a rel="images_group" href="{{$star->thumbnail}}"><div class="pic"><img src="{{$star->thumbnail}}" alt="{{$star->title}}"></div></a>
          @endif
        @endforeach
      </li>
      <li class="li_2">
        @foreach( $stars as $k=>$star )
          @if( 1<$k && $k<4 )
            <a rel="images_group" href="{{$star->thumbnail}}"><div class="pic"><img src="{{$star->thumbnail}}" alt="{{$star->title}}"></div></a>
          @endif
        @endforeach
      </li>
      <li class="li_3">
        @foreach( $stars as $k=>$star )
          @if( 3<$k && $k<8 )
            <a rel="images_group" href="{{$star->thumbnail}}"><div class="pic"><img src="{{$star->thumbnail}}" alt="{{$star->title}}"></div></a>
          @endif
        @endforeach
      </li>
      <li class="li_4">
        @foreach( $stars as $k=>$star )
          @if( 7<$k && $k<10 )
            <a rel="images_group" href="{{$star->thumbnail}}"><div class="pic"><img src="{{$star->thumbnail}}" alt="{{$star->title}}"></div></a>
          @endif
        @endforeach
      </li>
      <li class="li_5">
        @foreach( $stars as $k=>$star )
          @if( 9<$k )
            <a rel="images_group" href="{{$star->thumbnail}}"><div class="pic"><img src="{{$star->thumbnail}}" alt="{{$star->title}}"></div></a>
          @endif
        @endforeach
      </li>
    </ul>
  </div>
</div>
<!-- work -->
<span class="bk60">&nbsp;</span>
<div class="work_out">
  <span class="bk60">&nbsp;</span>
  <div class="w1280 clearfix">
    <div class="ho_tit_all">
      <a href="/work">
        <img src="images/ho_tit_4.png">
        <h2>学员<span>作品</span></h2>
        <h3>我们的高手学员都被千金求聘</h3>
        <p>Walk into beautiful and beautiful world, witness our training legend, we will develop<br/>together with you</p>
        <img src="images/star_red.png">
      </a>
    </div>
    <span class="bk30">&nbsp;</span>
    <div class="picScroll-left-work">
      <div class="bd">
        <ul class="picList">
          @foreach( $works as $work )
          <li><a rel="" href="/work/{{$work->id}}"><div class="pic"><img src="{{$work->thumbnail}}" alt="{{$work->title}}"></div></a></li>
          @endforeach
        </ul>
      </div>
      <div class="hd">
        <ul></ul>
      </div>
    </div>
    <script type="text/javascript">
    jQuery(".picScroll-left-work").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:4,scroll:1,trigger:"click"});
    </script>
    <span class="bk60">&nbsp;</span>
  </div>
</div>
<!-- video_out -->
<div class="video_out">
  <span class="bk100">&nbsp;</span>
  <span class="bk5">&nbsp;</span>
  <a href="/about/video/27">
    <img src="images/play_btn.png">
  </a>
</div>
<!-- compus_out -->
<span class="bk10">&nbsp;</span>
<div class="w1280 clearfix">
  <div class="slideTxtBox">
    <div class="hd">
      <ul>
        @foreach( $schools as $school )
        <li><a href="/about/compus"><h2>{{$school->title}}</h2><p>campus</p></a></li>
        @endforeach
      </ul>
    </div>
    <div class="bd">
      @foreach( $schools as $school )
      <div class="compus_img clearfix">
        <div class="top">
          @foreach( $school->articles as $arti )
            @if( $k<3 )
          <a rel="images_group" href="{{$arti->thumbnail}}" class="img_all img_1 fl mR10"><div class="pic"><img src="{{$arti->thumbnail}}" alt=""></div></a>
            @endif
          @endforeach
        </div>
        <span class="bk10">&nbsp;</span>
        <div class="bot">
          <a href="/about/compus" class="txt fl mR10"><h2>教学环境</h2><p>Teaching<br/>environment</p></a>
          @foreach( $school->articles as $arti )
            @if( 2<$k && $k<5 )
              <a rel="images_group" href="{{$arti->thumbnail}}" class="img_all img_1 fl mR10"><div class="pic"><img src="{{$arti->thumbnail}}" alt=""></div></a>
            @endif
          @endforeach
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <script type="text/javascript">jQuery(".slideTxtBox").slide();</script>
</div>
<span class="bk60">&nbsp;</span>
<!-- news_out -->
<div class="news_out">
  <span class="bk60">&nbsp;</span>
  <div class="w1280 clearfix">
    <div class="ho_tit_all">
      <a href="/about/news">
        <img src="images/ho_tit_5.png">
        <h2>新闻<span>动态</span></h2>
        <h3>行中圈内动态 俏佳人榜上有名</h3>
        <p>Walk into beautiful and beautiful world, witness our training legend, we will develop<br/>together with you</p>
        <img src="images/star_red.png">
      </a>
    </div>
    <span class="bk30">&nbsp;</span>
    <div class="picScroll-leftsys" id="picScroll-leftnews">
      <div class="hd">
        <a class="next"></a>
        <a class="prev"></a>
      </div>
      <div class="bd">
        <ul class="picList news_list_o">
          @foreach( $newss as $news )
          <li>
            <a href="/about/news/{{$news->id}}">
              <span class="pic"><img src="{{$news->thumbnail}}" alt="{{$news->title}}" /></span>
              <div class="txt">
                <h2>{{$news->title}}</h2>
                <p>{{$news->introduce}}</p>
              </div>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    <script type="text/javascript">
    jQuery("#picScroll-leftnews").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click"});
    </script>
    <span class="bk60">&nbsp;</span>
  </div>
</div>
<!-- privilege -->
<div class="privilege">
  <span class="bk60">&nbsp;</span>
  <div class="w1280 clearfix">
    <div class="ho_tit_all">
      <a href="">
        <img src="images/ho_tit_6.png">
      </a>
    </div>
    <span class="bk30">&nbsp;</span>
    <ul class="list clearfix">
      @foreach( $projects as $project )
      <li>
        <div class="txt">
          <h2>{{$project->title}}</h2>
          <p>{{$project->introduce}}</p>
        </div>
        <div class="bot">
          {!! $project->comtent !!}
        </div>
      </li>
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
    <a class="on_2 ph" href=""><em>电话：{{ session('setting')['fix_phone']  }}<br>手机：{{ session('setting')['phone']  }}</em></a>
    <a class="on_3 add" href=""><em>{{ session('setting')['bases']  }}</em></a>
    <a class="on_4 ewm" href=""><em><img src="{{ session('setting')['wx_map']  }}"></em></a>
    <a class="on_5" href="" onclick="javascript:scroll(0,0)">&nbsp;</a>
</div>
</body>
</html>