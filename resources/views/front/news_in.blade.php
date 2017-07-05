@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;新闻中心&nbsp;&nbsp;--</h2>
        <p>news center</p>
      </div>
      <p class="page_nav clearfix">
        <a href="/news" class="on">公司新闻</a>
            <a href="/industry_news">行业资讯</a>
      </p>
  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <span class="bk50">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- start -->
    <div class="news_dis">
        <div class="top">
            <h3 class="tit">{{ $article->title }}</h3>
            <p class="protime">上传时间：<em>{{ $article->created_at }}</em><span class="pL10">来源：<i>嘉彩包装</i></span></p>
         </div>
        <div class="p_style">
            <img src="{{ $article->thumbnail }}" style="margin:0 auto 20px;display:block;">
            {!! $article->comtent !!}
          </div>
          <div class="backpre clearfix">
              @if( $up_down['1'] )<a href="/news/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
              @if( $up_down['2'] ) <a href="/news/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
              <a href="/{{$sty}}">返回上级目录</a>
          </div>
    </div> 
    <!-- end --> 
  </div>
  <span class="bk60">&nbsp;</span>
</div>
<span class="bk60">&nbsp;</span>
<!-- footer -->
@endsection