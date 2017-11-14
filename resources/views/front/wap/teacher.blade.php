@extends('front.wap.base')
@section('header')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">明星师资</a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
  </div>
@endsection
@section('content')
<!-- start -->
<div class="list_mode">
  <ul class="team_list_o clearfix">
    @foreach( $teams as $team )
    <li class="col-xs-4">
      <a href="/wap/team/{{$team->id}}">
        <span class="pic"><img src="{{$team->photo}}" alt=""></span>
        <div class="txt">
          <h2>{{$team->name}}</h2>
          <p>{{$team->title}}</p>
        </div>
      </a>
    </li>
    @endforeach
  </ul>
</div>
{{ $teams->links() }}
<!-- end -->
<!-- online_out -->
@endsection