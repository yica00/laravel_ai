@extends('front.base')
@section('content')
<!-- banner -->
<div id="slideBox" class="slideBox">
  <div class="hd">&nbsp;</div>
  <div class="bd">
    <ul>
      @foreach( $sliders as $slider )
      <li><a href="{{$slider->link}}" style="background:url({{$slider->thumbnail}}) center no-repeat;">&nbsp;</a></li>
      @endforeach
    </ul>
  </div>
  <a class="prev" href="javascript:void(0)"></a>
  <a class="next" href="javascript:void(0)"></a>
</div>
<script type="text/javascript">jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});</script>
<!--  product-->
<div class="w1160 clearfix">
  <span class="bk50">&nbsp;</span>
  <div class="ho_tit_all" >
    <h2><a href="/product">product center</a></h2>
    <h3><a href="/product">产品中心</a></h3>
    <p>设计 / 主辅材 / 施工 / 损耗 / 家具 / 软装 / 配饰 一站配齐</p>
  </div>
  <span class="bk40">&nbsp;</span>
  <div class="slideTxtBox">
      <div class="hd">
        <ul>
          @foreach( session('header_nav') as $cate )
            @if( $cate->id == 4 )
              @foreach( $cate->articles as $art )
                <li><span>&nbsp;</span>
                  <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif">{{$art->title}}</a>
                </li>
              @endforeach
            @endif
          @endforeach
        </ul>
      </div>
      <div class="bd">
        @foreach( $products as $product )
        <div class="prodct_out clearfix">
          <div class="list fr">
            <ul class="clearfix">
              @foreach( $product->articles as $iterm)
                <li>
                  <a href="/product/{{$iterm->id}}">
                    <span class="pic"><img src="{{$iterm->thumbnail}}" alt=""></span>
                    <span class="mask">&nbsp;</span>
                    <div class="txt">
                      <h2>{{$iterm->title}}</h2>
                      <p>{{$iterm->link}}</p>
                    </div>
                  </a>
                </li>
              @endforeach
            </ul>
          </div>
          <div class="ad fl">
            <img src="{{$product->thumbnail}}">
            <a href="/product/category/{{$product->id}}"><img src="images/cp_more_1.png"></a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <script type="text/javascript">jQuery(".slideTxtBox").slide();</script>
</div>
<span class="bk50">&nbsp;</span>
<!--  case-->
<div class="caseout">
  <div class="w1160 clearfix">
    <span class="bk50">&nbsp;</span>
    <div class="ho_tit_all" >
      <h2><a href="/case">typical case</a></h2>
      <h3><a href="/case">典型案例</a></h3>
      <p>精挑细选数千套案例，超万张照片供您欣赏</p>
    </div>
    <span class="bk40">&nbsp;</span>
    <div class="clearfix">
      <div class="w330 fl mR10 boost_img">
        <a href="/case/{{$cases[3]->id}}" class="caseo_link">
          <img src="{{$cases[3]->thumbnail}}">
          <span class="mask">&nbsp;</span>
          <span class="txt">{{$cases[3]->title}}</span>
        </a>
        <span class="bk10">&nbsp;</span>
        <a href="/case/{{$cases[0]->id}}" class="caseo_link">
          <img src="{{$cases[0]->thumbnail}}">
          <span class="mask">&nbsp;</span>
          <span class="txt">{{$cases[0]->title}}</span>
        </a>
      </div>
      <div id="slideBoxcp" class="slideBoxcp fl mR10">
        <div class="hd">&nbsp;</div>
        <div class="bd">
          <ul class="boost_img">
            @foreach( $cases as $case )
            <li>
              <a href="/case/{{$case->id}}">
                <img src="{{$case->thumbnail}}">
                <div class="txt">
                  <span class="name">{{$case->name}}</span>
                  <span class="btn">查看更多</span>
                </div>
                <span class="mask_black">&nbsp;</span>
              </a>
            </li>
            @endforeach
          </ul>
        </div>
        <a class="prev" href="javascript:void(0)"></a>
        <a class="next" href="javascript:void(0)"></a>
      </div>
      <script type="text/javascript">jQuery(".slideBoxcp").slide({mainCell:".bd ul",autoPlay:true});</script>
      <div class="w330 fl boost_img">
        <a href="/case/{{$cases[1]->id}}" class="caseo_link">
          <img src="{{$cases[1]->thumbnail}}">
          <span class="mask">&nbsp;</span>
          <span class="txt">{{$cases[1]->title}}</span>
        </a>
        <span class="bk10">&nbsp;</span>
        <a href="{{$cases[2]->id}}" class="caseo_link">
          <img src="{{$cases[2]->thumbnail}}">
          <span class="mask">&nbsp;</span>
          <span class="txt">{{$cases[2]->title}}</span>
        </a>
      </div>
    </div>
    <span class="bk70">&nbsp;</span>
  </div>
</div>
<!-- brand -->
<div class="w1160 clearfix">
  <span class="bk50">&nbsp;</span>
  <div class="ho_tit_all" >
    <h2><a href="/brand">cooperative brand</a></h2>
    <h3><a href="/brand">合作品牌</a></h3>
    <p>优选品牌，厂价直供，捍卫居家品质</p>
  </div>
  <span class="bk40">&nbsp;</span>
  <ul class="brandout clearfix">
    @foreach( $brands as $brand )
    <li><a href="/brand"><img src="{{$brand->thumbnail}}" alt=""></a></li>
    @endforeach
  </ul>
</div>
<span class="bk70">&nbsp;</span>
<!-- service -->
<div class="serout">
  <div class="w1160">
    <span class="bk50">&nbsp;</span>
    <div class="ho_tit_all" >
      <h2><a href="/service">service center</a></h2>
      <h3><a href="/service">服务中心</a></h3>
      <p>颠覆行业潜规则，为难自己，成就客户！</p>
    </div>
    <span class="bk40">&nbsp;</span>
    <ul class="list clearfix">
      @foreach( $services as $service )
      <li>
        <h2>{{$service->title}}</h2>
        <p>{{$service->introduce}}</p>
      </li>
      @endforeach
    </ul>
    <span class="bk70">&nbsp;</span>
  </div>
</div>
<!-- news -->
<div class="w1160 clearfix">
  <span class="bk50">&nbsp;</span>
  <div class="ho_tit_all" >
    <h2><a href="/news">news center</a></h2>
    <h3><a href="/news">新闻中心</a></h3>
    <p>实时掌握最新资讯和兄弟动态</p>
  </div>
  <span class="bk40">&nbsp;</span>
  <div class="clearfix">
      <div class="picScroll-leftgui fr">
        <div class="hd">
          <a class="next"></a>
          <a class="prev"></a>
        </div>
        <div class="bd">
          <ul class="picList boost_img">
            @foreach( $newss[1] as $article )
            <li>
              <a href="/news/{{$article->id}}">
                <span class="pic"><img src="{{$article->thumbnail}}" alt="" /></span>
                <span class="mask_black">&nbsp;</span>
                    <p>{{$article->title}}</p>
              </a>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
      <script type="text/javascript">
      jQuery(".picScroll-leftgui").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click"});
      </script>
      <a href="/news/category/15" class="guide_tit fl"><img src="images/guide_1.jpg"></a>
  </div>
  <span class="bk10">&nbsp;</span>
  <div class="clearfix">
      <div class="w980 fr">
        <div class="clearfix">
          <div class="guideout fl mR10">
            <span class="pic"><img src="{{$newss[0][0]->thumbnail}}"></span>
            <span class="mask">&nbsp;</span>
            <div class="txt">
              <h2><a href="/news/category/{{$newss[0][0]->id}}">{{$newss[0][0]->title}}</a></h2>
            </div>
          </div>
          <div class="guideout fl mR10">
            <span class="pic"><img src="{{$newss[0][1]->thumbnail}}"></span>
            <span class="mask">&nbsp;</span>
            <div class="txt">
              <h2><a href="/news/category/{{$newss[0][1]->id}}">{{$newss[0][1]->title}}</a></h2>
            </div>
          </div>
          <div class="guideout fl">
            <span class="pic"><img src="{{$newss[0][3]->thumbnail}}"></span>
            <span class="mask">&nbsp;</span>
            <div class="txt">
              <h2><a href="/news/category/{{$newss[0][3]->id}}">{{$newss[0][3]->title}}</a></h2>
            </div>
          </div>
        </div>
      </div>
    <a href="/news" class="guide_tit fl"><img src="images/guide_2.jpg"></a>
  </div>
</div>
<span class="bk50">&nbsp;</span>
<!-- footer -->
@endsection