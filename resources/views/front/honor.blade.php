@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <p>------&nbsp;&nbsp;about us&nbsp;&nbsp;------</p>
      <h2><span>关</span><span>于</span><span>我</span><span>们</span></h2>
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
                      <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" class="@if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link ) on @endif">{{$art->title}}</a>
                  </li>
              @endforeach
          @endif
       @endforeach
  </ul>
</div>
<!--  -->
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div class="mod18">
        <span id="prev" class="btn prev"></span>
        <span id="next" class="btn next"></span>
        <span id="prevTop" class="btn prev"></span>
        <span id="nextTop" class="btn next"></span>
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
                <li class=""><img src="{{$article->thumbnail}}" alt=""></li>
                @endforeach
            </ul>
        </div>
    </div>  
    <script type="text/javascript" src="/js/photo.js"></script>
    <!-- end -->
  </div>  
</div>
<span class="bk50">&nbsp;</span>
<!-- footer -->
@endsection