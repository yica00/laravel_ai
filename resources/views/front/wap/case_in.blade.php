@extends('front.wap.base')
<style>
  #xxx img{
    width: 100vh;height: auto;
  }
</style>
@section('head')
  <div class="header">
    <a href="/wap/case" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">案例</a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
  </div>
@endsection
@section('content')
<!-- start -->
<div class="case_mode">
  <h2 class="kc_bt">{{$article->title}}</h2>
  <div class="xix">
    @foreach( explode(',',$article->introduce) as $k=>$intro )
      <p class="p{{ $k+1 }}">{{$intro}}</p>
    @endforeach
  </div>
  <span class="bk20">&nbsp;</span>
  <div class="pic">
    <img src="{{$article->thumbnail}}">
  </div>
  <span class="bk20">&nbsp;</span>
  <div class="list clearfix">
    <div class="col-xs-6">
      <div class="img"><img src="{{$article->cases[0][0]}}" alt=""></div>
      <div class="txt">before</div>
    </div>
    <div class="col-xs-6">
      <div class="img"><img src="{{$article->cases[0][1]}}" alt=""></div>
      <div class="txt">after</div>
    </div>
  </div>
  <span class="bk10">&nbsp;</span>
  
  <div class="dis">
    <h2>案例详情</h2>
    <div class="tit" id="xxx">
      {!! $article->comtent !!}
    </div>
  </div>
</div>
<!-- end -->
<!-- 3 -->
@endsection