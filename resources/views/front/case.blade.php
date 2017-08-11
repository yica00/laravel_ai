@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <p>------&nbsp;&nbsp;typical case&nbsp;&nbsp;------</p>
      <h2><span>典</span><span>型</span><span>案</span><span>例</span></h2>
    </div>
  </div>
</div>

<!--  -->
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <span class="bk50">&nbsp;</span>
   <ul class="caseos_link clearfix boost_img">
       @foreach( $articles as $article )
     <li>
      <a href="/case/{{$article->id}}">
          <img src="{{$article->thumbnail}}">
          <span class="mask">&nbsp;</span>
          <span class="txt">{{$article->title}}</span>
        </a>
     </li>
       @endforeach
   </ul>
    <div class="pageJump clearfix">
        <div class="number">
            @if( $pages['pre_page']  )
                <span class="disabled"><a href="/case">首页</a></span>
                <span class="disabled"><a href="/case?page={{ $pages['pre_page'] }}">上一页</a></span>
            @endif
            @if( $pages['next_page'] )
                <span class="disabled"><a href="/case?page={{ $pages['next_page'] }}">下一页</a></span>
                <span class="disabled"><a href="/case?page={{ $pages['total_page'] }}">尾页</a></span>
            @endif
        </div>
    </div>
    <!-- end -->
  </div>  
</div>
<span class="bk50">&nbsp;</span>
<!-- footer -->
@endsection