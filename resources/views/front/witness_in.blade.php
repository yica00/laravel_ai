@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">  
      <div class="top">
        <h2>--金牌服务--</h2>
        <p><span>The gold medal services</span></p>
      </div>
      <ul class="sublist clearfix">
          @foreach( session('header_nav') as $cate )
              @if( $cate->id == 5 )
                  @foreach( $cate->articles as $art )
                      <li>
                          <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" class=" @if( $art->link == "/witness" ) on @endif">{{$art->title}}</a>
                      </li>
                  @endforeach
              @endif
          @endforeach
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
    {!! $article->comtent !!}
  </div>
  <div class="backpre clearfix">
      @if( $up_down['1'] )<a href="/witness/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
      @if( $up_down['2'] ) <a href="/witness/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
      <a href="/witness">返回上级目录</a>
  </div>
    <!-- end -->
</div>
<span class="bk80">&nbsp;</span>
<!-- index_list -->
@endsection