@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;核心技术&nbsp;&nbsp;--</h2>
        <p>core technology</p>
      </div>
      <p class="page_nav clearfix">
        <a href="/core_technology" class="on">产品优势</a><a href="/core_character">产品特点</a>
      </p>
  </div>  
</div> 
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div class="advantage"> 
        <a class="tit" href="core.html">
            {!! $article->comtent !!}
        </a>
        <span class="bk40">&nbsp;</span>
        <img src="{{ $article->thumbnail }}">
    </div>
    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>
<!-- contact_out -->
@endsection