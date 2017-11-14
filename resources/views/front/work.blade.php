@extends('front.base')
@section('content')
<!-- bread -->
<span class="bk30">&nbsp;</span>
<span class="bk80">&nbsp;</span>
<div class="bread">
  <div class="w1280 clearfix">
    <div class="in_tit_all">
      <div class="bt"><span>Students  <b>work</b></span>/ 学员作品</div>
    </div>
  </div>
</div>
<div class="wap_box">
  <div class="w1280 clearfix">
    <!-- start -->
    <ul class="compus_list_in clearfix star_inhover">
      @foreach( $articles as $article )
        <li>
          <a href="/work/{{$article->id}}"><div class="pic"><img src="{{$article->thumbnail}}" alt=""></div>
          </a>
        </li>
      @endforeach
    </ul>

    <div class="pageJump clearfix">
      <div class="number">
        @if( $pages['pre_page']  )
          <span class="disabled"><a href="/work">首页</a></span>
          <span class="disabled"><a href="/work?page={{ $pages['pre_page'] }}">上一页</a></span>
        @endif
        @if( $pages['next_page'] )
          <span class="disabled"><a href="/work?page={{ $pages['next_page'] }}">下一页</a></span>
          <span class="disabled"><a href="/work?page={{ $pages['total_page'] }}">尾页</a></span>
        @endif
      </div>
    </div>
  <!-- end -->
  </div>
  <span class="bk80">&nbsp;</span>
</div>
<!-- item -->
@endsection