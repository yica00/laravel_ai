@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <h2>Decorate a strategy</h2>
      <p>装修攻略</p>
    </div>
    <span class="bk20">&nbsp;</span>
    <ul class="sublist">
      @foreach( session('header_nav') as $cate )
        @if( $cate->id == 6 )
          @foreach( $cate->articles as $art )
            <li class="@if( $article->pid == $art->id) on @endif">
              <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" >{{$art->title}}</a>
            </li>
          @endforeach
        @endif
      @endforeach
    </ul>
  </div>
</div>
<div class="wap_box">
  <span class="bk40">&nbsp;</span>
  <div class="w1160 clearfix">
  <!-- start -->
  <div class="txt_model_2">
    <div class="top">
      <h2 class="tit">{{$article->title}}</h2>
      <p class="protime">上传时间：<em>{{$article->created_at}}</em> <span class="pL10">来源：<i>交换空间</i></span></p>
    </div>
    <div class="p_style">
      {!! $article->comtent !!}
    </div>
    <div class="backpre clearfix">
      @if( $up_down['1'] )<a href="/guide/category/{{$article->pid}}/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
      @if( $up_down['2'] ) <a href="/guide/category/{{$article->pid}}/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
      <a href="/guide/category/{{$article->pid}}/">返回上级目录</a>
    </div>
  </div>
  <!-- end -->
  </div>
  <span class="bk40">&nbsp;</span>
</div>
@endsection