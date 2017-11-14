@extends('front.wap.base')
@section('header')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">{{$article->title}}<span class=""></span></a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
    <div id="overlay"></div>
    <div id="win">
      <ul class="dropdown">
        <li class="on"><a href="/wap/about">品牌简介</a></li>
        <li><a href="/wap/culture">企业文化</a></li>
        <li><a href="/wap/video">视频中心</a></li>
        <li><a href="/wap/compus">联合校区</a></li>
      </ul>
    </div>
  </div>
@endsection
@section('content')
<!-- start -->
<div class="txt_mode">
{!! $article->comtent !!}
</div>
<!-- end -->
<!-- online_out -->
@endsection