@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <p>------&nbsp;&nbsp;royal dynamic&nbsp;&nbsp;------</p>
      <h2><span>皇</span><span>室</span><span>动</span><span>态</span></h2>
    </div>
  </div>
</div>
<!-- start -->
<!--  -->
<div class="wap_box">
  <span class="bk40">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <ul class="newslist clearfix boost_img ">
      @foreach($articles as $article )
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
  </div>  
</div>
<span class="bk50">&nbsp;</span>
<!-- end -->
<!-- footer -->
@endsection