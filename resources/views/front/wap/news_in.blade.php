@extends('front.wap.base')
@section('head')
    <div class="header">
        <a href="/wap/news" class="col-xs-1"><span class="back">&nbsp;</span></a>
        <a class="col-xs-10 ui-title tit" id="popmenu">动态</a>
        <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
    </div>
@endsection
@section('content')
<!-- start -->
<div class="news_dis">
  <div class="top">
    <h2 class="tit">{{$article->title}}</h2>
  </div>
  <div class="bot">
      {!! $article->comtent !!}
    </div>
</div>
<!-- end -->
<div class="backpre clearfix">
    @if( $up_down['1'] )<a href="/wap/news/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
    @if( $up_down['2'] ) <a href="/wap/news/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
    <a href="/wap/news">返回上级目录</a>
</div>
<!-- 3 -->
<span class="bk40">&nbsp;</span>
@endsection