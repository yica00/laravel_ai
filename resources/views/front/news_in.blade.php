@extends('front.base')
@section('content')
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
          <p>news</p>
        <h2>--&nbsp;&nbsp;新闻&nbsp;&nbsp;--</h2>
      </div>
      <!--<p class="page_nav">
          <a href="case.html" class="on">中式</a>
          <a href="case.html">欧式</a>
          <a href="case.html">现代</a>
          <a href="case.html">地中海式</a>
       </p> -->
  </div>  
</div>
<!-- 内页 -->
<span class="bk100">&nbsp;</span>
<span class="bk100">&nbsp;</span>
<span class="bk10">&nbsp;</span>
<div class="wap_box">
<!-- 内容开始 -->
<div class="news_inbg">
<span class="bk50">&nbsp;</span>
  <div class="w1160 clearfix">
  
  <div class="news_dis">
    <div class="top">
      <h3 class="tit">{{ $article->title }}</h3>
      <p class="protime">上传时间：<em>{{ $article->created_at }}</em> <span class="pL10">来源：<i>诺航科技</i></span></p>
    </div>
    <div class="p_style">
          <img src="{{ $article->thumbnail }}" style="margin:0 auto 20px;display:block;">
        {!! $article->comtent !!}
      </div>
      <div class="backpre clearfix">
          @if( $up_down['1'] )<a href="/news/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
          @if( $up_down['2'] ) <a href="/news/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
          <a href="/{{$sty}}">返回上级目录</a>
      </div>
  </div>
  
  </div>
  </div>
  <!-- 内容结束 -->
</div>
<span class="bk80">&nbsp;</span>
<!-- contactout -->
@endsection