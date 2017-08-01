@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">  
      <div class="top">
        <h2>--金牌服务--</h2>
        <p><span>The gold medal services</span></p>
      </div>
      <ul class="sublist clearfix">
        @foreach( session('header_nav') as $cate )
          @if( $cate->id == 5 )
            @foreach( $cate->articles as $art )
            <li>
            <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" class=" @if( $art->id == $id ) on @endif">{{$art->title}}</a>
            </li>
            @endforeach
          @endif
        @endforeach
      </ul>
    </div>
</div>
<span class="bk50">&nbsp;</span>
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <p style="color:red;font-size:24px;">
      {!! $article->comtent !!}
    </p>
    <!-- end -->
  </div>  
</div>
<span class="bk80">&nbsp;</span>
<!-- index_list -->
@endsection