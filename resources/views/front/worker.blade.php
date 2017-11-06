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
      <li  @if( $id == 1 ) class="on" @endif ><a href="/team/design">设计团队</a></li>
      <li @if( $id == 2 ) class="on" @endif ><a href="/team/supervise">工程监理</a></li>
    </ul>
  </div>
</div>
<div class="wap_box">
  <span class="bk40">&nbsp;</span>
  <div class="w1160 clearfix">
  <!-- start -->
  <ul class="work_inlist clearfix">
    @foreach( $teams as $team )
    <li><a href="/worker/{{$team->id}}"><img src="{{$team->photo}}"><div class="txt">姓名：<span>{{$team->name}}</span>   |   工作年限：<span>{{$team->work_age}}年</span></div></a></li>
    @endforeach
  </ul>
  <div class="pageJump clearfix">
      <div class="number">
        @if( $pages['pre_page']  )
          <span class="disabled"><a href="@if( $id==1  )/team/design @elseif( $id==2  )/team/supervise @endif ">首页</a></span>
          <span class="disabled"><a href="@if( $id==1  )/team/design?page={{ $pages['pre_page'] }} @elseif( $id==2  )/team/supervise?page={{ $pages['pre_page'] }} @endif">上一页</a></span>
        @endif
        @if( $pages['next_page'] )
          <span class="disabled"><a href="@if( $id==1  )/team/design?page={{ $pages['next_page'] }} @elseif( $id==2  )/team/supervise?page={{ $pages['next_page'] }} @endif">下一页</a></span>
          <span class="disabled"><a href="@if( $id==1  )/team/design?page={{ $pages['total_page'] }} @elseif( $id==2  )/team/supervise?page={{ $pages['total_page'] }} @endif">尾页</a></span>
        @endif
      </div>
    </div>
  <!-- end -->
  </div>
  <span class="bk40">&nbsp;</span>
</div>
@endsection