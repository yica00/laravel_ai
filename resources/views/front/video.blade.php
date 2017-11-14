@extends('front.base')
@section('content')
<!-- bread -->
<span class="bk30">&nbsp;</span>
<div class="bread">
  <div class="w1280 clearfix">
    <div class="in_tit_all">
      <div class="bt"><span>Brand <b>culture</b></span>/ 品牌文化</div>
    </div>
    <ul class="sublist clearfix sub_5">
      @foreach( session('header_nav') as $cate )
        @if( $cate->id == 6 )
          @foreach( $cate->articles as $art )
            <li class="@if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link ) on @endif">
              <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" >{{$art->title}}</a>
            </li>
          @endforeach
        @endif
      @endforeach
    </ul>
  </div>
</div>
<div class="wap_box">
  <div class="w1280 clearfix">
  <!-- start -->
  <ul class="compus_list_in clearfix">
    @foreach( $articles as $article )
    <li>
      <a href="/about/video/{{$article->id}}"><div class="pic"><img src="{{$article->thumbnail}}" alt=""></div>
        <div class="txt">{{$article->title}}</div>
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
  <span class="bk80">&nbsp;</span>
</div>
<!-- item -->
@endsection