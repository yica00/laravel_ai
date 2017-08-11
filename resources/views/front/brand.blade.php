@extends('front.base')
@section('content')
<!--  -->
<div class="wap_box">
  <div class="w1160 clearfix">
   <span class="bk50">&nbsp;</span>
    <!-- 内容 -->
    <ul class="brandin clearfix">
        @foreach( $articles as $article )
      <li><a><img src="{{$article->thumbnail}}" alt=""></a></li>
        @endforeach

    </ul>
    <div class="pageJump clearfix">
        <div class="number">
            @if( $pages['pre_page']  )
                <span class="disabled"><a href="/brand">首页</a></span>
                <span class="disabled"><a href="/brand?page={{ $pages['pre_page'] }}">上一页</a></span>
            @endif
            @if( $pages['next_page'] )
                <span class="disabled"><a href="/brand?page={{ $pages['next_page'] }}">下一页</a></span>
                <span class="disabled"><a href="/brand?page={{ $pages['total_page'] }}">尾页</a></span>
            @endif
        </div>
    </div>
    <!-- end -->
  </div>  
</div>
<span class="bk50">&nbsp;</span>
<!-- footer -->
@endsection