@extends('front.base')
@section('content')
<div class="warp_box">
  <div class="warp_bot">
    <div class="brd_tit_all">
      <span class="bk100">&nbsp;</span>
      <h2>品牌</h2>
      <p>--- brand ---</p>
    </div>  
      <!-- start -->
      <!-- 1简介 -->
      <div class="w1280 clearfix" id="story">
        <span class="bk80">&nbsp;</span>
        <div class="brd_li_1 clearfix">
          <div class="txt wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="200" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInDown;">
            <h2 class="tit">南充依美医疗美容</h2>
            <div class="dis">
              {!! $articles[0]->comtent !!}
            </div>
          </div>
          <div class="pic wow fadeInLeft" data-wow-duration="1s" data-wow-offset="200" style="visibility: visible; animation-duration: 1s; animation-name: fadeInLeft;">
            <div class="eng">
              <p>nanchong</p>
              <p>yimei</p>
              <p>Medical beauty hospital</p>
            </div>
            <img src="{{ $self->thumbnail }}">
          </div>
        </div>
        <span class="bk60">&nbsp;</span>
        <div class="brd_li_2 clearfix"> 
          <ul class="list clearfix">
            <li  class="wow flipInX" data-wow-duration="1s" data-wow-offset="300" style="visibility: visible; animation-duration: 1s; animation-name: flipInX;">
              <img src="images/brd_2_1.png" alt="" />
              <h2>经营理念</h2>
              <p>分享快递，美着，赚着，快乐着的市场方针，通过每一份爱的传递让更多的人获益。</p>
            </li>
            <li  class="wow flipInX" data-wow-duration="1s" data-wow-delay=".5s" data-wow-offset="300" style="visibility: visible; animation-duration: 1s; animation-delay: .5s; animation-name: flipInX;">
              <img src="images/brd_2_2.png" alt="" />
              <h2>医疗理念</h2>
              <p>精益求精、追求完美、打造永恒</p>
            </li>
            <li  class="wow flipInX" data-wow-duration="1s" data-wow-delay="1s" data-wow-offset="300" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: flipInX;">
              <img src="images/brd_2_3.png" alt="" />
              <h2>美学理念</h2>
              <p>通过圆线和直线完美搭配，打造每一个女人高贵的气质、知性的内涵，简洁明快飘逸的神情，彰显个性与善良的人性美，让美成为一种永恒。</p>
            </li>
          </ul>
        </div>
        
      </div>
      <!-- 3文化 -->
      <div  id="culture">
        <span class="bk60">&nbsp;</span>
        <div class="snBrand">
          <ol>
            @foreach( $articles[1]->articles as $k=>$arti )
            <li class="li_{{$k+1}}">{{$arti->title}} <span>{{$arti->link}}</span></li>
            @endforeach
          </ol>
          <ul>
            @foreach( $articles[1]->articles as $k=>$arti )
              <li class="clearfix">
                <div class="brd_li_3 clearfix">
                  <div class="pic">
                    <img src="{{$arti->thumbnail}}">
                  </div>
                  <div class="txt">
                    <span class="sic"><img src="{{$arti->thumbnail}}"></span>
                    <h2>{{$arti->title}}</h2>
                    @foreach( explode(',',$arti->introduce) as $intro)
                    <p>{{$intro}}</p>
                    @endforeach
                  </div>
                </div>
              </li>
            @endforeach
          </ul>
        </div>
        <script type="text/javascript" src="/js/jquery.gridAccordion.min.js"></script>
        <script type="text/javascript">jQuery(".snBrand").slide({ titCell:"ol li",mainCell:"ul",delayTime:0,triggerTime:0 });</script>   
      </div>
      <!-- 4设备 -->
      <div class="w1280 clearfix" id="equip">
        <span class="bk80">&nbsp;</span>
        <div id="slideRealman" class="slideRealman  pdtteam">
          <div class="picScroll-maimg hd">
              <div class="inhd clearfix">
                <a class="snext">&nbsp;</a>
                <a class="sprev">&nbsp;</a>
              </div>
              <div class="inbd">
                <ul class="picList">
                  @foreach( $articles[2]->articles as $k=>$arti )
                  <li><img src="{{$arti->thumbnail}}"><h2>{{$arti->title}}</h2></li>
                  @endforeach
                </ul>
              </div>
          </div>
          <div class="bd">
             <ul class="equip_in_list">
               @foreach( $articles[2]->articles as $k=>$arti )
                <li class="clearfix">
                  <div class="txt fr">
                    <h2>{{$arti->title}}</h2>
                    {!! $arti->comtent !!}
                  </div>
                  <img src="{{$arti->thumbnail}}" class="top_pic fl" />
                </li>
                @endforeach
             </ul>
          </div>
        </div>
        <script type="text/javascript">
          jQuery(".picScroll-maimg").slide({titCell:".inhd ul",mainCell:".inbd ul",autoPage:true,effect:"left",vis:6,trigger:"click",prevCell:".sprev",nextCell:".snext"});
        </script>
        <script type="text/javascript">
          jQuery(".slideRealman").slide({mainCell:".bd ul"});
        </script>
        <script type="text/javascript">
          jQuery("#demp_group_4 .slideBox_txt").slide({ mainCell:"ul",vis:6,prevCell:".sPrev",nextCell:".sNext",effect:"left"});
          jQuery("#demp_group_4").slide({titCell:".parHd li",mainCell:".parBd"});
        </script>
      </div>  
      <!-- 5环境 -->
      <script type="text/javascript">
        $(document).ready(function($){
          $('.accordion').gridAccordion({

            width:1280, 

            height:600, 

            columns:4, 

            distance:2, 

            closedPanelWidth:10, 

            closedPanelHeight:10, 

            alignType:'centerCenter',

            slideshow:true,

            panelProperties:{

              0:{captionWidth:200, captionHeight:35, captionTop:30, captionLeft:30},

              4:{captionWidth:150, captionHeight:100, captionTop:30, captionLeft:650},

              7:{captionWidth:310, captionHeight:35, captionTop:350, captionLeft:40},

              8:{captionWidth:300, captionHeight:40, captionTop:150, captionLeft:35},

              11:{captionWidth:150, captionHeight:120, captionTop:300, captionLeft:30},

              14:{captionWidth:300, captionHeight:40, captionTop:30, captionLeft:50},

              16:{captionWidth:150, captionHeight:120, captionTop:150, captionLeft:10},

              18:{captionWidth:300, captionHeight:40, captionTop:130, captionLeft:50}
            }
          });    
        });
        </script>
      <div class="brd_li_5" id="environ">
        <span class="bk80">&nbsp;</span>
        <div class="w1280 clearfix">
          <div class="accordion grid-accordion">
            @foreach( $articles[3]->comtent[0] as $k=>$arti )
            <div class="panel" style="left: {{  ($k % 4)*320 }}px; top: {{ floor( $k/4 )*200 }}px;">
              <img src="{{$arti}}">
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!-- 6荣誉 --> 
      <div class="w1280 clearfix" id="honor">
        <span class="bk80">&nbsp;</span>
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
        <div class="picScroll-item" id="picScroll-brd-1">
          <div class="hd">
            <a class="next"></a>
            <a class="prev"></a>
          </div>
          <div class="bd">
            <ul class="picList brd_li_6">
              @foreach( $articles[4]->comtent[0] as $k=>$arti )
              <li>
                <a rel="images_group" href="{{$arti}}"><img src="{{$arti}}"></a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
        <script type="text/javascript">
        jQuery("#picScroll-brd-1").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:4,trigger:"click"});
        </script>
      </div>
      <!-- end -->
      <span class="bk80">&nbsp;</span>
      <span class="bk100">&nbsp;</span>
  </div>
</div>
@endsection