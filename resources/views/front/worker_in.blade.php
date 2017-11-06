@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <h2>Service team</h2>
      <p>服务团队</p>
    </div>
    <span class="bk20">&nbsp;</span>
    <ul class="sublist">
      <li  @if( $team->cate == 1 ) class="on" @endif><a href="/team/design">设计团队</a></li>
      <li @if( $team->cate == 2 ) class="on" @endif ><a href="/team/supervise">工程监理</a></li>
    </ul>
  </div>
</div>
<div class="wap_box">
  <span class="bk40">&nbsp;</span>
  <div class="w1160 clearfix">
  <!-- start -->
  <div class="txt_model team_dis clearfix">
      <div class="pic fl">
        <img src="{{$team->photo}}">
      </div>
      <div class="txt fr">
        <h2 class="clearfix"><span class="fr">{{$team->title}}</span>{{$team->name}}</h2>
        <dl class="clearfix">
          <dt>从业年限</dt>
          <dd>{{$team->work_age}}年</dd>
        </dl>
        <dl class="clearfix">
          <dt>施工理念</dt>
          <dd>{{$team->design_concept}}</dd>
        </dl>
        <dl class="big clearfix">
          <dt>主要工地</dt>
          <dd>{{$team->introduce}}</dd>
        </dl>
      </div>
  </div>
  <div class="teamcase">
     <h2 class="title">监理工地</h2>
     <span class="bk30">&nbsp;</span>
    <ul class="projin_list clearfix">
      @foreach( $team->rcases as $case )
    <li><a href="/case/{{$case->id}}"><img src="{{$case->thumbnail}}"><div class="txt">{{$case->title}}</div></a></li>
      @endforeach
  </ul>
  </div>
  <!-- end -->
  </div>
  <span class="bk40">&nbsp;</span>
</div>
@endsection