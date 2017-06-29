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
          <a href="/company_news" >公司新闻</a><a href="/industy_news" class="on">行业资讯</a>
      </p>
  </div>  
</div> 
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <ul class="news_wap clearfix">
      @foreach($articles as $article )
        <li>
          <a href="/news/{{ $article->id }}">
            <img src="{{ $article->thumbnail }}" alt="">
            <div class="bot"><p class="time">{{ $article->created_at }}</p>
              <h2>{{ $article->title }}</h2>
              <p class="txt">
              </p></div>
          </a>
        </li>
      @endforeach


    </ul>
    <div class="pageJump clearfix">
        <div class="number">
            <span class="disabled"><a href="/news">首页</a></span>
            <span class="disabled"><a href="/news?page={{ $pages['pre_page'] }}">上一页</a></span>
            <span class="disabled"><a href="/news?page={{ $pages['next_page'] }}">下一页</a></span>
            <span class="disabled"><a href="/news?page={{ $pages['total_page'] }}">尾页</a></span>
        </div>
    </div>
    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>
<!-- contact_out -->
@endsection