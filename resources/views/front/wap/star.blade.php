@extends('front.wap.base')
@section('header')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">走进片场</a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
  </div>
@endsection
@section('content')
<!-- start -->
<div class="list_mode">
  <div class="video_list clearfix">
    @foreach( $articles as $arti )
    <div class="col-xs-6">
      <a href="/wap/star/{{$arti->id}}"><div class="pic"><img src="{{$arti->thumbnail}}" alt=""></div>
        <div class="txt">{{$arti->title}}</div>
      </a>
    </div>
    @endforeach
  </div>
</div>
{{$articles->links()}}
<!-- end -->
<!-- online_out -->
@endsection