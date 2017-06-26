@extends('front.base')
@section('content')
<!--main -->
<div class="wap_big_box">
  <!-- bread -->
  <div class="bread">
      <p class="page_nav">
        <a href="base.html" class="on">西山基地</a><a href="base.html">搬罾青山湖基地</a><a href="base.html">搬罾果乐园基地</a>
      </p>
  </div>  
  <div class="w1160 clearfix"> 
    <span class="bk30">&nbsp;</span>
    <div class="wap_box">
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
  <div id="food_list" class="clearfix">
          <a  rel="images_group" href="images/base1.jpg">
           <img src="images/base1.jpg">
          </a>
          <a  rel="images_group" href="images/base2.jpg">
           <img src="images/base2.jpg">
          </a>
          <a  rel="images_group" href="images/base3.jpg">
           <img src="images/base3.jpg">
          </a>
          <a  rel="images_group" href="images/base4.jpg">
           <img src="images/base4.jpg">
          </a>
          <a  rel="images_group" href="images/base5.jpg">
           <img src="images/base5.jpg">
          </a>
          <a  rel="images_group" href="images/base6.jpg">
           <img src="images/base6.jpg">
          </a>
  </div>
    <span class="bk30">&nbsp;</span>
    <div class="pageJump clearfix">
        <div class="number">
            <span class="disabled"><a href="">首页</a></span>
            <span class="disabled"><a href="">上一页</a></span>
            <span class="disabled"><a href="">下一页</a></span>
            <span class="disabled"><a href="">末页</a></span>
        </div>
    </div>
    <span class="bk60">&nbsp;</span>
    <!-- end -->
    </div>
  </div>
  
</div>
@endsection