@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;关于嘉彩&nbsp;&nbsp;--</h2>
        <p>about jiacai</p>
      </div>
      <p class="page_nav clearfix">
          <a href="/about"  @if( $sty == 1 ) class="on" @endif>嘉彩简介</a><a href="/culture"  @if( $sty == 2 ) class="on" @endif>企业文化</a><a href="/office"  @if( $sty == 3 ) class="on" @endif>办公环境</a><a href="/honor"  @if( $sty == 4 ) class="on" @endif>荣誉资质</a>
      </p>
  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <span class="bk50">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- start -->
    <div class="mod18">
        <span id="prev" class="btn prev"></span>
        <span id="next" class="btn next"></span>
        <span id="prevTop" class="btn prev"></span>
        <span id="nextTop" class="btn next"></span>
        <div id="picBox" class="picBox">
            <ul class="cf">
                @foreach( $articles as $article )
                <li>
                    <img src="{{ $article->thumbnail }}" alt="">
                    <p>{{ $article->title }}</p>
                </li>
                @endforeach
            </ul>
        </div>
        <div id="listBox" class="listBox">
            <ul class="cf">
                @foreach( $articles as $article )
                <li ><img src="{{ $article->thumbnail }}" alt=""></li>
                @endforeach
            </ul>
        </div>
    </div>  
    <script type="text/javascript" src="/js/photo.js"></script>
    <!-- end --> 
  </div>
  <span class="bk60">&nbsp;</span>
</div>
<span class="bk60">&nbsp;</span>
<!-- footer -->
@endsection