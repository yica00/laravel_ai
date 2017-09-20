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
    <div class="mod18">
        <span id="prev" class="btns prev"></span>
        <span id="next" class="btns next"></span>
        <span id="prevTop" class="btns prev"></span>
        <span id="nextTop" class="btns next"></span>
        <div id="picBox" class="picBox">
            <ul class="cf">
                @foreach( $articles as $article )
                <li>
                    <img src="{{$article->thumbnail}}" alt="">
                    <p>{{$article->title}}</p>
                </li>
                @endforeach
            </ul>
        </div>
        <div id="listBox" class="listBox">
            <ul class="cf">
                @foreach( $articles as $article )
                <li class="on"><img src="{{$article->thumbnail}}" alt="{{$article->title}}"></li>
                @endforeach
            </ul>
        </div>
    </div>  
    <script type="text/javascript" src="/js/photo.js"></script>
    <!-- end -->
  </div>  
</div>
<span class="bk50">&nbsp;</span>
<!-- end -->
<!-- footer -->
@endsection