@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <p>------&nbsp;&nbsp;service center&nbsp;&nbsp;------</p>
      <h2><span>服</span><span>务</span><span>中</span><span>心</span></h2>
    </div>
  </div>
</div>
<!--  -->
<div class="wap_box">

  <div class="w1160 clearfix">
    <!-- 内容 -->
    <span class="bk50">&nbsp;</span>
    {!! $article->comtent !!}
    <!-- end -->
  </div>  
  
</div>
<span class="bk50">&nbsp;</span>
<!-- footer -->
@endsection