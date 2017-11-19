@extends('front.wap.base')
@section('head')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">设备</a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
  </div>
@endsection
@section('content')
<!-- start -->
<div class="equp_mode">
  <h2 class="kc_bt">{{$article->title}}</h2>
  <div class="img">
    <img src="images/sb1.jpg">
  </div>
  <span class="bk20">&nbsp;</span>
  {!! $article->comtent !!}
</div>
<!-- end -->
<!-- 3 -->
@endsection