@extends('front.base')
@section('content')
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
          <p>about</p>
        <h2>--&nbsp;&nbsp;关于&nbsp;&nbsp;--</h2>
      </div>
      <!--<p class="page_nav">
          <a href="case.html" class="on">中式</a>
          <a href="case.html">欧式</a>
          <a href="case.html">现代</a>
          <a href="case.html">地中海式</a>
       </p> -->
  </div>  
</div>
<!-- 内页 -->
<span class="bk100">&nbsp;</span>
<span class="bk100">&nbsp;</span>
<span class="bk10">&nbsp;</span>
<div class="wap_box">
  <!-- 内容开始 -->
  <div class="w1160 clearfix">
    <div class="page_nav clearfix"> 
          <a href="/about#abt_company">公司简介</a>
          <a href="/about#abt_culture">企业文化</a>
          <a href="/about#abt_team">诺航团队</a>
          <a href="/about#abt_partner">合作伙伴</a>
       </div>
  </div>
  <span class="bk40">&nbsp;</span>
  <!-- 1 -->
  <div class="w1160 clearfix">
    <div id="abt_company" class="abt_company">
      <div class="box">
        <h2>我们是谁</h2>
        <div class="txt">
            {!! $company->comtent !!}
        </div>
        </div>
    </div>
  </div>
  <!-- 2 -->
  <div class="abt_culture" id="abt_culture">
    <div class="w1160 clearfix">
    <img src="{{ $culture->thumbnail }}">
    </div>
  </div>
  <!-- 3 -->
  <div class="w1160">
  <div class="abt_team" id="abt_team">
    <h2 class="tit">我们的团队</h2>

    <div id="slideRealBox" class="slideRealBox">       
          <div class="picScroll-leftdiy hd">
              <div class="inhd clearfix">
                <a class="prev" href="javascript:void(0)"></a>
                <a class="next" href="javascript:void(0)"></a>
              </div>
              <div class="inbd">
                <ul class="picList">
                  @foreach( $teams as $team )
                  <li  data-100-bottom-center="transform: rotate(-90deg); opacity: 0" data-100-center-center="transform: rotate(0); opacity: 1"><img src="{{ $team->photo }}"/></li>
                  @endforeach
                </ul>
              </div>
          </div> 
          <!-- 大图 -->
          <div class="bd" data-100-bottom-top="transform: translateY(200px); opacity: 0" data-center-top="transform: translateY(0px); opacity: 1" style="transform: translateY(0px); opacity: 1;">
            <!-- data-100-bottom-center="transform: rotateY(-90deg); opacity: 0" data-100-center-center="transform: rotate(0); opacity: 1" -->
            <ul>
              @foreach( $teams as $team )
              <li class="clearfix">
                <img src="{{ $team->photo }}" class="pic fl">
                <div class="intxt fr">
                  <img src="images/name_gzl.png">
                  <div class="t1">
                    <h2>项目经验</h2>
                    <p>
                      @foreach( $team->iterm as $it )
                        <a href="/case">{{ $it }}</a>
                      @endforeach
                    </p>
                  </div>
                  <span class="bk20">&nbsp;</span>
                  <div class="t1">
                    <h2>个人简介</h2>
                    <p>{{ $team->introduce }}</p>
                  </div>
                </div>
                <span class="year">{{ $team->title }}<br/>{{ $team->work_age }}年</span>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
        <script type="text/javascript">jQuery(".picScroll-leftdiy").slide({titCell:".inhd ul",mainCell:".inbd ul",autoPage:false,effect:"left",vis:4,trigger:"click"});
        </script>
        <script type="text/javascript">jQuery(".slideRealBox").slide({mainCell:".bd ul",autoPlay:false});</script>
    </div>
  </div>
   <!-- 4 -->
   <div class="abt_partner" id="abt_partner">  
      <div class="clientout">
    <div class="w1160 clearfix">
      <span class="bk60">&nbsp;</span>
      <div class="ho_tit_all">
        <p>Customer satisfaction is our only aim</p>
        <h2>客户的满意是我们唯一的宗旨</h2>
        <h3>我们将于携手更多优质伙伴 提供更加贴心的服务</h3>
      </div>
      <span class="bk50">&nbsp;</span>
      <div class="list clearfix" data-100-bottom-top="transform: translateX(-200px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1" >
        @foreach( $partners as $partner )
        <span><img src="{{ $partner->thumbnail }}"></span>
        @endforeach
      </div>
      <span class="bk20">&nbsp;</span>
      {{--<div class="list clearfix" data-100-bottom-top="transform: translateX(200px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1">--}}
        {{--<span><img src="images/hzs_5.jpg"></span>--}}
        {{--<span><img src="images/hzs_3.jpg"></span>--}}
        {{--<span><img src="images/hzs_4.jpg"></span>--}}
        {{--<span><img src="images/hzs_1.jpg"></span>--}}
        {{--<span><img src="images/hzs_2.jpg"></span>--}}
      {{--</div>--}}
    </div>
  </div>
   </div>
  <!-- 内容结束 -->
</div>
<!-- contactout -->
@endsection