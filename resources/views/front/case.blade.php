@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;工程案例&nbsp;&nbsp;--</h2>
        <p>Engineering case</p>
      </div>
  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <ul class="case_out_list clearfix boost_img">
      @foreach( $articles as $article )
    <li>
      <a href="/case/{{$article->id}}">
        <div class="pic">
          <img src="{{$article->thumbnail}}" alt="" />
        </div>
        <p>{{$article->title}}</p>
      </a>
    </li>
      @endforeach
  </ul>
    <div class="pageJump clearfix">
      <div class="number">
        @if( $pages['pre_page']  )
          <span class="disabled"><a href="/case">首页</a></span>
          <span class="disabled"><a href="/case?page={{ $pages['pre_page'] }}">上一页</a></span>
        @endif
        @if( $pages['next_page'] )
          <span class="disabled"><a href="/case?page={{ $pages['next_page'] }}">下一页</a></span>
          <span class="disabled"><a href="/case?page={{ $pages['total_page'] }}">尾页</a></span>
        @endif
      </div>
    </div>
    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>


<!-- footer -->
@endsection