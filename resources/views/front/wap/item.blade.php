@extends('front.wap.base')
@section('head')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">{{ $article->title }}<span class=""></span></a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
    <div id="overlay"></div>
    <div id="win">
      <ul class="dropdown">
        @foreach( $cates as $ks=>$navs )
          <li><a href="/wap/item/category/{{$navs->id}}" >{{$navs->title}}</a></li>
        @endforeach
      </ul>
    </div>
  </div>

@endsection
@section('content')
<!-- start -->
<div class="xm_banner">
  <img src="{{$article->comtent[0]}}">
</div>
<span class="bk20">&nbsp;</span>
<div class="item_mode">
  @foreach( $article->articles as $arti )
  <div class="dis">
    <h2>{{$arti->title}}</h2>
    <div class="txt">
      {!! $arti->comtent !!}
    </div>
  </div>
  <span class="bk20">&nbsp;</span>
  @endforeach


  <div class="dis">
    <h2>成功案例</h2>
    <span class="bk20">&nbsp;</span>
    @foreach( $article->cases->articles as $arti )
    <div class="list clearfix">
      <div class="col-xs-6">
        <div class="img"><img src="{{$arti[0]}}" alt=""></div>
        <div class="txt">before</div>
      </div>
      <div class="col-xs-6">
        <div class="img"><img src="{{$arti[1]}}" alt=""></div>
        <div class="txt">after</div>
      </div>
    </div>
    <span class="bk20">&nbsp;</span>
    @endforeach
  </div>
  <span class="bk20">&nbsp;</span>
  <div class="clearfix">
    <div class="it_bt">项目医生</div>
    <div class="swiper-container-2">
      <div class="swiper-wrapper">

          <div class="swiper-slide">
            <a href="{{ $article->team->link }}" class="team_o_box">
              <img src="{{ $article->team->thumbnail }}">
              <div class="txt">
                <h2>{{ $article->team->title }}</h2>
                <div class="dis">
                  {!! $article->team->comtent !!}
                </div>
              </div>
            </a>
          </div>

      </div>
    </div>
  </div>
</div>
<!-- end -->
<!-- 3 -->
<span class="bk40">&nbsp;</span>
@endsection