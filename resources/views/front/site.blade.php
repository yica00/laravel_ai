@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;服务中心&nbsp;&nbsp;--</h2>
        <p>service</p>
      </div>
      <p class="page_nav clearfix">
        <a href="service.html">服务流程</a><a href="service.html">承诺保障</a><a href="site.html" class="on">安装现场</a>
      </p>
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
    <div id="food_list" class="clearfix">
      <a rel="images_group" href="images/cp_5.jpg">
          <span class="pic"><img src="images/cp_5.jpg" alt="" /></span>
          <div class="top">
            <h2>保利东滨</h2>
            <h3>地址：青华路153号</h3>
            <p class="bot">安装：<em>1户</em></p>
          </div>
        </a>
        <a rel="images_group" href="images/cp_6.jpg">
          <span class="pic"><img src="images/cp_6.jpg" alt="" /></span>
          <div class="top">
            <h2>保利东滨</h2>
            <h3>地址：青华路153号</h3>
            <p class="bot">安装：<em>1户</em></p>
          </div>
        </a>
        <a rel="images_group" href="images/cp_7.jpg">
          <span class="pic"><img src="images/cp_7.jpg" alt="" /></span>
          <div class="top">
            <h2>保利东滨</h2>
            <h3>地址：青华路153号</h3>
            <p class="bot">安装：<em>1户</em></p>
          </div>
        </a>
        <a rel="images_group" href="images/cp_8.jpg">
          <span class="pic"><img src="images/cp_8.jpg" alt="" /></span>
          <div class="top">
            <h2>保利东滨</h2>
            <h3>地址：青华路153号</h3>
            <p class="bot">安装：<em>1户</em></p>
          </div>
        </a>
        <a rel="images_group" href="images/cp_9.jpg">
          <span class="pic"><img src="images/cp_9.jpg" alt="" /></span>
          <div class="top">
            <h2>保利东滨</h2>
            <h3>地址：青华路153号</h3>
            <p class="bot">安装：<em>1户</em></p>
          </div>
        </a>
        <a rel="images_group" href="images/cp_5.jpg">
          <span class="pic"><img src="images/cp_5.jpg" alt="" /></span>
          <div class="top">
            <h2>保利东滨</h2>
            <h3>地址：青华路153号</h3>
            <p class="bot">安装：<em>1户</em></p>
          </div>
        </a>
        <a rel="images_group" href="images/cp_6.jpg">
          <span class="pic"><img src="images/cp_6.jpg" alt="" /></span>
          <div class="top">
            <h2>保利东滨</h2>
            <h3>地址：青华路153号</h3>
            <p class="bot">安装：<em>1户</em></p>
          </div>
        </a>
        <a rel="images_group" href="images/cp_10.jpg">
          <span class="pic"><img src="images/cp_10.jpg" alt="" /></span>
          <div class="top">
            <h2>保利东滨</h2>
            <h3>地址：青华路153号</h3>
            <p class="bot">安装：<em>1户</em></p>
          </div>
        </a>
      </div>
      <div class="pageJump clearfix">
          <div class="number">
              <span class="disabled"><a href="">首页</a></span>
              <span class="disabled"><a href="">上一页</a></span>
              <span class="disabled"><a href="">下一页</a></span>
              <span class="disabled"><a href="">末页</a></span>
          </div>
      </div>
    <!-- end --> 
  </div>
  <span class="bk60">&nbsp;</span>
</div>
<!-- index_list -->
@endsection