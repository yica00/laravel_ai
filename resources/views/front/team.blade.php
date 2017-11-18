@extends('front.base')
@section('content')
<div class="warp_box">
  <div class="warp_bot">
    <div class="brd_tit_all">
      <span class="bk100">&nbsp;</span>
      <h2>专家</h2>
      <p>--- experts ---</p>
    </div>  
      <!-- start -->
      <!-- 1简介 -->
      <div class="w1280 clearfix">
        <span class="bk80">&nbsp;</span>
        <div class="team_txt_all clearfix">
          <div class="txt fr">
            <h2>{{$intros[0]->title}}</h2>
            <p class="p1">{{$intros[0]->introduce}}</p>
            <p class="p2">Craftsmanship sculpts beauty</p>
            <img src="/images/case_tit.png" class="p3">
            <div class="dis">
              {!! $intros[0]->comtent !!}
            </div>
          </div>
          <div class="pic fl">
            <img src="{{$intros[0]->thumbnail}}">
          </div>
        </div>
        <span class="bk30">&nbsp;</span>
        <div class="team_txt_all clearfix">    
          <div class="pic fr">
            <img src="{{$intros[1]->thumbnail}}">
          </div>
          <div class="txt fl">
            <h2>{{$intros[1]->title}}</h2>
            <p class="p1">{{$intros[1]->introduce}}</p>
            <p class="p2">Heart to seek the beauty of charm</p>
            <img src="images/case_tit.png" class="p3">
            <div class="dis">
              {!! $intros[1]->comtent !!}
            </div>
          </div>
        </div>
        <span class="bk30">&nbsp;</span>
        <div class="bk_line">&nbsp;</div>
        <ul class="team_in_all clearfix">
          @foreach( $teams as $team )
          <li>
            <a href="/team/{{$team->id}}">
              <div class="pic">
                <img src="{{$team->photo}}">
              </div>
              <div class="txt">
                <div class="tit"><span>{{$team->title}}</span></div>
                <h2>{{$team->link}}</h2>
                {{--<p>依美整形美容主任</p>--}}
                <span class="btns">了解详情</span>
              </div>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
      <!-- end -->
      <span class="bk80">&nbsp;</span>
      <span class="bk100">&nbsp;</span>
  </div>
</div>
@endsection