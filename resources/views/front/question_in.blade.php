@extends('front.base')
@section('content')
<div class="warp_box">
  <div class="warp_bot">
    <div class="brd_tit_all">
      <span class="bk100">&nbsp;</span>
      <h2>问答中心</h2>
      <p>--- News dynamics  ---</p>
    </div>  
      <!-- start -->
      <div class="w1280 clearfix">
        <span class="bk60">&nbsp;</span>
        <div class="news_dis">
            <div class="top">
                <h3 class="tit">{{$article->title}}</h3>
                <p class="protime">上传时间：<em>{{$article->created_at}}</em> <span class="pL10">来源：<i>伊美医疗美容</i></span></p>
            </div>
        </div>
          <div class="p_style">
              <div class="w1160 clearfix">
                  {!! $article->comtent !!}
              </div>
          </div>
          <div class="backpre clearfix">
              @if( $up_down['1'] )<a href="/question/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
              @if( $up_down['2'] ) <a href="/question/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
          </div>
        </div>
      </div>
      <!-- end -->
      <span class="bk80">&nbsp;</span>
      <span class="bk100">&nbsp;</span>
  </div>
</div>
@endsection