@extends('front.wap.base')
@section('header')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">学员作品</a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
  </div>
@endsection
@section('content')
<!-- start -->
<div class="list_mode">
  <div class="workin_list clearfix">
    @foreach( $articles as $article )
    <div class="col-xs-6">
      <a href="/wap/work/{{$article->id}}"><div class="pic"><img src="{{$article->thumbnail}}" alt=""></div>
        <div class="txt">{{$article->title}}</div>
      </a>
    </div>
    @endforeach
  </div>
</div>
{{ $articles->links() }}
<!-- end -->
<!-- online_out -->
@endsection