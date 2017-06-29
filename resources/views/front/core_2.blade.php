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
        <a href="/core_technology" >产品优势</a><a href="/core_character" class="on">产品特点</a>
      </p>
  </div>  
</div> 
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div class="character">
      <div class="txt">
      <h2><a href="core_2.html">产品特点</a></h2>
      <span class="bk10">&nbsp;</span>
      {!! $article->comtent !!}
</div>
</div>
<!-- end -->
</div>
<span class="bk60">&nbsp;</span>
</div>
<!-- contact_out -->
@endsection