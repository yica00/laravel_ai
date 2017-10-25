@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <h2>Brand culture</h2>
      <p>品牌故事</p>
      <div class="line">&nbsp;</div>
    </div>
    <span class="bk20">&nbsp;</span>
    <ul class="sublist">
        @foreach( session('header_nav') as $cate )
            @if( $cate->id == 2 )
                @foreach( $cate->articles as $art )
                    <li  class="
              @if( $art->link )
                    @if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link ) on @endif
                    @else
                    @if( $art->id == $pid ) on @endif
                    @endif
                            ">
                        <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif">{{$art->title}}</a>
                    </li>
                @endforeach
            @endif
        @endforeach
    </ul>
  </div>
</div>
<span class="bk30">&nbsp;</span>
<!-- start -->
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <ul class="video_list clearfix">
        @foreach( $article as $art )
          <li>
            <a href="/about/video/{{$art->id}}">
              <span class="pic"><img src="{{$art->thumbnail}}" alt="{{$art->title}}" /><span class="play">&nbsp;</span></span>
              <h2>{{$art->title}}</h2>
            </a>
          </li>
        @endforeach
        </ul>
    <div class="pageJump clearfix">
      <div class="number">
          @if( $pages['pre_page']  )
              <span class="disabled"><a href="/about/video">首页</a></span>
              <span class="disabled"><a href="/about/video?page={{ $pages['pre_page'] }}">上一页</a></span>
          @endif
          @if( $pages['next_page'] )
              <span class="disabled"><a href="/about/video?page={{ $pages['next_page'] }}">下一页</a></span>
              <span class="disabled"><a href="/about/video?page={{ $pages['total_page'] }}">尾页</a></span>
          @endif
      </div>
    </div>
    <!-- end -->
  </div>  
</div>
<span class="bk60">&nbsp;</span>
<!-- end -->
@endsection