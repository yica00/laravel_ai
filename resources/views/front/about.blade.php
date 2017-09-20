@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <p>------&nbsp;&nbsp;royal supplies&nbsp;&nbsp;------</p>
      <h2><span>皇</span><span>室</span><span>御</span><span>品</span></h2>
    </div>
  </div>
</div>
<!-- sublist -->
<div class="w1160 clearfix">
  <ul class="sublist">
    @foreach( session('header_nav') as $cate )
      @if( $cate->id == 2 )
        @foreach( $cate->articles as $art )
          <li>
            <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" class="
            @if( $art->link )
            @if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link )
                    on
@endif
            @else
            @if( $art->id == $pid ) on @endif
            @endif
                    ">{{$art->title}}</a>
          </li>
        @endforeach
      @endif
    @endforeach
  </ul>
</div>
<!-- start -->
<!--  -->
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    {!! $article->comtent !!}
    <!-- end -->
  </div>  
</div>
<span class="bk50">&nbsp;</span>
<!-- end -->
<!-- footer -->
@endsection