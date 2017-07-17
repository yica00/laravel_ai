@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;关于我们&nbsp;&nbsp;--</h2>
        <p>about us</p>
      </div>
      <p class="page_nav clearfix">
        @foreach( session('header_nav')[1]->sons as $leader1 )
          <a href="{{ $leader1->link  }}" @if( $leader1->link == $sty  ) class="on" @endif>{{  mb_substr($leader1->title,2,20,'utf8' ) }}</a>
        @endforeach
      </p>
  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div class="picScroll-lefttime">
      <div class="hd">
        <a class="next"></a>
        <a class="prev"></a>
      </div>
      <div class="bd">
        <ul class="picList">
          @foreach( $articles as $article )
          <li>
            <div class="wk_his_ico">&nbsp;</div>
            <dl>
              <dt><h4>{{$article->title}}</h4></dt>
              <dd>{!! $article->comtent !!}</dd>
            </dl>
          </li>
          @endforeach
        </ul>
      </div>
    </div>

    <script type="text/javascript">
    jQuery(".picScroll-lefttime").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click"});
    </script>
    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>


<!-- footer -->
@endsection