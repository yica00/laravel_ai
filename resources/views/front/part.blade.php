@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;服务中心&nbsp;&nbsp;--</h2>
        <p>service center</p>
      </div>
      <p class="page_nav clearfix">
          <a href="/service">服务优势</a><a href="/partner"  class="on">合作伙伴</a>
      </p>
  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- start -->
    <span class="bk50">&nbsp;</span>
      <ul class="sub_brad clearfix">
        @foreach( $articles as $article )
        <li>
            <img src="{{ $article->thumbnail }}" alt="">
            <p>{{ $article->title }}</p>
        </li>
        @endforeach
      </ul>
          <div class="pageJump clearfix">
              <div class="number">
                  @if(  $pages['pre_page']  )
                      <span class="disabled"><a href="/partner">首页</a></span>
                      <span class="disabled"><a href="/partner?page={{ $pages['pre_page'] }}">上一页</a></span>
                  @endif
                  @if( $pages['next_page'] )
                      <span class="disabled"><a href="/partner?page={{ $pages['next_page'] }}">下一页</a></span>
                      <span class="disabled"><a href="/partner?page={{ $pages['total_page'] }}">尾页</a></span>
                  @endif
              </div>
          </div>
    <!-- end --> 
  </div>
  <span class="bk60">&nbsp;</span>
</div>
<span class="bk60">&nbsp;</span>
<!-- footer -->
@endsection