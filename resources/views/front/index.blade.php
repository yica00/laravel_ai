@extends('front.base')
@section('content')
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
<!-- brand -->
<span class="bk50">&nbsp;</span>
<div class="about_out">
  <div class="w1160 clearfix">
    <img src="{{$about->thumbnail}}" class="img fr">
    <div class="txt fl">
      <div class="ho_tit_all">
        <a href="/about">
          <h2>brand story</h2>
          <p>品牌故事</p>
          <div class="line">&nbsp;</div>
        </a>
      </div>
      <span class="bk20">&nbsp;</span>
      <div class="dis">
        {{$about->introduce}}
      </div>
      <div class="more">
        <a href="/about">see more +</a>
      </div>
    </div>   
  </div>
</div>
<!-- menu_out -->
<div class="menu_out">
  <div class="w1160 clearfix">
    <span class="bk40">&nbsp;</span>
    <div class="ho_tit_all">
      <a href="/menu">
        <h2>Delicious menu</h2>
        <p>美味菜单</p>
        <div class="line">&nbsp;</div>
      </a>
    </div>
    <span class="bk30">&nbsp;</span>
  </div>
  <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox-1.3.4.css" media="screen" />
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
  <div class="menu_one clearfix" id="product_big">
    @foreach( $dishs as $dish )
    <a rel="images_group" href="{{$dish->thumbnail}}"><img src="{{$dish->thumbnail}}" alt="" /><div class="txt"><h2>{{$dish->title}}</h2><span>see more +</span></div></a>
      @endforeach
  </div>
  <span class="bk20">&nbsp;</span>
  <div class="menu_more">
    <a href="/menu">see more +</a>
  </div>
  <span class="bk30">&nbsp;</span>
</div>
<!-- store_out -->
<div class="store_out">
  <div class="w1160 clearfix">
    <span class="bk40">&nbsp;</span>
    <div class="ho_tit_all">
      <a href="/store">
        <h2>Delicious menu</h2>
        <p>门店展示</p>
        <div class="line">&nbsp;</div>
      </a>
    </div>
    <span class="bk30">&nbsp;</span>
    <div class="clearfix">
      <div class="store_img fr">
        <div id="slideBox-2" class="slideBox-2">
          <div class="hd">&nbsp;</div>
          <div class="bd">
            <ul>
              @foreach( $stores as $store )
              <li><a href="/store/{{$store->id}}"><img src="{{$store->thumbnail}}"></a></li>
              @endforeach
            </ul>
          </div>
          <a class="prev" href="javascript:void(0)"></a>
          <a class="next" href="javascript:void(0)"></a>
        </div>
        <script type="text/javascript">jQuery(".slideBox-2").slide({mainCell:".bd ul",autoPlay:true});</script>
      </div>
      <div class="store_add fl">
         <ul class="list clearfix">
           @foreach( $stores as $store )
             <li><a href="/store/{{$store->id}}">{{$store->title}}</a></li>
           @endforeach
         </ul>
         <span class="bk10">&nbsp;</span>
         <a href="/about/brand" class="btns"><h2>锦云会所</h2><span>点击进入</span></a>
      </div>
    </div>
  </div>
</div>
<!-- active_out -->
<div class="actice_out">
  <div class="w1160 clearfix">
    <span class="bk40">&nbsp;</span>
    <div class="ho_tit_all">
      <a href="/active">
        <h2>Favourable activity</h2>
        <p>优惠活动</p>
        <div class="line">&nbsp;</div>
      </a>
    </div>
    <span class="bk30">&nbsp;</span>
    <div class="picScroll-left" id="picScroll-left-1">
      <div class="hd">
        <a class="next"></a>
        <a class="prev"></a>
      </div>
      <div class="bd">
        <ul class="picList active_list_1">
          @foreach( $actives as $active )
          <li>
            <a href="/active/{{$active->id}}">
              <span class="pic"><img src="{{$active->thumbnail}}" alt="{{$active->title}}" /></span>
              <p>{{$active->created_at}}</p>
              <h2>{{$active->title}}</h2>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
  </div>
  <script type="text/javascript">
  jQuery("#picScroll-left-1").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click"});
  </script>
  <span class="bk40">&nbsp;</span>
  </div>
</div>
<!-- join_out -->
<div class="join_out">
  <div class="w1160 clearfix">
    <span class="bk60">&nbsp;</span>
    <div class="ho_tit_all">
      <a href="/join">
        <h2>join investment</h2>
        <p>招商加盟</p>
        <div class="line">&nbsp;</div>
      </a>
    </div>
    <span class="bk50">&nbsp;</span>
    <div class="txt">
      <h2>招商经理陪您一起看行业、知企业、察商圈、观产品、点人头、算利润</h2>
      <h3>对每个投资者都负责到底 对每种材料都一丝不苟</h3>
      <p>The investment manager will accompany you to see the industry, know the enterprise, <br/>observe the business circle,he view product, the point head, calculate the profit<br/>Every investor is responsible for every material<br/></p>
      <a href="/join" class="btns"><img src="/images/btn_join.gif"/></a>
    </div>
  </div>
</div>
<!-- link_out -->
<div class="link_out">
  <div class="w1160 clearfix">
    <div class="txt fr">
      @foreach( $links as $link )
      <a href="{{$link->links}}" target="_blank" rel="nofollow">{{$link->title}}</a>
      @endforeach
    </div>
    <span class="bt fl">友情链接：</span>
  </div>
</div>
@endsection