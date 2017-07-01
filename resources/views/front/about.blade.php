@extends('front.base')
@section('content')
<!-- start -->
<div class="bread">
  <div class="w1160 clearfix">
      <p class="page_nav clearfix">
         <a href="/about" @if( $sty ==1 ) class="on"  @endif>兴润简介</a><a href="/culture" @if( $sty ==2 ) class="on"  @endif>企业文化</a>
      </p>
  </div>  
</div>
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- start -->
    {!!  $article->comtent !!}
    <!-- end -->
  </div>
</div>

<!-- end -->
@endsection