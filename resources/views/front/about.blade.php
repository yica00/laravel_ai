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
    <div class="wap_box">
    <!-- start -->
    <span class="bk10">&nbsp;</span>
    <div class="txt_model">
        {!! $article->comtent !!}}
    </div>
    <span class="bk10">&nbsp;</span>
    <!-- end -->
    </div>
  </div>
  
</div>
@endsection