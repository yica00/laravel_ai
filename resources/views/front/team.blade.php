@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;关于我们&nbsp;&nbsp;--</h2>
        <p>about us</p>
      </div>
      <p class="page_nav clearfix">
          @foreach( session('header_nav')[1]->sons as $leader1 )
              <a href="{{ $leader1->link  }}" @if( $leader1->link == $sty  ) class="on" @endif>{{  mb_substr($leader1->title,2,20,'utf8' ) }}</a>
          @endforeach
      </p>
  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
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
                <li><img src="{{ $article->thumbnail }}" alt=""></li>
                @endforeach
            </ul>
        </div>
    </div>  
    <script type="text/javascript" src="/js/photo.js"></script>
    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>


<!-- footer -->
@endsection