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
<ul class="news_in_list clearfix">
  @foreach( $articles as $article )
  <li>
    <a href="/wap/news/{{$article->id}}">
      <div class="pic">
          <img src="{{$article->thumbnail}}" alt="">
      </div>
      <div class="txt">
        <h2>{{$article->title}}</h2>
        <span>查看更多</span>
      </div>
    </a>
  </li>
 @endforeach
</ul>

{{ $articles->links() }}
<!-- end -->
<!-- 3 -->
<span class="bk40">&nbsp;</span>
@endsection