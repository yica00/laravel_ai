@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">  
      <div class="top">
        <h2>--装修风格--</h2>
        <p><span>decoration style</span></p>
      </div>
      <ul class="sublist clearfix">
        <li><a href="https://yun.kujiale.com/design/3FO4IH45QOMK/show?fromqrcode=true" target="_blank">VR实景装修效果图</a></li>
        <li><a href="/case" class="on">经典案例</a></li>
      </ul>
    </div>
</div>
<span class="bk50">&nbsp;</span>
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div class="sorting">
      <div class="list clearfix">
        <div class="all fr">
          <ul class="clearfix">
            <li>
              @foreach( $cates as $cate )
                @if( $cate->id == 24 )
                  <a href="/case" class=" @if( $id == null ) on @endif">{{$cate->title}}</a>
                @else
                 <a href="/case/category/{{$cate->id}}" class=" @if( $cate->id == $id ) on @endif">{{$cate->title}}</a>
                @endif
              @endforeach
            </li>       
          </ul>
        </div>
        <b class="key fl">风格</b>
      </div>
    </div>
    <span class="bk30">&nbsp;</span>
    <ul class="caselist clearfix">
      @foreach( $articles as $article )
      <li>
        <a  href="/case/{{$article->id}}">
          <img src="{{$article->thumbnail}}" alt="">
          <span class="box">&nbsp;</span>
          <div class="txt">{{$article->title}}</div>
        </a>
      </li>
        @endforeach
    </ul>
    <div class="pageJump clearfix">
        <div class="number">
          @if( $pages['pre_page']  )
            <span class="disabled"><a href="@if($id ==null )/case @else /case/category/{{$id}} @endif">首页</a></span>
            <span class="disabled"><a href="@if($id ==null )/case?page={{ $pages['pre_page'] }} @else /case/category/{{$id}}?page={{ $pages['pre_page'] }}@endif">上一页</a></span>
          @endif
          @if( $pages['next_page'] )
            <span class="disabled"><a href="@if($id ==null )/case?page={{ $pages['next_page'] }} @else /case/category/{{$id}}?page={{ $pages['next_page'] }}@endif">下一页</a></span>
            <span class="disabled"><a href="@if($id ==null )/case?page={{ $pages['total_page'] }} @else /case/category/{{$id}}?page={{ $pages['total_page'] }}@endif">尾页</a></span>
          @endif
        </div>
    </div>
    <!-- end -->
  </div>  
</div>
<span class="bk80">&nbsp;</span>
<!-- index_list -->
@endsection