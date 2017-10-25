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
    <ul class="active_list_1 active_list_2 clearfix">
        @foreach( $articles as $article )
          <li>
            <a href="/news/{{$article->id}}">
              <span class="pic"><img src="{{$article->thumbnail}}" alt="{{$article->title}}" /></span>
              <p>{{$article->created_at}}</p>
              <h2>{{$article->title}}</h2>
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
    <!-- end -->
  </div>  
</div>
<span class="bk60">&nbsp;</span>
<!-- end -->
@endsection