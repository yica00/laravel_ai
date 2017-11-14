@extends('front.wap.base')
@section('header')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">视频中心<span class=""></span></a>
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
<div class="list_mode">
  <div class="video_list clearfix">
    @foreach( $articles as $article )
    <div class="col-xs-6">
      <a href="/wap/video/{{$article->id}}"><div class="pic"><img src="{{$article->thumbnail}}" ></div>
        <div class="txt" >{{$article->title}}</div>
      </a>
    </div>
    @endforeach
  </div>
</div>
{{$articles->links()}}
<!-- end -->
<!-- online_out -->
@endsection