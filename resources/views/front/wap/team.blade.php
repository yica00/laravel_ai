@extends('front.wap.base')
@section('head')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">专家</a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
  </div>
@endsection
@section('content')
<!-- start -->
<ul class="team_in_all clearfix">
  @foreach( $teams as $team )
  <li class="col-xs-6">
    <a href="/wap/team/{{$team->id}}">
      <div class="pic">
        <img src="{{$team->photo}}">
      </div>
      <div class="txt">
        <div class="tit"><span></span></div>
        <h2>{{$team->name}}</h2>
        <p>{{$team->title}}</p>
        <span class="btns">了解详情</span>
      </div>
    </a>
  </li>
  @endforeach
</ul>
<!-- end -->
<!-- 3 -->
<span class="bk40">&nbsp;</span>
@endsection