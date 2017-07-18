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
    <div class="news_dis">
      <div class="top">
        <h3 class="tit">{{ $article->title }}</h3>
        <p class="protime"><em>{{ $article->created_at }}</em> <span class="pL10"><i>虹霖电梯</i></span></p>
      </div>
      <div class="p_style">
          {!! $article->comtent !!}
      </div>

      <div class="backpre clearfix">
          @if( $up_down['1'] )<a href="/case/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
          @if( $up_down['2'] ) <a href="/case/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
          <a href="/case">返回上级目录</a>
      </div>
          <span class="bk30">&nbsp;</span>
    </div>

    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>


<!-- footer -->
@endsection