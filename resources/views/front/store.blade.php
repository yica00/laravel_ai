@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <h2>Stores presence</h2>
      <p>门店风采</p>
      <div class="line">&nbsp;</div>
    </div>
  </div>
</div>
<span class="bk30">&nbsp;</span>
<!-- start -->
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <ul class="store_list clearfix">
      @foreach( $articles as $article )
      <li>
        <a href="/store/{{$article->id}}">
          <div class="txt fr">
            <h2 class="tit">{{$article->title}}</h2>
            <div class="list">
              <div class="p1">
                <h2>联系电话</h2>
                <p>{{$article->serial_number}}</p>
              </div>
              <span class="bk20">&nbsp;</span>
              <div class="p2">
                <h2>联系地址</h2>
                <p>{{$article->link}}</p>
              </div>
            </div>
            <div class="more clearfix"><span class="fr">see more +</span></div>
          </div>
          <img src="{{$article->thumbnail}}" alt="{{$article->title}}" />
        </a>
      </li>
      @endforeach
    </ul>
    <div class="pageJump clearfix">
      <div class="number">
        @if( $pages['pre_page']  )
          <span class="disabled"><a href="/store">首页</a></span>
          <span class="disabled"><a href="/store?page={{ $pages['pre_page'] }}">上一页</a></span>
        @endif
        @if( $pages['next_page'] )
          <span class="disabled"><a href="/store?page={{ $pages['next_page'] }}">下一页</a></span>
          <span class="disabled"><a href="/store?page={{ $pages['total_page'] }}">尾页</a></span>
        @endif
      </div>
    </div>
    <!-- end -->
  </div>  
</div>
<span class="bk60">&nbsp;</span>
<!-- end -->
@endsection