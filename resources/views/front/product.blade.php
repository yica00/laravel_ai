@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;产品中心&nbsp;&nbsp;--</h2>
        <p>product center</p>
      </div>
      <p class="page_nav clearfix">
          @foreach( session('header_nav')[3]->sons as $leader1 )
              <a href="/product/category/{{ $leader1->id  }}" @if( $leader1->id == $id  ) class="on"  @endif > {{  mb_substr($leader1->title,2,20,'utf8' ) }}</a>
          @endforeach
      </p>
  </div>  
</div> 
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <ul class="prolist_in clearfix">
          @foreach( $articles as $article )
            <li>
                <a href="/product/detail/{{ $article->id }}" class="clearfix">
                    <div class="txt fr">
                        <h2>{{ $article->title }}</h2>
                        <h3>{{ $article->link }}</h3>
                        <span class="bk30">&nbsp;</span>
                        {!!  $article->comtent  !!}
                    </div>
                    <img src="{{ $article->thumbnail }}" class="fl pic" />
                </a>
            </li>
          @endforeach

        </ul>
    <div class="pageJump clearfix">
        <div class="number">
            <span class="disabled"><a href="/product/category/{{ $id }}">首页</a></span>
            <span class="disabled"><a href="/product/category/{{ $id }}?page={{ $pages['pre_page'] }}">上一页</a></span>
            <span class="disabled"><a href="/product/category/{{ $id }}?page={{ $pages['next_page'] }}">下一页</a></span>
            <span class="disabled"><a href="/product/category/{{ $id }}?page={{ $pages['total_page'] }}">尾页</a></span>
        </div>
    </div>
    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>
<!-- contact_out -->
@endsection