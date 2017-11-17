@extends('front.base')
@section('content')
<div class="warp_box">
  <div class="warp_bot">
    <div class="brd_tit_all">
      <span class="bk100">&nbsp;</span>
      <h2>新闻动态</h2>
      <p>--- News dynamics  ---</p>
    </div>  
      <!-- start -->
      <div class="w1280 clearfix">
        <span class="bk60">&nbsp;</span>
        <ul class="newslist clearfix">
          @foreach( $articles as $article )
          <li>
              <a href="/news/{{$article->id}}">
                <span class="pic"><img src="{{$article->thumbnail}}" alt="{{$article->title}}"></span>
                <div class="txt">
                  <h2>{{$article->title}}</h2>
                  <span>了解更多</span>
                </div>
              </a>
            </li>
          @endforeach
        </ul>
        <div class="pageJump clearfix">
          <div class="number">
            @if( $pages['pre_page']  )
              <span class="disabled"><a href="/news">首页</a></span>
              <span class="disabled"><a href="/news?page={{ $pages['pre_page'] }}">上一页</a></span>
            @endif
            @if( $pages['next_page'] )
              <span class="disabled"><a href="/news?page={{ $pages['next_page'] }}">下一页</a></span>
              <span class="disabled"><a href="/news?page={{ $pages['total_page'] }}">尾页</a></span>
            @endif
          </div>
        </div>
      </div>
      <!-- end -->
      <span class="bk80">&nbsp;</span>
      <span class="bk100">&nbsp;</span>
  </div>
</div>
@endsection