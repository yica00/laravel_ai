@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;成功案例&nbsp;&nbsp;--</h2>
        <p>Successful cases</p>
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
    <div id="productin_list" class="clearfix">
    <a rel="images_group" href="images/cp1.jpg"><img src="images/cp1.jpg" alt="" /></a>
    <a rel="images_group" href="images/cp2.jpg"><img src="images/cp2.jpg" alt="" /></a>
    <a rel="images_group" href="images/cp3.jpg"><img src="images/cp3.jpg" alt="" /></a>
    <a rel="images_group" href="images/cp4.jpg"><img src="images/cp4.jpg" alt="" /></a>
    <a rel="images_group" href="images/cp5.jpg"><img src="images/cp5.jpg" alt="" /></a>
    <a rel="images_group" href="images/cp6.jpg"><img src="images/cp6.jpg" alt="" /></a>
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
<span class="bk60">&nbsp;</span>
<!-- footer -->
@endsection