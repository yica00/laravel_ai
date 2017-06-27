@extends('front.base')
@section('content')
<!--main -->
<div class="wap_big_box">
  <!-- bread -->
  <!--<div class="bread">
      <p class="page_nav">
        <a href="about.html">神鹰简介</a><a href="team.html" class="on">教练团队</a><a href="honor.html">荣誉资质</a>
      </p>
   </div>   -->
  <div class="w1160 clearfix"> 
    <span class="bk30">&nbsp;</span>
    <div class="wap_box">
    <!-- start -->
    <div class="planout">
      <ul class="list clearfix">
        @foreach( $plans as $plan )
          <li>
            <a href="/plan/{{  $plan->id }}">
              <span class="pic"><img src="{{  $plan->thumbnail }}" alt="" /></span>
              <div class="txt">
                <h2>{{  $plan->title }}</h2>
                <span>了解更多</span>
              </div>
            </a>
          </li>
        @endforeach

      </ul>
    </div>
    <span class="bk30">&nbsp;</span>
    <div class="pageJump clearfix">
        <div class="number">
          {{ $plans->links()  }}
            {{--<span class="disabled"><a href="">首页</a></span>--}}
            {{--<span class="disabled"><a href="">上一页</a></span>--}}
            {{--<span class="disabled"><a href="">下一页</a></span>--}}
            {{--<span class="disabled"><a href="">末页</a></span>--}}
        </div>
    </div>
    <span class="bk60">&nbsp;</span>
    <!-- end -->
    </div>
  </div>
  
</div>
@endsection