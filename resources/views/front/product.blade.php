@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">  
      <div class="top">
        <h2>--优质选材--</h2>
        <p><span>High quality material</span></p>
      </div>
    </div>
</div>
<span class="bk50">&nbsp;</span>
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div class="productout product_in">
    <ul class="list clearfix">
        @foreach( $articles as $article )
      <li>
        <a href="/product/{{$article->id}}">
          <span class="pic"><img src="{{$article->thumbnail}}" alt="" /></span>
          <span class="mask_black">&nbsp;</span>
              <div class="txt">
                <h2>{{$article->title}}</h2>
                <p>{{$article->link}}</p>
              </div>
        </a>
      </li>
         @endforeach
    </ul>
    </div>
    <div class="pageJump clearfix">
        <div class="number">
            @if( $pages['pre_page']  )
                <span class="disabled"><a href="/product">首页</a></span>
                <span class="disabled"><a href="/product?page={{ $pages['pre_page'] }}">上一页</a></span>
            @endif
            @if( $pages['next_page'] )
                <span class="disabled"><a href="/product?page={{ $pages['next_page'] }}">下一页</a></span>
                <span class="disabled"><a href="/product?page={{ $pages['total_page'] }}">尾页</a></span>
            @endif
        </div>
    </div>
    <!-- end -->
  </div>  
</div>
<span class="bk80">&nbsp;</span>
<!-- index_list -->
@endsection