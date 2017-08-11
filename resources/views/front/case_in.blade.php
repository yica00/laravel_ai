@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <p>------&nbsp;&nbsp;typical case&nbsp;&nbsp;------</p>
      <h2><span>典</span><span>型</span><span>案</span><span>例</span></h2>
    </div>
  </div>
</div>

<!--  -->
<div class="wap_box">

    <!-- 内容 -->
    <span class="bk50">&nbsp;</span>
   <div class="news_dis">
    <div class="w1160 clearfix">
        <div class="top">
          <h3 class="tit">{{$article->title}}</h3>
           <p class="protime">上传时间：<em>{{$article->created_at}}</em> <span class="pL10">来源：<i>兄弟建材</i></span></p>
        </div>
        </div>
        <div class="p_style">
        <div class="w1160 clearfix">
                {!! $article->comtent !!}
          </div>
          </div> 
          <div class="backpre clearfix">
              @if( $up_down['1'] )<a href="/case/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
              @if( $up_down['2'] ) <a href="/case/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
              <a href="/case/">返回上级目录</a>
          </div>
    </div>
    <!-- end -->

</div>
<span class="bk50">&nbsp;</span>
<!-- footer -->
@endsection