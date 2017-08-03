@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">  
      <div class="top">
        <h2>--装修风格--</h2>
        <p><span>decoration style</span></p>
      </div>
      <ul class="sublist clearfix">
        <li><a href="https://yun.kujiale.com/design/3FO4IH45QOMK/show?fromqrcode=true" target="_blank">VR实景装修效果图</a></li>
        <li><a href="/case" class="on">经典案例</a></li>
      </ul>
    </div>
</div>
<span class="bk50">&nbsp;</span>
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div class="detail_top clearfix">
        <div class="tit">{{$article->title}}</div>
        <div class="dis">
            {{$article->introduce}}
        </div>
    </div>
    
  </div>  
  <div class="detail_bot clearfix">
      <div class="w1160 clearfix">
        {!! $article->comtent !!}
      </div>
  </div>
  <div class="backpre clearfix">
      @if( $up_down['1'] )<a href="/case/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
      @if( $up_down['2'] ) <a href="/case/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
      <a href="/case">返回上级目录</a>
  </div>
  <!-- end -->
</div>
<span class="bk80">&nbsp;</span>
<!-- index_list -->
@endsection