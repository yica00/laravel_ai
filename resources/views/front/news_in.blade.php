@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <h2>Nutrition and health</h2>
      <p>营养健康</p>
      <div class="line">&nbsp;</div>
    </div>
  </div>
</div>
<span class="bk30">&nbsp;</span>
<!-- start -->
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div class="honor_dis clearfix">
      <div class="tit">
        <h2>{{$article->title}}</h2>
        <p>上传时间：<em>{{$article->created_at}}</em> <span class="pL10">来源：<i>李记酸菜鸡</i></span></p>
      </div>
      <div class="p_style">
          {!! $article->comtent !!}
      </div>
    </div>
    <div class="backpre clearfix">
        @if( $up_down['1'] )<a href="/news/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
        @if( $up_down['2'] ) <a href="/news/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
        <a href="/news">返回上级目录</a>
    </div>
    <!-- end -->
  </div>  
</div>
<span class="bk60">&nbsp;</span>
<!-- end -->
@endsection