@extends('front.base')
@section('content')
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
          <p>case</p>
        <h2>--&nbsp;&nbsp;案例&nbsp;&nbsp;--</h2>
      </div>
      <!--<p class="page_nav">
          <a href="case.html" class="on">中式</a>
          <a href="case.html">欧式</a>
          <a href="case.html">现代</a>
          <a href="case.html">地中海式</a>
       </p> -->
  </div>  
</div>
<!-- 内页 -->
<span class="bk100">&nbsp;</span>
<span class="bk100">&nbsp;</span>
<span class="bk10">&nbsp;</span>
<div class="wap_box">
  <!-- 内容开始 -->
  <div class="w1160 clearfix">
    <div class="page_nav clearfix">
        @foreach( $articles as $article  )
          <a href="/case/category/{{ $article->id }}"  @if($article->id == $id ) class="on" @endif>{{ $article->title }}</a>
        @endforeach
       </div>
  </div>
  <span class="bk40">&nbsp;</span>
   <div class="caseout">
    <ul class="list clearfix">
      <!--  data-150-bottom-center="transform: rotateY(-90deg); opacity: 0" data-150-center-center="transform: rotate(0); opacity: 1" class="skrollable skrollable-between" -->
     @foreach( $arts as $art )
      <li><a href="/case/{{ $art->id }}"><img src="{{ $art->thumbnail }}" alt="" /><span>{{ $art->title }}<br><img src="/images/link.png" class="link"></span></a></li>
     @endforeach
    </ul>
  </div>
  <div class="pageJump clearfix">
      <div class="number">
          @if( $pages['pre_page']  )
              <span class="disabled"><a href="/case/category/{{$id}}">首页</a></span>
              <span class="disabled"><a href="/case/category/{{$id}}?page={{ $pages['pre_page'] }}">上一页</a></span>
          @endif
          @if( $pages['next_page'] )
              <span class="disabled"><a href="/case/category/{{$id}}?page={{ $pages['next_page'] }}">下一页</a></span>
              <span class="disabled"><a href="/case/category/{{$id}}?page={{ $pages['total_page'] }}">尾页</a></span>
          @endif
      </div>
  </div>
  <!-- 内容结束 -->
</div>
<span class="bk80">&nbsp;</span>
<!-- contactout -->
@endsection