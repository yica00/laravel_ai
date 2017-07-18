@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;新闻中心&nbsp;&nbsp;--</h2>
        <p>news center</p>
      </div>
      <p class="page_nav clearfix">
          @foreach( session('header_nav')[2]->sons as $leader1 )
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
    <div class="news_dis">
      <div class="top">
        <h3 class="tit">{{$article->title}}</h3>
        <p class="protime"><em>{{$article->created_at}}</em> <span class="pL10"><i>虹霖电梯</i></span></p>
      </div>
      <div class="p_style">
          {!! $article->comtent !!}
      </div>

      <div class="backpre clearfix">
          @if( $up_down['1'] )<a href="{{$sty}}/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
          @if( $up_down['2'] ) <a href="{{$sty}}/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
          <a href="{{$sty}}">返回上级目录</a>
      </div>
          <span class="bk30">&nbsp;</span>
    </div>

    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>


<!-- footer -->
@endsection