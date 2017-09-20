@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <p>------&nbsp;&nbsp;royal stone&nbsp;&nbsp;------</p>
      <h2><span>皇</span><span>室</span><span>石</span><span>材</span></h2>
    </div>
  </div>
</div>
<!-- start -->
<!--  -->
<div class="wap_box">
  <span class="bk40">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <ul class="prod-list clearfix">
        @foreach( $articles as $article )
      <li>
        <a href="/product/{{$article->id}}">
          <span class="pic">
            <img src="{{$article->thumbnail}}" alt="">
          </span>
          <div class="txt">
            <h2>{{$article->title}}</h2>
            <p class="p1">{ {{$article->link}} }</p>
            <p class="p2">&nbsp;</p>
          </div>
          <div class="mask">&nbsp;</div>
        </a>
      </li>
      @endforeach
    </ul>
    <div class="pageJump clearfix">
        <div class="number">
            @if( $pages['pre_page']  )
                <span class="disabled"><a href="/product">首页</a></span>
                <span class="disabled"><a href="/product?page={{ $pages['pre_page'] }}">上一页</a></span>
            @endif
            @if( $pages['next_page'] )
                <span class="disabled"><a href="/product?page={{ $pages['next_page'] }}">下一页</a></span>
                <span class="disabled"><a href="/product?page={{ $pages['total_page'] }}">尾页</a></span>
            @endif
        </div>
    </div>
  </div>  
</div>
<span class="bk50">&nbsp;</span>
<!-- end -->
<!-- footer -->
@endsection