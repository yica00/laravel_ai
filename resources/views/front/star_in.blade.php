@extends('front.base')
@section('content')
<!-- bread -->
<span class="bk30">&nbsp;</span>
<div class="bread">
  <div class="w1280 clearfix">
    <div class="in_tit_all">
      <div class="bt"><span>Into the  <b>studio</b></span>/ 走进片场</div>
    </div>
  </div>
</div>
<div class="wap_box">
  <div class="w1280 clearfix">
  <!-- start -->
  <div class="txt_model_2">
    <div class="top">{{$article->title}}</div>
    <div class="p_style">
      {!! $article->comtent !!}
    </div>
    <div class="backpre clearfix">
      @if( $up_down['1'] )<a href="/star/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
      @if( $up_down['2'] ) <a href="/star/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
      <a href="/star">返回上级目录</a>
    </div>
  </div>
  <!-- end -->
  </div>
  <span class="bk80">&nbsp;</span>
</div>
<!-- item -->
@endsection