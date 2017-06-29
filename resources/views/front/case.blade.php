@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;案例中心&nbsp;&nbsp;--</h2>
        <p>case</p>
      </div>
      <!-- <p class="page_nav clearfix">
         <a href="news.html" class="on">公司新闻</a>
            <a href="news.html">行业动态</a>
      </p> -->
  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
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
    <div id="casen_list" class="clearfix">
        <a rel="images_group" href="images/cp_5.jpg">
          <img src="images/cp_5.jpg" alt="" />
          <span class="box">&nbsp;</span>
          <div class="txt">
            <h2>时尚雅致 布艺沙发</h2>
            <p>110平米二居室</p>
          </div>
        </a>
        <a rel="images_group" href="images/cp_6.jpg">
          <img src="images/cp_6.jpg" alt="" />
          <span class="box">&nbsp;</span>
          <div class="txt">
            <h2>时尚雅致 布艺沙发</h2>
            <p>110平米二居室</p>
          </div>
        </a>
        <a rel="images_group" href="images/cp_7.jpg">
          <img src="images/cp_7.jpg" alt="" />
          <span class="box">&nbsp;</span>
          <div class="txt">
            <h2>时尚雅致 布艺沙发</h2>
            <p>110平米二居室</p>
          </div>
        </a>

        <a rel="images_group" href="images/cp_8.jpg">
          <img src="images/cp_8.jpg" alt="" />
          <span class="box">&nbsp;</span>
          <div class="txt">
            <h2>时尚雅致 布艺沙发</h2>
            <p>110平米二居室</p>
          </div>
        </a>
        <a rel="images_group" href="images/cp_9.jpg">
          <img src="images/cp_9.jpg" alt="" />
          <span class="box">&nbsp;</span>
          <div class="txt">
            <h2>时尚雅致 布艺沙发</h2>
            <p>110平米二居室</p>
          </div>
        </a>
        <a rel="images_group" href="images/cp_10.jpg">
          <img src="images/cp_10.jpg" alt="" />
          <span class="box">&nbsp;</span>
          <div class="txt">
            <h2>时尚雅致 布艺沙发</h2>
            <p>110平米二居室</p>
          </div>
        </a>
        <a rel="images_group" href="images/cp_6.jpg">
          <img src="images/cp_6.jpg" alt="" />
          <span class="box">&nbsp;</span>
          <div class="txt">
            <h2>时尚雅致 布艺沙发</h2>
            <p>110平米二居室</p>
          </div>
        </a>
        <a rel="images_group" href="images/cp_7.jpg">
          <img src="images/cp_7.jpg" alt="" />
          <span class="box">&nbsp;</span>
          <div class="txt">
            <h2>时尚雅致 布艺沙发</h2>
            <p>110平米二居室</p>
          </div>
        </a>

        <a rel="images_group" href="images/cp_8.jpg">
          <img src="images/cp_8.jpg" alt="" />
          <span class="box">&nbsp;</span>
          <div class="txt">
            <h2>时尚雅致 布艺沙发</h2>
            <p>110平米二居室</p>
          </div>
        </a>
      </div>
    <div class="pageJump clearfix">
        <div class="number">
            <span class="disabled"><a href="">上一页</a></span>
            <span class="disabled"><a href="">1</a></span>
            <span class="disabled"><a href="">2</a></span>
            <span class="disabled"><a href="">3</a></span>
            <span class="disabled"><a href="">下一页</a></span>
        </div>
    </div>
    <!-- end --> 
  </div>
  <span class="bk60">&nbsp;</span>
</div>
<!-- index_list -->
@endsection