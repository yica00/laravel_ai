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
            <li class="@if( $art->id == 12) on @endif">
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
  <div class="txt_model_2">
    <div class="top">{{$article->title}}</div>
    <div class="p_style">
     {!! $article->comtent !!}
    </div>
    <div class="backpre clearfix">
      @if( $up_down['1'] )<a href="/about/news/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
      @if( $up_down['2'] ) <a href="/about/news/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
      <a href="/about/news">返回上级目录</a>
    </div>
  </div>
  <!-- end -->
  </div>
  <span class="bk80">&nbsp;</span>
</div>
<!-- item -->
@endsection