@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;合作品牌&nbsp;&nbsp;--</h2>
        <p>Cooperative brand</p>
      </div>
      <p class="page_nav clearfix">
        <a href="/brand" class="on">合作品牌</a>
            <a href="/sales_list">业绩清单</a>
      </p>
  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <ul class="news_list clearfix gray_img">
        @foreach( $articles as $article )
        <li>
            <img src="{{ $article->thumbnail }}" alt="" />
            <p>{{ $article->title }}</p>
        </li>
        @endforeach
    </ul>
    <div class="pageJump clearfix">
      <div class="number">
          @if( $pages['pre_page']  )
              <span class="disabled"><a href="/brand">首页</a></span>
              <span class="disabled"><a href="/brand?page={{ $pages['pre_page'] }}">上一页</a></span>
          @endif
          @if( $pages['next_page'] )
              <span class="disabled"><a href="/brand?page={{ $pages['next_page'] }}">下一页</a></span>
              <span class="disabled"><a href="/brand?page={{ $pages['total_page'] }}">尾页</a></span>
          @endif
      </div>
    </div>
    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>


<!-- footer -->
@endsection