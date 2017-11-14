@extends('front.wap.base')
@section('header')
  <div class="header">
    <a href="/wap/teacher" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">明星师资</a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
  </div>
@endsection
@section('content')
<!-- start -->
<div class="team_indis">
  <div class="top">
    <span class="pic"><img src="{{$team->photo}}"></span>
    <h2>{{$team->name}}</h2>
    <h3>{{$team->title}}</h3>
  </div>
  <div class="bot">
    <dl class="dl_1">
      <dd>
        @foreach( explode(',',$team->introduce) as $item )
        <p>{{$item}}</p>
        @endforeach
      </dd>
    </dl>
    <span class="bk20">&nbsp;</span>
    <dl>
      <dt><span>典型作品</span></dt>
      <dd>
        <div class="workin_list clearfix">
          @foreach( $team->rcases as $arti )
          <div class="col-xs-6">
            <a href="/wap/tcompus/{{$arti->id}}" ><div class="pic"><img src="{{$arti->thumbnail}}" alt=""></div>
              <div class="txt">{{$arti->title}}</div>
            </a>
          </div>
          @endforeach
        </div>
      </dd>
    </dl>
  </div>
</div>
<!-- end -->
<!-- online_out -->
@endsection