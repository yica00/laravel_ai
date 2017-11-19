@extends('front.wap.base')
@section('head')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">专家</a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
  </div>
@endsection
@section('content')
<!-- start -->
<div class="team_mode">
  <div class="top">
    <span class="pic"><img src="{{$team->photo}}"></span>
    <h2>{{$team->name}}</h2>
    <h3>{{$team->title}}</h3>
  </div>
  <div class="honr">
      @foreach( explode(',',$team->honor) as $honor )
          <p>{{$honor}}</p>
      @endforeach
  </div>
  <span class="bk20">&nbsp;</span>
  <div class="dis">
    <h2>擅长项目</h2>
    <div class="txt">
        {{$team->good_at}}
    </div>
  </div>
  <span class="bk20">&nbsp;</span>
  <div class="dis">
    <h2>个人简介</h2>
    <div class="txt">
        {{$team->introduce}}
    </div>
  </div>
  <span class="bk20">&nbsp;</span>
  <div class="pho">
    <h2>手术照片</h2>
    <div class="swiper-container-5">
      <div class="swiper-wrapper">
          @foreach( $team->comtent as $img )
          <div class="swiper-slide">
              <img src="{{$img}}">
          </div>
          @endforeach
      </div>
    </div>
  </div>
</div>
<!-- end -->
<!-- 3 -->
@endsection