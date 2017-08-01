@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">  
      <div class="top">
        <h2>--设计团队--</h2>
        <p><span>design team</span></p>
      </div>
    </div>
</div>
<span class="bk50">&nbsp;</span>
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <ul class="teamlist">
        @foreach( $teams as $team )
          <li>
            <a href="/team/{{$team->id}}">
            <img src="{{$team->photo}}" />
            <div class="txt"><h2>{{$team->name}}</h2><p class="p2">{{$team->title}}</p></div>
            </a>
          </li>
        @endforeach
        </ul>
    <div class="pageJump clearfix">
        <div class="number">
            @if( $pages['pre_page']  )
                <span class="disabled"><a href="/team">首页</a></span>
                <span class="disabled"><a href="/team?page={{ $pages['pre_page'] }}">上一页</a></span>
            @endif
            @if( $pages['next_page'] )
                <span class="disabled"><a href="/team?page={{ $pages['next_page'] }}">下一页</a></span>
                <span class="disabled"><a href="/team?page={{ $pages['total_page'] }}">尾页</a></span>
            @endif
        </div>
    </div>
    <!-- end -->
  </div>  
</div>
<span class="bk80">&nbsp;</span>
<!-- index_list -->
@endsection