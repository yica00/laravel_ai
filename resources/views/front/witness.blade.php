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
                          <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" class=" @if( $art->link == "/witness" ) on @endif">{{$art->title}}</a>
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
    <ul class="witnesslist boost_img clearfix">
        @foreach( $articles as $article )
        <li>
          <a href="/witness/{{$article->id}}">
                  <span class="pic"><img src="{{$article->thumbnail}}" alt="" /></span>
                  <div class="txt">{{$article->title}}</div>
                </a>
        </li>
        @endforeach
      </ul>
      <div class="pageJump clearfix">
        <div class="number">
            @if( $pages['pre_page']  )
                <span class="disabled"><a href="/witness">首页</a></span>
                <span class="disabled"><a href="/witness?page={{ $pages['pre_page'] }}">上一页</a></span>
            @endif
            @if( $pages['next_page'] )
                <span class="disabled"><a href="/witness?page={{ $pages['next_page'] }}">下一页</a></span>
                <span class="disabled"><a href="/witness?page={{ $pages['total_page'] }}">尾页</a></span>
            @endif
        </div>
      </div>
    <!-- end -->
  </div>  
</div>
<span class="bk80">&nbsp;</span>
<!-- index_list -->
@endsection