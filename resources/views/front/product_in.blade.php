@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;电梯展示&nbsp;&nbsp;--</h2>
        <p>Elevator display</p>
      </div>
       <p class="page_nav clearfix">
        <a href="product.html" class="on">载货电梯</a><a href="product.html">乘客电梯</a><a href="product.html">家用电梯</a><a href="product.html">家用电梯</a><a href="product.html">观光电梯</a><a href="product.html">汽车电梯</a><a href="product.html">自动扶梯</a><a href="product.html">自动人行道</a><a href="product.html">杂物电梯</a>
      </p>
  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
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
    <div class="clearfix">
      <div class="pro_in_txt fr">
        <h2>载货电梯轿厢WTT-4117</h2>
        <div class="dis">
          虹霖公司根据各使用单位的不同需求，结合货用电梯的大容量，大载货、运行条件恶劣等特点，调集整合国际国内优势资源，引进世界先进电梯驱动和控制技术，紧密携手，推出全新迈高MH11  、MH12、 MH22 等系列货用电梯，是广大工厂、仓库、商场等各类商业建筑和工业建筑货物运输的最佳选择。
         <p  class="more"> <a href="product_in.html#pro_more_dis">点击查看更多介绍</a></p>
        </div>
        <p class="call">销售热线：0817-2519567</p>

      </div>
      <div class="real_save fl">
          <div id="slideRealman" class="slideRealman">
              <div class="bd">
                 <ul class="productin_list">
                    <li><a rel="images_group" href="images/ht_1.jpg"><img src="images/ht_1.jpg" alt="" /></a></li>
                    <li><a rel="images_group" href="images/ht_1a.jpg"><img src="images/ht_1a.jpg" alt="" /></a></li>
                    <li><a rel="images_group" href="images/ht_1b.jpg"><img src="images/ht_1b.jpg" alt="" /></a></li>
                    <li><a rel="images_group" href="images/ht_1c.jpg"><img src="images/ht_1c.jpg" alt="" /></a></li>
                    <li><a rel="images_group" href="images/ht_1d.jpg"><img src="images/ht_1d.jpg" alt="" /></a></li>
                    <li><a rel="images_group" href="images/ht_1b.jpg"><img src="images/ht_1b.jpg" alt="" /></a></li>
                    <li><a rel="images_group" href="images/ht_1c.jpg"><img src="images/ht_1c.jpg" alt="" /></a></li>
                    <li><a rel="images_group" href="images/ht_1d.jpg"><img src="images/ht_1d.jpg" alt="" /></a></li>
                 </ul>
              </div>
              <!-- 小图 -->
              <div class="picScroll-maimg hd">
                  <div class="inhd clearfix">
                    <a class="next">&nbsp;</a>
                    <a class="prev">&nbsp;</a>
                  </div>
                  <div class="inbd">
                    <ul class="picList">
                      <li><img src="images/ht_1.jpg"/></li>
                      <li><img src="images/ht_1a.jpg"/></li>
                      <li><img src="images/ht_1b.jpg"/></li>
                      <li><img src="images/ht_1c.jpg"/></li>
                      <li><img src="images/ht_1d.jpg"/></li>
                      <li><img src="images/ht_1b.jpg"/></li>
                      <li><img src="images/ht_1c.jpg"/></li>
                      <li><img src="images/ht_1d.jpg"/></li>
                    </ul>
                  </div>
              </div>
            </div>
            <script type="text/javascript">
            jQuery(".picScroll-maimg").slide({titCell:".inhd ul",mainCell:".inbd ul",autoPage:true,effect:"left",autoPlay:true,vis:7,trigger:"click"});
            </script>
            <script type="text/javascript">
            jQuery(".slideRealman").slide({mainCell:".bd ul",autoPlay:true});
            </script>
      </div>
    </div>
    <span class="bk30">&nbsp;</span>
    <div id="pro_more_dis" class="pro_more_dis">
      <h2 class="tit">详细介绍</h2>
      <div class="dis">
        <p>安全可靠：迈高电梯满足各地安全规范，在遵循严格的欧洲安全标准（CE）的基础上，努力探索和创新安全技术，把保证人员安全和设备安全，作为我们最高的标准，不断提高电梯的安全性和可靠性。经久耐用</p>
        <p>安全可靠：迈高电梯满足各地安全规范，在遵循严格的欧洲安全标准（CE）的基础上，努力探索和创新安全技术，把保证人员安全和设备安全，作为我们最高的标准，不断提高电梯的安全性和可靠性。经久耐用</p>
        <p>安全可靠：迈高电梯满足各地安全规范，在遵循严格的欧洲安全标准（CE）的基础上，努力探索和创新安全技术，把保证人员安全和设备安全，作为我们最高的标准，不断提高电梯的安全性和可靠性。经久耐用</p>
        <p>安全可靠：迈高电梯满足各地安全规范，在遵循严格的欧洲安全标准（CE）的基础上，努力探索和创新安全技术，把保证人员安全和设备安全，作为我们最高的标准，不断提高电梯的安全性和可靠性。经久耐用</p>
        <p>安全可靠：迈高电梯满足各地安全规范，在遵循严格的欧洲安全标准（CE）的基础上，努力探索和创新安全技术，把保证人员安全和设备安全，作为我们最高的标准，不断提高电梯的安全性和可靠性。经久耐用</p>
        <p>安全可靠：迈高电梯满足各地安全规范，在遵循严格的欧洲安全标准（CE）的基础上，努力探索和创新安全技术，把保证人员安全和设备安全，作为我们最高的标准，不断提高电梯的安全性和可靠性。经久耐用</p>
      </div>
    </div>
    <div class="backpre clearfix">      
          <a href="product_in.html" rel="next">上一篇</a>
          <a href="product_in.html" rel="prev">下一篇</a>
          <a href="product.html">返回上级目录</a>
      </div>
    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>


<!-- footer -->
@endsection