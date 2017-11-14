@extends('front.wap.base')
@section('header')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">{{$article->title}}<span class=""></span></a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
    <div id="overlay"></div>
    <div id="win">
      <ul class="dropdown">
        @foreach( $cates as $cate )
        <li class="on"><a href="/wap/item/{{$cate->id}}">{{$cate->title}}</a></li>
        @endforeach
      </ul>
    </div>
  </div>
@endsection
@section('content')
<!-- start -->
<div class="list_mode">
  <ul class="activlist clearfix">
    @foreach( $article->articles as $arti )
    <li>
      <a href="/wap/item/detail/{{$arti->id}}">
        <div class="pic"><img src="{{$arti->thumbnail}}"></div>
        <div class="txt">
          <h2>{{$arti->title}}</h2>
          <div class="line"></div>
          <p>学期:{{  explode(',',$arti->introduce)[0] }} | 学费：{{  explode(',',$arti->introduce)[1] }} | 开学日期：{{  explode(',',$arti->introduce)[2] }}</p>
        </div>
      </a>
    </li>
    @endforeach
  </ul>
</div>
<!-- end -->
<!-- online_out -->
@endsection