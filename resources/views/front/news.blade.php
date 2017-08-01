@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">  
      <div class="top">
        <h2>--新闻中心--</h2>
        <p><span>news center</span></p>
      </div>
      <ul class="sublist clearfix">
          @foreach( session('header_nav') as $cate )
              @if( $cate->id == 7 )
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
    <ul class="newslist boost_img">
        @foreach( $articles as $article )
          <li>
            <a href="/news/{{$article->id}}">
              <span class="pic"><img src="{{$article->thumbnail}}"></span>
              <div class="txt">
                <h2>{{$article->title}}</h2>
                <p>{{$article->introduce}}</p>
                <span class="btn">查看更多</span>
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
<span class="bk80">&nbsp;</span>
<!-- index_list -->
@endsection