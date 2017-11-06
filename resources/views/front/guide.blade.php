@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <h2>Decorate a strategy</h2>
      <p>装修攻略</p>
    </div>
    <span class="bk20">&nbsp;</span>
    <ul class="sublist">
      @foreach( session('header_nav') as $cate )
        @if( $cate->id == 6 )
          @foreach( $cate->articles as $art )
            <li class="@if( $id == $art->id) on @endif">
              <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" >{{$art->title}}</a>
            </li>
          @endforeach
        @endif
      @endforeach
    </ul>
  </div>
</div>
<div class="wap_box">
  <span class="bk40">&nbsp;</span>
  <div class="w1160 clearfix">
  <!-- start -->
  <ul class="newsin_list clearfix">
    @foreach( $articles as $article )
    <li>
      <a href="/guide/{{$article->id}}">
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
          <span class="disabled"><a href="/guide/category/{{$id}}">首页</a></span>
          <span class="disabled"><a href="/guide/category/{{$id}}?page={{ $pages['pre_page'] }}">上一页</a></span>
        @endif
        @if( $pages['next_page'] )
          <span class="disabled"><a href="/guide/category/{{$id}}?page={{ $pages['next_page'] }}">下一页</a></span>
          <span class="disabled"><a href="/guide/category/{{$id}}?page={{ $pages['total_page'] }}">尾页</a></span>
        @endif
      </div>
    </div>
  <!-- end -->
  </div>
  <span class="bk40">&nbsp;</span>
</div>
@endsection