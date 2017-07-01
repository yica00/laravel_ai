@extends('front.base')
@section('content')
<!-- start -->
<div class="bread">
  <div class="w1160 clearfix">
      <p class="page_nav clearfix">
        <a href="/driver" class="on">招募要求</a>
          <a href="/process">招募流程</a>
      </p>
  </div>  
</div>
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- start -->
    {!! $article->comtent !!}
    <!-- end -->
  </div>
</div>

<!-- end -->
@endsection