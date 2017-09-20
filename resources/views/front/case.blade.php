@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <p>------&nbsp;&nbsp;royal cases&nbsp;&nbsp;------</p>
      <h2><span>皇</span><span>室</span><span>案</span><span>例</span></h2>
    </div>
  </div>
</div>
<!-- start -->
<!--  -->
<div class="wap_box">
  <span class="bk40">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <ul class="prolist pro-insty">
        @foreach( $articles as $article )
          <li>
            <a href="/case/{{$article->id}}">
              <div class="pic"><span class="plus">&nbsp;</span><img src="{{$article->thumbnail}}" /></div>
              <div class="txt">{{$article->title}}</div>
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
  </div>  
</div>
<span class="bk50">&nbsp;</span>
<!-- end -->
<!-- footer -->
@endsection