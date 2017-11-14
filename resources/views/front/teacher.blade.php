@extends('front.base')
@section('content')
<!-- bread -->
<span class="bk30">&nbsp;</span>
<div class="bread">
  <div class="w1280 clearfix">
    <div class="in_tit_all">
      <div class="bt"><span>Star   <b>teachers</b></span>/ 明星师资</div>
    </div>
  </div>
</div>
<div class="wap_box">
  <div class="w1280 clearfix">
  <!-- start -->
    <ul class="team_list_o clearfix team_list_in">
        @foreach( $teams as $team )
        <li>
          <a href="/team/{{$team->id}}">
            <span class="pic"><img src="{{$team->photo}}" alt="" /></span>
            <div class="txt">
              <h2>{{$team->name}}</h2>
              <p>{{$team->title}}</p>
            </div>
          </a>
        </li>
        @endforeach
    </ul> 

  </div>
  <!-- end -->
  </div>
  <span class="bk80">&nbsp;</span>
</div>
<!-- item -->
@endsection