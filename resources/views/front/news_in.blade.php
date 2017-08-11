@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <p>------&nbsp;&nbsp;news center&nbsp;&nbsp;------</p>
      <h2><span>新</span><span>闻</span><span>中</span><span>心</span></h2>
    </div>
  </div>
</div>
<!-- sublist -->
<div class="w1160 clearfix">
  <ul class="sublist">
      @foreach( session('header_nav') as $cate )
          @if( $cate->id == 3 )
              @foreach( $cate->articles as $art )
                  <li>
                      <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" class="
            @if( $art->link )
                      @if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link )
                              on
                    @endif
                      @else
                      @if( $art->id == $pid ) on @endif
                      @endif
                              ">{{$art->title}}</a>
                  </li>
              @endforeach
          @endif
      @endforeach
  </ul>
</div>
<!--  -->
<div class="wap_box">
  
    <!-- 内容 -->
    <div class="news_dis">
    <div class="w1160 clearfix">
        <div class="top">
          <h3 class="tit">{{$article->title}}</h3>
           <p class="protime">上传时间：<em>{{$article->created_at}}</em> <span class="pL10">来源：<i>兄弟建材</i></span></p>
        </div>
        </div>
        <div class="p_style">
        <div class="w1160 clearfix">
            {!! $article->comtent !!}
          </div>
          </div>
          <div class="backpre clearfix">
              @if( $up_down['1'] )<a href="/news/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
              @if( $up_down['2'] ) <a href="/news/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
              <a href="/news/category/{{$pid}}">返回上级目录</a>
          </div>
    </div>
    <!-- end -->
   
</div>
<span class="bk50">&nbsp;</span>
<!-- footer -->
@endsection