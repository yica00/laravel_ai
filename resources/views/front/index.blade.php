@extends('front.base')
@section('content')
<!-- banner -->
<div id="slideBox" class="slideBox">
  <div class="hd">&nbsp;</div>
  <div class="bd">
    <ul>
      @foreach( $slides as $slide )
      <li><a href="{{$slide->link}}" style="background:url({{$slide->thumbnail}}) center no-repeat;">&nbsp;</a></li>
      @endforeach
    </ul>
  </div>
  <a class="prev" href="javascript:void(0)"></a>
  <a class="next" href="javascript:void(0)"></a>
</div>
<script type="text/javascript">jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});</script>
<!-- lift -->
<div class="w1160 clearfix">
  <ul class="lift_list rotate_img clearfix">
    @foreach( $producets as $producet )
    <li>
      <a href="/product/category/{{$producet->id}}"><img src="{{$producet->thumbnail}}" alt="" />
      <p>{{$producet->title}}</p></a>
    </li>
    @endforeach
  </ul>
</div>
<!-- about_out -->
<div class="about_out">
  <div class="w1160">
    <span class="bk50">&nbsp;</span>
    <h2 class="ho_tit_all"><a href="/about"><img src="/images/ho_tit_1.png"></a></h2>
    <span class="bk50">&nbsp;</span>
    <div class="txt">
        {!! $about->comtent !!}
    </div>
    <span class="bk40">&nbsp;</span>
    <p class="btn_more"><a href="/about">&nbsp;</a></p>
    <span class="bk50">&nbsp;</span>
  </div>
</div>
<!-- service_item -->
<div class="service_item">
  <div class="w1160 clearfix">
    <span class="bk50">&nbsp;</span>
    <h2 class="ho_tit_all"><a><img src="/images/ho_tit_2.png"></a></h2>
    <span class="bk50">&nbsp;</span>
    <ul class="list clearfix boost_img">
      @foreach( $services as $servi )
      <li>
        <a href="{{$servi->link}}">
          <div class="pic"><img src="{{$servi->thumbnail}}"></div>
          <p>{{$servi->title}}</p>
        </a>
      </li>
      @endforeach
    </ul>
    <span class="bk50">&nbsp;</span>
  </div>
</div>
<span class="ho_ad_all ho_ad_1">&nbsp;</span>
<!-- case_out -->
<div class="w1160 clearfix">
  <span class="bk50">&nbsp;</span>
  <h2 class="ho_tit_all"><a href="/case"><img src="images/ho_tit_3.png"></a></h2>
  <span class="bk50">&nbsp;</span>
  <ul class="case_out_list clearfix boost_img">
    @foreach( $cases as $case )
    <li>
      <a href="/case/{{$case->id}}">
        <div class="pic">
          <img src="{{$case->thumbnail}}" alt="" />
        </div>
        <p>{{$case->title}}</p>
      </a>
    </li>
    @endforeach
  </ul>
  <span class="bk30">&nbsp;</span>
</div>
<span class="ho_ad_all ho_ad_2">&nbsp;</span>
<!-- news -->
<div class="w1160 clearfix">
  <span class="bk50">&nbsp;</span>
  <h2 class="ho_tit_all"><a href="/news"><img src="/images/ho_tit_5.png"></a></h2>
  <span class="bk50">&nbsp;</span>
  <div class="clearfix">
    <div class="txtScroll-top fr">
      <div class="hd">&nbsp;</div>
      <div class="bd">
        <ul class="infoList">
          @foreach( $newss as $news )
          <li>
            <a href="/news/{{ $news->id }}" class="clearfix">
              <div class="dl_r fr">
                <h2  class="txt_elip">{{ $news->title }}</h2>
                <p class="txt_elip">{{ mb_substr(getChanese($news->comtent),0,50)."..." }}</p>
              </div>
              <div class="dl_l fl">
                <span class="date">{{ mb_substr($news->created_at,0,4)  }}</span>
                <span class="month">{{ mb_substr($news->created_at,5,6)  }}</span>
              </div>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    <script type="text/javascript">
    jQuery(".txtScroll-top").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"top",autoPlay:true,vis:3});
    </script>
    <div id="slideBox_news" class="slideBox_news fl">
      <div class="hd hd_empty">&nbsp;</div>
      <div class="bd">
        <ul>
          @foreach( $recommends as $recommend )
          <li>
            <a href="/news/{{ $recommend->id }}">
              <span class="pic"><img src="{{ $recommend->thumbnail }}"></span>
              <div class="txt">
                <p class="p1">{{ $recommend->title }}</p>
                <p class="p2">{{ mb_substr(getChanese($recommend->comtent),0,50)."..." }}</p>
              </div>
              <em class="mask_black">&nbsp;</em>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
      <a class="prev" href="javascript:void(0)"></a>
      <a class="next" href="javascript:void(0)"></a>
    </div>
    <script type="text/javascript">jQuery("#slideBox_news").slide({mainCell:".bd ul",autoPlay:true});</script>
  </div>
</div>
<!-- brand -->
<div class="w1160 clearfix">
  <span class="bk50">&nbsp;</span>
  <h2 class="ho_tit_all"><a href="/brand"><img src="images/ho_tit_6.png"></a></h2>
  <span class="bk50">&nbsp;</span>
  <ul class="whactclient clearfix gray_img">
    @foreach( $brands as $brand )
      <li><a href="/brand"><img src="{{ $brand->thumbnail }}" alt=""></a></li>
    @endforeach
    </ul>
   <span class="bk50">&nbsp;</span>
</div>
<!-- footer -->
@endsection