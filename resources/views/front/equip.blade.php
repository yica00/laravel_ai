@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;专业设备&nbsp;&nbsp;--</h2>
        <p>Professional equipment</p>
      </div>
      <!--<p class="page_nav clearfix">
        <a href="about.html" class="on">嘉彩简介</a><a href="about.html">企业文化</a><a href="office.html">办公环境</a><a href="office.html">荣誉资质</a>
       </p> -->
  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <span class="bk50">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- start -->
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />
      <script type="text/javascript" src="js/jquery.fancybox-1.3.4.js"></script>
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
    <div id="equip_list" class="clearfix">
        @foreach( $articles as $article )
        <a rel="images_group" href="{{ $article->thumbnail }}">
          <img src="{{ $article->thumbnail }}">
          <span>{{ $article->title }}</span>
        </a>
        @endforeach
      </div>
    <div class="pageJump clearfix">
        <div class="number">
            @if(  $pages['pre_page']  )
                <span class="disabled"><a href="/equipment">首页</a></span>
                <span class="disabled"><a href="/equipment?page={{ $pages['pre_page'] }}">上一页</a></span>
            @endif
            @if( $pages['next_page'] )
                <span class="disabled"><a href="/equipment?page={{ $pages['next_page'] }}">下一页</a></span>
                <span class="disabled"><a href="/equipment?page={{ $pages['total_page'] }}">尾页</a></span>
            @endif
        </div>
    </div>
    <!-- end --> 
  </div>
  <span class="bk60">&nbsp;</span>
</div>
<span class="bk60">&nbsp;</span>
<!-- footer -->
@endsection