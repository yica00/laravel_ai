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
          <a href="/company_news"  @if( $article->pid == 29 ) class="on" @endif>公司新闻</a><a href="/industy_news" @if( $article->pid == 30 ) class="on" @endif>行业资讯</a>
      </p>
  </div>  
</div> 
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div class="news_dis">
        <div class="top">
       <h3 class="tit">{{ $article->title }}</h3>
        <p class="protime">上传时间：<em>{{ $article->created_at }}</em> <span class="pL10">来源：<i>星维生物</i></span></p>
         </div>
        <div class="p_style">
              <img src="{{ $article->thumbnail }}" style="margin:0 auto 20px;display:block;">
             {!! $article->comtent  !!}
          </div>
          <div class="backpre clearfix">      
              <a href="/news/{{ $article->id-1 }}" rel="next">上一篇</a>
              <a href="/news/{{ $article->id+1 }}" rel="prev">下一篇</a>
              <a href="/news">返回上级目录</a>
          </div>
    </div> 
    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>
<!-- contact_out -->
@endsection