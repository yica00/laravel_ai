@extends('front.base')
@section('content')
<!-- start -->
<div class="bread">
  <div class="w1160 clearfix">
      <p class="page_nav clearfix">
        <a href="/models">企事业团体用车</a>
          <a href="/cars" class="on">合作车型</a>
      </p>
  </div>  
</div>
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- start -->
    <ul class="mod_list clearfix">
      @foreach( $articles as $article )
      <li>
        <a href="/cars">
          <img src="{{ $article->photo }}" alt="">
          <div class="txt clearfix">
            <span class="price fr"><em>{{ $article->price }}元</em>起</span>
            <dl class="name fl">
              <dt>{{ $article->name }}</dt>
              <dd><span>{{ $article->displacement }}</span> |  <span>{{ $article->amount }}座</span>  |  <span>{{ $article->category }}</span></dd>
            </dl>
          </div>
          </a>
        </li>
      @endforeach
    </ul>
    <!-- end --> 
  </div>
</div>
<div class="pageJump clearfix">
  <div class="number">

    @if( $pages['pre_page']  )
      <span class="disabled"><a href="/cars">首页</a></span>
      <span class="disabled"><a href="/cars?page={{ $pages['pre_page'] }}">上一页</a></span>
    @endif
    @if( $pages['next_page'] )
      <span class="disabled"><a href="/cars?page={{ $pages['next_page'] }}">下一页</a></span>
      <span class="disabled"><a href="/cars?page={{ $pages['total_page'] }}">尾页</a></span>
    @endif

  </div>
</div>

<!-- end -->
@endsection