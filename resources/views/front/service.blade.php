@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;服务中心&nbsp;&nbsp;--</h2>
        <p>service</p>
      </div>
      <p class="page_nav clearfix">
        <a href="/service"  @if( $sty=='service' ) class="on" @endif>服务流程</a>
        <a href="/promise"  @if( $sty=='promise' ) class="on" @endif>承诺保障</a>
        <a href="/scence"  >安装现场</a>
      </p>
  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- start -->
    {!! $article->comtent !!}
    <!-- end -->
  </div>
  <span class="bk60">&nbsp;</span>
</div>
<!-- index_list -->
@endsection