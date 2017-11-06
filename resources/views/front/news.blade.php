@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <h2>Favourable activity</h2>
      <p>优惠活动</p>
    </div>
  </div>
</div>
<div class="wap_box">
  <span class="bk40">&nbsp;</span>
  <div class="w1160 clearfix">
  <!-- start -->
  <ul class="newsin_list clearfix">
    @foreach( $articles as $article )
    <li>
      <a href="/news/{{$article->id}}">
        <span class="pic"><img src="{{$article->thumbnail}}"></span>
        <div class="txt">
          <h2>{{$article->title}}</h2>
          <p>{{$article->introduce}}</p>
          <span class="btn">more +</span>
        </div>
      </a>
    </li>
    @endforeach
  </ul>
  <div class="pageJump clearfix">
      <div class="number">
        @if( $pages['pre_page']  )
          <span class="disabled"><a href="/news">首页</a></span>
          <span class="disabled"><a href="/news?page={{ $pages['pre_page'] }}">上一页</a></span>
        @endif
        @if( $pages['next_page'] )
          <span class="disabled"><a href="/news?page={{ $pages['next_page'] }}">下一页</a></span>
          <span class="disabled"><a href="/news?page={{ $pages['total_page'] }}">尾页</a></span>
        @endif
      </div>
    </div>
  <!-- end -->
  </div>
  <span class="bk40">&nbsp;</span>
</div>
@endsection