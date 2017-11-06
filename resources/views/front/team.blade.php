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
      @foreach( session('header_nav') as $cate )
        @if( $cate->id == 3 )
          @foreach( $cate->articles as $art )
            <li class="
            @if( $art->link )
              @if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link )
                      on
              @endif
            @else
              @if( $art->id == $id ) on @endif
            @endif
                    ">
              <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" >{{$art->title}}</a>
            </li>
          @endforeach
        @endif
      @endforeach
    </ul>
  </div>
</div>
<div class="wap_box">
  <span class="bk40">&nbsp;</span>
  <div class="w1160 clearfix">
  <!-- start -->
  <ul class="team_inlist clearfix">
    @foreach( $teams as $team )
    <li>
      <a href="/team/{{$team->id}}">
        <span class="pic"><img src="{{$team->photo}}" alt="{{$team->name}}" /></span>
        <span class="ewm"><img src="{{$team->wx_img}}" alt="" /></span>
        <div class="txt">
          <h2>{{$team->name}}</h2>
          <span>查看详情</span>
        </div>
      </a>
    </li>
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