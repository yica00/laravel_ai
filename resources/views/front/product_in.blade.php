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
          <a href="/product/category/{{ $leader1->id  }}" @if( $leader1->id == $pid  ) class="on"  @endif > {{  mb_substr($leader1->title,2,20,'utf8' ) }}</a>
        @endforeach
      </p>
  </div>  
</div> 
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div   class="product_top clearfix">
      <div class="txt fr">
        <h3>{{ $articles[0]->title }}</h3>
        <span class="bk10">&nbsp;</span>
        {!!  $articles[0]->comtent  !!}
      </div>
      <img src="{{ $articles[0]->thumbnail }}" class="fl pic" />
    </div>
    <div class="slideTxtBox">
      <div class="hd">
        <ul>
          @for( $i=1;$i<count($articles);$i++ )
            <li>{{ $articles[$i]->title }}</li>
          @endfor
          {{--<li>产品特点</li><li>产品规格</li><li>使用方法</li><li>技术优势</li><li>注意事项</li>--}}
        </ul>
      </div>
      <div class="bd">
        @for( $i=1;$i<count($articles);$i++ )
          <div>
            {!! $articles[$i]->comtent !!}
          </div>
        @endfor
      </div>
    </div>
    <script type="text/javascript">jQuery(".slideTxtBox").slide();</script>
    <div class="backpre clearfix">      
        <a href="/product/detail/{{ $pre_id }}" rel="next">上一篇</a>
        <a href="/product/detail/{{ $next_id }}" rel="prev">下一篇</a>
        <a href="/product/category/{{ $pid }}">返回上级目录</a>
    </div>
    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>
<!-- contact_out -->
@endsection