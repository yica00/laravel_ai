@extends('front.wap.base')
@section('head')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">{{$article->title}}<span class=""></span></a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
    <div id="overlay"></div>
    <div id="win">
      <ul class="dropdown">
        <li><a href="/wap/brand">品牌故事</a></li>
        <li><a href="/wap/culture">企业文化</a></li>
        <li><a href="/wap/environ">典雅环境</a></li>
        <li><a href="/wap/honor">依美荣誉</a></li>
      </ul>
    </div>
  </div>

@endsection
@section('content')
<!-- start -->
<div class="txt_mode_1">
  {!! $article->comtent !!}
</div>
<!-- end -->
<!-- 3 -->
@endsection