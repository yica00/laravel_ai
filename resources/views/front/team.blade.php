@extends('front.base')
@section('content')
<!--main -->
<div class="wap_big_box">
  <!-- bread -->
  <div class="bread">
      <p class="page_nav">
        <a href="about_us" class="on">神鹰简介</a><a href="team">教练团队</a><a href="honor">荣誉资质</a>
      </p>
  </div>  
  <div class="w1160 clearfix"> 
    <span class="bk30">&nbsp;</span>
    <div class="wap_box">
    <!-- start -->
    <ul class="teamlist clearfix">
      @foreach( $teams as $team )

        <li>
          <a href="/team/{{ $team->id  }}">
            <span class="pic"><img src="{{ $team->photo  }}"></span>
            <div class="txt">
              <h2>{{ $team->belong_to  }}</h2>
              <p>{{ $team->name  }}</p>
            </div>
          </a>
        </li>

      @endforeach

    <span class="bk30">&nbsp;</span>

    <div class="pageJump clearfix">
        <div class="number">
            <span class="disabled"><a href="/team">首页</a></span>
            <span class="disabled"><a href="/team?page={{  $page['pre_page'] }}">上一页</a></span>
            <span class="disabled"><a href="/team?page={{  $page['next_page'] }}">下一页</a></span>
            <span class="disabled"><a href="/team?page={{  $page['total_page'] }}">末页</a></span>
        </div>
    </div>
    <span class="bk60">&nbsp;</span>
    <!-- end -->
    </div>
  </div>
  
</div>
@endsection