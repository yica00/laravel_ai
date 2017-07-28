@extends('front.base')
@section('content')
<div class="in_tit_all">
  <p>Maintenance instructions</p>
  <h2><span>保</span><span>养</span><span>须</span><span>知</span></h2>
</div>
<!-- aboutout -->
<div class=" com_style">
  <div class="w1160 clearfix">
    <div class="news_dis">
      <div class="top">
        <h3 class="tit">{{$article->title}}</h3>
        <p class="protime"><em>{{$article->created_at}}</em> <span class="pL10"><i>杨氏鼻炎</i></span></p>
      </div>
      <div class="p_style">
          {!! $article->comtent !!}
      </div>

      <div class="backpre clearfix">
          @if( $up_down['1'] )<a href="/news/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
          @if( $up_down['2'] ) <a href="/news/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
          <a href="/news">返回上级目录</a>
      </div>
          <span class="bk30">&nbsp;</span>
    </div>
    <span class="bk60">&nbsp;</span>
  </div>
  </div>
</div>
<!-- footer -->
@endsection