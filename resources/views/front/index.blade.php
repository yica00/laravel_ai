@extends('front.base')
@section('content')
<!-- banner -->
<div id="slideBox" class="slideBox">
  <div class="hd">&nbsp;</div>
  <div class="bd">
    <ul>
      @foreach( $slider as $slider )
      <li><a href="" style="background:url({{$slider->thumbnail}}) center no-repeat;">&nbsp;</a></li>
      @endforeach
    </ul>
  </div>
  <a class="prev" href="javascript:void(0)"></a>
  <a class="next" href="javascript:void(0)"></a>
</div>
<script type="text/javascript">jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});</script>
<!-- aboutout -->
<div class="w1160">
  <span class="bk50">&nbsp;</span>
  <div class="ho_tit_all">
    <a href="/about">
      <img src="/images/ho_tit_1.png">
      <p>79年传承，专治鼻炎</p>
    </a>
  </div>
  <span class="bk30">&nbsp;</span>
  <div class="aboutout">
    {!! $about->comtent !!}
  </div>
  <span class="bk60">&nbsp;</span>
</div>
<!-- treatment -->
<div class="bg_e8f2ff">
  <div class="w1160 clearfix">
    <span class="bk50">&nbsp;</span>
    <div class="ho_tit_all">
      <a href="/treatment">
        <img src="/images/ho_tit_2.png">
        <p>祖传秘方，治疗精准，效果显著</p>
      </a>
    </div>
    <span class="bk30">&nbsp;</span>
    <div class="treatmentout clearfix">
      @foreach( $treatments as $trt )
      <dl class="clearfix">
        <dd>
          <h2>{{$trt->title}}</h2>
          <p>{{$trt->introduce}}</p>
        </dd>
        <dt class="boost_img"><img src="{{$trt->thumbnail}}"></dt>
      </dl>
      @endforeach
    </div>
  </div>
  <span class="bk60">&nbsp;</span>
</div>
<!-- doctorout -->
<div class="w1160">
  <span class="bk50">&nbsp;</span>
  <div class="ho_tit_all">
    <a href="/doctor">
      <img src="images/ho_tit_3.png">
      <p>39年坐诊经验，立足中医鼻炎治疗技术前沿</p>
    </a>
  </div>
  <span class="bk30">&nbsp;</span>
  <div class="doctorout clearfix">
    <a href="/doctor" class="doc fr"><img src="images/doctor.png"></a>
    <div class="w800 fl">
      <span class="bk40">&nbsp;</span>
      <div class="clearfix"> 
        <div class="pro fr">
          @foreach( $doctor[1] as $doc )
          <dl class="ddli">
            <dt>{{$doc->title}}</dt>
            <dd>{{$doc->introduce}}</dd>
          </dl>
          <span class="bk30">&nbsp;</span>
          @endforeach
        </div>
        <div class="dis fl">
          <h2>徐如祥<span>坐诊医师</span></h2>
          <p class="time">出诊时间：<br/>{{$doctor[0]->link}}</p>
          <ul class="honor">
            @foreach( explode(',',$doctor[0]->introduce) as $intr )
            <li>{{$intr}}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
  <span class="bk60">&nbsp;</span>
</div>
<!-- caseout -->
<div class="bg_e8f2ff">
  <div class="w1160 clearfix">
    <span class="bk50">&nbsp;</span>
    <div class="ho_tit_all">
      <a href="/treatment">
        <img src="images/ho_tit_4.png">
        <p>百例康复患者见证，患者可以信赖的中医</p>
      </a>
    </div>
    <span class="bk30">&nbsp;</span>
    <div class="picScroll-left">
      <div class="hd">
        <a class="next"></a>
        <a class="prev"></a>
      </div>
      <div class="bd">
        <ul class="picList filter_img">
          @foreach( $cases as $case )
          <li>
            <a href="/case/{{$case->id}}">
              <div class="pic"><img src="{{$case->thumbnail}}" class="img_1"><img src="/images/watermark.png" class="img_2"></div>
              <div class="txt">
                <h3>杨氏鼻炎成功案例之</h3>
                <h2></h2>
                <p><span>康复者</span>{{$case->title}}</p>
                <p><span>症状</span>{{$case->link}}</p>
                <p><span>治疗方案</span>{{$case->introduce}}</p>
              </div>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    <script type="text/javascript">
    jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",vis:2,trigger:"click"});
    </script>
  </div>
  <span class="bk60">&nbsp;</span>
</div>
<!-- newsout -->
<div class="w1160 clearfix">
  <span class="bk50">&nbsp;</span>
  <div class="ho_tit_all">
    <a href="/news"><img src="/images/ho_tit_5.png"></a>
  </div>
  <span class="bk30">&nbsp;</span>
  <div class="clearfix">
    <div class="txtScroll-top fr">
      <div class="hd">&nbsp;</div>
      <div class="bd">
        <ul class="infoList">
          @foreach( $newss[1] as $news )
          <li>
            <a href="/news/{{$news->id}}" class="clearfix">
              <div class="dl_r fr">
                <h2  class="txt_elip">{{$news->title}}</h2>
                <p class="txt_elip">
                  {{$news->introduce}}
                </p>
              </div>
              <div class="dl_l fl">
                <span class="date">{{  mb_substr($news->created_at,0,4) }}</span>
                <span class="month">{{  mb_substr($news->created_at,5,5) }}</span>
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
          @foreach( $newss[0] as $news )
          <li>
            <a href="/news/{{$news->id}}">
              <span class="pic"><img src="{{$news->thumbnail}}"></span>
              <div class="txt">
                <p class="p1">
                  {{$news->introduce}}
                </p>
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
  <span class="bk60">&nbsp;</span>
</div>
<!-- footer -->
@endsection