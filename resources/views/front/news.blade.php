@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;新闻中心&nbsp;&nbsp;--</h2>
        <p>news</p>
      </div>
      <p class="page_nav clearfix">

         <a href="/company_news"  @if( $pid == 28 ) class="on" @endif>公司新闻</a>
            <a href="/industy_news"  @if( $pid == 29 ) class="on" @endif>行业动态</a>
      </p>
  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- start -->
    <ul class="newslist clearfix">
          @foreach( $articles as $article )
            <li>
                <a href="/news/{{ $article->id }}">
                    <span class="pic"><img src="{{ $article->thumbnail }}" alt="" /></span>
                    <div class="txt">
                        <h2>{{ $article->title }}</h2>
                        <span>了解更多</span>
                    </div>
                </a>
            </li>
          @endforeach
    </ul>
    <div class="pageJump clearfix">
        <div class="number">

            @if( $pages['pre_page']  )
                <span class="disabled"><a href="/{{ $category }}">首页</a></span>
                <span class="disabled"><a href="/{{$category}}?page={{ $pages['pre_page'] }}">上一页</a></span>
            @endif
            @if( $pages['next_page'] )
                <span class="disabled"><a href="/{{$category}}?page={{ $pages['next_page'] }}">下一页</a></span>
                <span class="disabled"><a href="/{{$category}}?page={{ $pages['total_page'] }}">尾页</a></span>
            @endif

        </div>
    </div>
    <!-- end --> 
  </div>
  <span class="bk60">&nbsp;</span>
</div>
<!-- index_list -->
@endsection