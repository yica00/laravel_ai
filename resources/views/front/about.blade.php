@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;关于联手&nbsp;&nbsp;--</h2>
        <p>about</p>
      </div>
      <p class="page_nav clearfix">
          @foreach( session('header_nav')[2]->sons as $leader1 )
              <a href="{{ $leader1->link  }}" @if( $leader1->link == $link  ) class="on"  @endif > {{  mb_substr($leader1->title,2,20,'utf8' ) }}</a>
          @endforeach
      </p>
  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- start -->
      {!! $article->comtent !!}
    <!-- end -->
  </div>
  <span class="bk60">&nbsp;</span>
</div>
<!-- index_list -->
@endsection