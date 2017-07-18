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
      @foreach( session('header_nav')[7]->sons as $leader1 )
          <a href="/service/category/{{$leader1->id}}" @if( $leader1->id == $id ) class="on" @endif > {{  mb_substr($leader1->title,2,20,'utf8' ) }}</a>
      @endforeach
      </p>
  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
      {!! $article->comtent !!}
    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>


<!-- footer -->
@endsection