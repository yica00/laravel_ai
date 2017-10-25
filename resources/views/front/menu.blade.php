@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <h2>Delicious menu</h2>
      <p>美味菜单</p>
      <div class="line">&nbsp;</div>
    </div>
  </div>
</div>
<span class="bk30">&nbsp;</span>
<!-- start -->
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox-1.3.4.css" media="screen" />
    <script type="text/javascript" src="/js/jquery.fancybox-1.3.4.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
         
        $("a[rel=images_group]").fancybox({
          'transitionIn':'none',
          'transitionOut':'none',
          'titlePosition':'over',
          'titleFormat':function(title, currentArray, currentIndex, currentOpts) {
            return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
          }
        });
      });
    </script>
    <div class="menu_two clearfix" id="product_big">
      @foreach( $articles as $article )
      <a rel="images_group" href="{{$article->thumbnail}}"><img src="{{$article->thumbnail}}" alt="{{$article->title}}" /><div class="txt"><h2>{{$article->title}}</h2><span>see more +</span></div></a>
      @endforeach
    </div>
    <div class="pageJump clearfix">
      <div class="number">
        @if( $pages['pre_page']  )
          <span class="disabled"><a href="/menu">首页</a></span>
          <span class="disabled"><a href="/menu?page={{ $pages['pre_page'] }}">上一页</a></span>
        @endif
        @if( $pages['next_page'] )
          <span class="disabled"><a href="/menu?page={{ $pages['next_page'] }}">下一页</a></span>
          <span class="disabled"><a href="/menu?page={{ $pages['total_page'] }}">尾页</a></span>
        @endif
      </div>
    </div>
    <!-- end -->
  </div>  
</div>
<span class="bk60">&nbsp;</span>
<!-- end -->
@endsection