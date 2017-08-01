@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">  
      <div class="top">
        <h2>--新闻中心--</h2>
        <p><span>news center</span></p>
      </div>
      <ul class="sublist clearfix">
          @foreach( session('header_nav') as $cate )
              @if( $cate->id == 7 )
                  @foreach( $cate->articles as $art )
                      <li>
                          <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" class=" @if( $art->id == $pid ) on @endif">{{$art->title}}</a>
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
    <div class="news_dis">
        <div class="top">
       <h3 class="tit">{{$article->title}}</h3>
        <p class="protime">上传时间：<em>{{$article->created_at}}</em> <span class="pL10">来源：<i>美品佳</i></span></p>
         </div>
        <div class="p_style">
            {!! $article->comtent !!}
          </div>
          <div class="backpre clearfix">
              @if( $up_down['1'] )<a href="/news/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
              @if( $up_down['2'] ) <a href="/news/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
              <a href="/news/category/{{$pid}}">返回上级目录</a>
          </div>
    </div>
    <!-- end -->
  </div>  
</div>
<span class="bk80">&nbsp;</span>
<!-- index_list -->
@endsection