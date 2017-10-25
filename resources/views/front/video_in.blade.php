@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <h2>Brand culture</h2>
      <p>品牌故事</p>
      <div class="line">&nbsp;</div>
    </div>
    <span class="bk20">&nbsp;</span>
    <ul class="sublist">
      @foreach( session('header_nav') as $cate )
        @if( $cate->id == 2 )
          @foreach( $cate->articles as $art )
            <li  class="
              @if( $art->link )
            @if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link ) on @endif
            @else
            @if( $art->id == $pid ) on @endif
            @endif
                    ">
              <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif">{{$art->title}}</a>
            </li>
          @endforeach
        @endif
      @endforeach
    </ul>
  </div>
</div>
<span class="bk30">&nbsp;</span>
<!-- start -->
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div class="honor_dis clearfix">
      <div class="tit">
        <h2>绿色环保认证证书</h2>
        <p>上传时间：<em>2017-10-22</em> <span class="pL10">来源：<i>酸菜鸡</i></span></p>
      </div>
      <div class="p_style">
        {!! $article->comtent !!}
      </div>
    </div>
    <div class="backpre clearfix">
      @if( $up_down['1'] )<a href="/about/video/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
      @if( $up_down['2'] ) <a href="/about/video/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
      <a href="/about/video">返回上级目录</a>
    </div>
    <!-- end -->
  </div>  
</div>
<span class="bk60">&nbsp;</span>
<!-- end -->
@endsection