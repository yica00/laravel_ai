@extends('front.base')
@section('content')
  <!-- banner -->
  <div class="banner_box">
      <div class="DB_tab25">
        <ul class="DB_bgSet">
            @foreach(  $slides as $slide)
            <a href="{{ $slide['link'] }}"><li style="background:url({{ $slide['thumbnail'] }});"></li></a>
            @endforeach
        </ul>
        <ul class="DB_imgSet">
            <li onclick="javascript:window.location.href='#';">
                <img class="DB_1_1" src="{{ $slides[0]['sons'][0]['thumbnail'] }}" alt="" />
                <img class="DB_1_2" src="{{ $slides[0]['sons'][1]['thumbnail'] }}" alt="" />
                <img class="DB_1_3" src="{{ $slides[0]['sons'][2]['thumbnail'] }}" alt="" />
            </li>
            <li onclick="javascript:window.location.href='#';">
                <img class="DB_2_1" src="{{ $slides[1]['sons'][0]['thumbnail'] }}" alt="" />
                <img class="DB_2_2" src="{{ $slides[1]['sons'][1]['thumbnail'] }}" alt="" />
                <img class="DB_2_3" src="{{ $slides[1]['sons'][2]['thumbnail'] }}" alt="" />
            </li>
            <li onclick="javascript:window.location.href='#';">
                <img class="DB_3_1" src="{{ $slides[2]['sons'][0]['thumbnail'] }}" alt="" />
                <img class="DB_3_2" src="{{ $slides[2]['sons'][1]['thumbnail'] }}" alt="" />
                <img class="DB_3_3" src="{{ $slides[2]['sons'][2]['thumbnail'] }}" alt="" />
            </li>
        </ul>
        <div class="DB_menuWrap">
            <div class="DB_next">
                <img src="images/nextArrow.png" alt="NEXT" />
            </div>
            <div class="DB_prev">
                <img src="images/prevArrow.png" alt="PREV" />
            </div>
        </div>
      </div>
  </div>
  <script type="text/javascript">
        $('.DB_tab25').DB_tabMotionBanner({
            key: 'b28551',
            autoRollingTime: 6000,
            bgSpeed: 500,
            motion: {
                DB_1_1: { left: -50, opacity: 0, speed: 1000, delay: 500 },
                DB_1_2: { left: -50, opacity: 0, speed: 1000, delay: 1000 },
                DB_1_3: { left: 100, opacity: 0, speed: 1000, delay: 1500 },
                DB_2_1: { top: 50, opacity: 0, speed: 1000, delay: 500 },
                DB_2_2: { top: 50, opacity: 0, speed: 1000, delay: 1000 },
                DB_2_3: { top: 100, opacity: 0, speed: 1000, delay: 1500 },
                DB_3_1: { left: -50, opacity: 0, speed: 1000, delay: 500 },
                DB_3_2: { top: 50, opacity: 0, speed: 1000, delay: 1000 },
                DB_3_3: { top: 0, opacity: 0, speed: 1000, delay: 1500 },
                end: null
            }
        })
  </script>
  <!-- skillout -->
  <div class="skillout">
    <div class="w1160 clearfix">
      <span class="bk60">&nbsp;</span>
      <div class="ho_tit_all">
        <p>One-stop enterprise Internet planners</p>
        <h2>一站式企业互联网策划商</h2>
        <h3>建站、营销、电商、协同、管理，专业产品助您轻松实现智能运营</h3>
      </div>
      <span class="bk30">&nbsp;</span>
      <ul class="list clearfix">
        <li class="li_1" data-400-center-top="transform: scale(0.8); opacity: 0" data-400-center-center="transform: scale(1); opacity: 1">
          <a href="/technology">
           <span class="icon"><img src="{{ $plans[0]->thumbnail }}"></span>
           <div class="bot">
            <h2>{{ $plans[0]->title }}</h2>
            <p class="nr">{!! mb_substr($plans[0]->comtent,3,-4,'utf8') !!}</p>
            <p class="xl">
              @foreach( $plans[0]->link as $link )
              <span>{{ $link }}</span>
              @endforeach
            </p>
           </div>
          </a>
        </li>
        <li class="li_2" data-300-center-top="transform: scale(0.8); opacity: 0" data-300-center-center="transform: scale(1); opacity: 1">
          <a href="/technology">
           <span class="icon"><img src="{{ $plans[1]->thumbnail }}"></span>
           <div class="bot">
             <h2>{{ $plans[1]->title }}</h2>
             <p class="nr">{!! mb_substr($plans[1]->comtent,3,-4,'utf8') !!}</p>
             <p class="xl">
               @foreach( $plans[1]->link as $link )
                 <span>{{ $link }}</span>
               @endforeach
            </p>
           </div>
          </a>
        </li>
        <li class="li_3" data-200-center-top="transform: scale(0.8); opacity: 0" data-200-center-center="transform: scale(1); opacity: 1">
          <a href="/technology">
            <span class="icon"><img src="{{ $plans[2]->thumbnail }}"></span>
            <div class="bot">
              <h2>{{ $plans[2]->title }}</h2>
              <p class="nr">{!! mb_substr($plans[2]->comtent,3,-4,'utf8') !!}</p>
              <p class="xl">
                @foreach( $plans[2]->link as $link )
                  <span>{{ $link }}</span>
                @endforeach
              </p>
           </div>
          </a>
        </li>
        <li class="li_4" data-100-center-top="transform: scale(0.8); opacity: 0" data-100-center-center="transform: scale(1); opacity: 1">
          <a href="/technology">
            <span class="icon"><img src="{{ $plans[3]->thumbnail }}"></span>
            <div class="bot">
              <h2>{{ $plans[3]->title }}</h2>
              <p class="nr">{!! mb_substr($plans[3]->comtent,3,-4,'utf8') !!}</p>
              <p class="xl">
                @foreach( $plans[3]->link as $link )
                  <span>{{ $link }}</span>
                @endforeach
              </p>
           </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="gap" style="background:url(images/palmtrees.jpg); "></div>
  <!-- caseout -->
  <div class="caseout">
    <span class="bk80">&nbsp;</span>
    <ul class="list clearfix">
      <!--  data-150-bottom-center="transform: rotateY(-90deg); opacity: 0" data-150-center-center="transform: rotate(0); opacity: 1" class="skrollable skrollable-between" -->
      @foreach( $cases as $case)
        <li><a href="/case/{{ $case->id }}"><img src="{{ $case->thumbnail }}" alt="" /><span>{{ $case->title }}<br><img src="/images/link.png" class="link"></span></a></li>
      @endforeach
    </ul>
  </div>
  <!-- teamout -->
  <div class="teamout">
    <div class="w1160 clearfix">
      <span class="bk60">&nbsp;</span>
      <div class="ho_tit_all">
        <p>Northeast sichuan famous Internet planning</p>
        <h2>川东北地区知名互联网策划商</h2>
        <h3>创独一无二的设计，造国际品质的工程，行无微不至的服务</h3>
      </div>
      <span class="bk30">&nbsp;</span>
      <div class="txt">
        {!!  $about->comtent !!}
      </div>
      <span class="bk60">&nbsp;</span>
      <!-- 相册 -->
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
                <img src="/images/name_gzl.png">
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
  <div class="gap" style="background-image:url(images/bay.jpg); "></div>
  <span class="bk60">&nbsp;</span>
  <!-- processout -->
  <div class="processout">
    <div class="w1160 clearfix">
      <span class="bk30">&nbsp;</span>
      <div class="ho_tit_all">
        <p>Site delivery process</p>
        <h2>项目交付流程</h2>
        <h3>优化业务流程、提高工作效率，快速、高质量交付项目，提供超预期的服务</h3>
      </div>
      <span class="bk50">&nbsp;</span>
      <ul class="list clearfix">
        <li  data-100-bottom-top="transform: translateX(-400px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1" >
          <img src="images/pro_1.png" alt="" class="imggocircle">
          <h2>需求沟通</h2>
          <p>倾听客户需求，提供专业建议，确定设计风格</p>
        </li>
        <li  data-100-bottom-top="transform: translateX(-200px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1">
          <img src="images/pro_2.png" alt="" class="imggocircle">
          <h2>策划方案</h2>
          <p>为您的企业定制个性化互联网策划书</p>
        </li>
        <li data-100-bottom-top="transform: translateY(200px); opacity: 0" data-center-top="transform: translateY(0px); opacity: 1">
          <img src="images/pro_3.png" alt="" >
          <h2>前端制作</h2>
          <p>CSS、JS、HTML5实现页面的展示动态</p>
        </li>
        <li  data-100-bottom-top="transform: translateX(200px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1">
          <img src="images/pro_4.png" alt="" class="imggocircle">
          <h2>程序开发</h2>
          <p>开发网站后台管理系统</p>
        </li>
        <li data-100-bottom-top="transform: translateX(400px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1" >
          <img src="images/pro_5.png" alt="" class="imggocircle">
          <h2>验收上线</h2>
          <p>填充网站内容，确认上传，交付客户收付尾款服务</p>
        </li>
      </ul>
    </div>
  </div>
  <!-- clientout -->
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
        @foreach( $pateners as $patener )
        <span><img src="{{ $patener->thumbnail }}"></span>
        @endforeach
      </div>
      <span class="bk20">&nbsp;</span>
      <div class="list clearfix" data-100-bottom-top="transform: translateX(200px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1">
        @foreach( $desc_pateners as $patener )
          <span><img src="{{ $patener->thumbnail }}"></span>
        @endforeach
      </div>
    </div>
  </div>
  <span class="bk50">&nbsp;</span>
  <!-- contactout -->
  @endsection