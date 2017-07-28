@extends('front.base')
@section('content')
<div class="in_tit_all">
  <p>successful case</p>
  <h2><span>成</span><span>功</span><span>案</span><span>例</span></h2>
</div>
<!-- aboutout -->
<div class=" com_style">
  <div class="w1160 clearfix">
    <div class="casein_sty">  
      <div class="tit">
        <h3>杨氏鼻炎成功案例之</h3>
        <h2>{{$article->title}}</h2>
      </div>
     <div class="pic"><img src="{{$article->thumbnail}}" class="img_1"><img src="/images/watermark.png" class="img_2"></div>
       <div class="txt">
        <p><span>康复者:</span>{{$article->title}}</p>
        <p><span>症状:</span>{{$article->link}}</p>
      </div>
      <dl class="ddli bg_e8f2ff">
        <dt>治疗方案</dt>
        <dd>
            {!! $article->comtent !!}
        </dd>
      </dl>
    </div>
    <div class="backpre clearfix">
        @if( $up_down['1'] )<a href="/case/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
        @if( $up_down['2'] ) <a href="/case/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
        <a href="/case">返回上级目录</a>
      </div>
    <span class="bk60">&nbsp;</span>
  </div>
</div>
<!-- footer -->
@endsection