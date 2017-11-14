@extends('front.wap.base')
@section('header')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">新闻动态</a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
  </div>
@endsection
@section('content')
<!-- start -->
<div class="list_mode">
  <ul class="news_o_list clearfix">
    @foreach( $articles as $article )
    <li>
      <a href="/wap/news/{{$article->id}}" class="clearfix">
        <div class="col-xs-4 ">
          <span class="pic"><img src="{{$article->thumbnail}}"></span>
        </div>
        <div class="col-xs-8 ">
          <div class="txt">
            <h2>{{$article->title}}</h2>
            <p>{{$article->introduce}}</p>
          </div>
        </div>
      </a>
    </li>
    @endforeach
  </ul>
</div>
{{$articles->links()}}
<!-- end -->
<!-- online_out -->
@endsection