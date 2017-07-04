@extends('front.base')
@section('content')
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
          <p>case</p>
        <h2>--&nbsp;&nbsp;案例&nbsp;&nbsp;--</h2>
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
  <div class="casein">
    <div class="w1160 clearfix">
      <div class="case_tit">
        <h2>{{ $article->title }}</h2>
        <p>{{ $article->link }}</p>
      </div>
      <div class="lit_img">
        <span><img src="{{ $article->thumbnail }}"></span>
      </div>
    </div>
    <div class="big_img">
      <div class="w1160 clearfix">
        <h2>WEB DETAIL</h2>
        {!! $article->comtent !!}
      </div>
    </div>
    <div class="w1160 clearfix">
      <div class="case_bot"><a href="/case">返回案例</a><a href="/" target="_blank">浏览网站</a></div>
    </div>
  </div> 
  
  <!-- 内容结束 -->
</div>
<span class="bk80">&nbsp;</span>
<!-- contactout -->
@endsection