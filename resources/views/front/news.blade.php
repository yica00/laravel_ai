@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <p>------&nbsp;&nbsp;news center&nbsp;&nbsp;------</p>
      <h2><span>新</span><span>闻</span><span>中</span><span>心</span></h2>
    </div>
  </div>
</div>
<!-- sublist -->
<div class="w1160 clearfix">
  <ul class="sublist">
    @foreach( session('header_nav') as $cate )
      @if( $cate->id == 3 )
        @foreach( $cate->articles as $art )
          <li>
            <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" class="
            @if( $art->link )
                @if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link )
                        on
                @endif
               @else
                   @if( $art->id == $id ) on @endif
               @endif
                    ">{{$art->title}}</a>
          </li>
        @endforeach
      @endif
    @endforeach
  </ul>
</div>
<!--  -->
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <ul class="newslist clearfix boost_img ">
      @foreach( $articles as $article )
        <li>
          <a href="/news/{{$article->id}}">
            <span class="pic"><img src="{{$article->thumbnail}}" alt=""></span>
            <div class="txt">
              <h2>{{$article->title}}</h2>
              <span>了解更多</span>
            </div>
          </a>
        </li>
      @endforeach
    </ul>
    <div class="pageJump clearfix">
        <div class="number">
          @if( $pages['pre_page']  )
            <span class="disabled"><a href="/news/category/{{$id}}">首页</a></span>
            <span class="disabled"><a href="/news/category/{{$id}}?page={{ $pages['pre_page'] }}">上一页</a></span>
          @endif
          @if( $pages['next_page'] )
            <span class="disabled"><a href="/news/category/{{$id}}?page={{ $pages['next_page'] }}">下一页</a></span>
            <span class="disabled"><a href="/news/category/{{$id}}?page={{ $pages['total_page'] }}">尾页</a></span>
          @endif
        </div>
    </div>
    <!-- end -->
  </div>  
</div>
<span class="bk50">&nbsp;</span>
<!-- footer -->
@endsection