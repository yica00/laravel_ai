@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <h2>construction in progress</h2>
      <p>在建工程</p>
    </div>
  </div>
</div>
<div class="wap_box">
  <span class="bk40">&nbsp;</span>
  <div class="w1160 clearfix">
  <!-- start -->
  <ul class="projin_list clearfix">
      @foreach( $articles as $arti )
    <li><a href="/project/{{$arti->id}}"><img src="{{$arti->thumbnail}}"><div class="txt">{{$arti->title}}</div></a></li>
      @endforeach
  </ul>
  <div class="pageJump clearfix">
      <div class="number">
          @if( $pages['pre_page']  )
              <span class="disabled"><a href="/project">首页</a></span>
              <span class="disabled"><a href="/project?page={{ $pages['pre_page'] }}">上一页</a></span>
          @endif
          @if( $pages['next_page'] )
              <span class="disabled"><a href="/project?page={{ $pages['next_page'] }}">下一页</a></span>
              <span class="disabled"><a href="/project?page={{ $pages['total_page'] }}">尾页</a></span>
          @endif
      </div>
    </div>
  <!-- end -->
  </div>
  <span class="bk40">&nbsp;</span>
</div>
@endsection