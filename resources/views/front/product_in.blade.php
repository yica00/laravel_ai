@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <p>------&nbsp;&nbsp;product center&nbsp;&nbsp;------</p>
      <h2><span>产</span><span>品</span><span>中</span><span>心</span></h2>
    </div>
  </div>
</div>
<!-- sublist -->
<div class="w1160 clearfix">
  <ul class="sublist">
    <li><a href="product.html" class="on">瓷砖</a></li>
    <li><a href="product.html">吊顶</a></li>
    <li><a href="product.html">厨卫</a></li>
    <li><a href="product.html">腻子粉</a></li>
    <li><a href="product.html">乳胶漆</a></li>
    <li><a href="product.html">门</a></li>
  </ul>
</div>
<!--  -->
<div class="wap_box">
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
        <div class="mf-property fr">
          <h2 class="main-tit">The cat's meow三人沙发</h2>
          <div class="promise">
                    <div class="txt">
                      <p><span>品牌：</span>Caracole</p>
                      <p><span>型号：</span>UPH-SOFWOO-23A</p>
                      <p><span>主材：</span>桦木</p>
                      <p><span>简介：</span>当色彩专家Leatrice Eiseman坐在这款无与伦比的沙发上时，她认为它散发着超凡的艺术的气息，同时这也是她所钟爱的色调之一。The cat's meow三人沙发的纹理和颜色流露着自然的气息，而沙发的外形线条跳出常规，新颖别致。这款沙发不建议靠墙摆放，因为沙发背部线条同样有着极强的吸引力。</p>
                    </div>
                    <p class="btn clearfix"><a href="product.html" class="back fr">返回上级目录</a></p>   
          </div>
        </div>
        <div class="real_save fl">
          <div id="slideRealman" class="slideRealman">
              <div class="bd">
                 <ul>
                    <li><a rel="images_group" href="images/cp_1.jpg"><img src="images/cp_1.jpg"/></a></li>
                    <li><a rel="images_group" href="images/cp_2.jpg"><img src="images/cp_2.jpg"/></a></li>
                    <li><a rel="images_group" href="images/cp_3.jpg"><img src="images/cp_3.jpg"/></a></li>
                    <li><a rel="images_group" href="images/cp_4.jpg"><img src="images/cp_4.jpg"/></a></li>
                    <li><a rel="images_group" href="images/cp_5.jpg"><img src="images/cp_5.jpg"/></a></li>
                    <li><a rel="images_group" href="images/cp_6.jpg"><img src="images/cp_6.jpg"/></a></li>
                    <li><a rel="images_group" href="images/cp_7.jpg"><img src="images/cp_7.jpg"/></a></li>
                    <li><a rel="images_group" href="images/cp_8.jpg"><img src="images/cp_8.jpg"/></a></li>
                    <li><a rel="images_group" href="images/cp_3.jpg"><img src="images/cp_3.jpg"/></a></li>
                    <li><a rel="images_group" href="images/cp_7.jpg"><img src="images/cp_7.jpg"/></a></li>
                    <li><a rel="images_group" href="images/cp_8.jpg"><img src="images/cp_8.jpg"/></a></li>
                    <li><a rel="images_group" href="images/cp_3.jpg"><img src="images/cp_3.jpg"/></a></li>
                 </ul>
              </div>
              <div class="picScroll-maimg hd">
                  <div class="inhd clearfix">
                    <a class="next">&nbsp;</a>
                    <a class="prev">&nbsp;</a>
                  </div>
                  <div class="inbd">
                    <ul class="picList">
                      <li><img src="images/cp_1.jpg"/></li>
                      <li><img src="images/cp_2.jpg"/></li>
                      <li><img src="images/cp_3.jpg"/></li>
                      <li><img src="images/cp_4.jpg"/></li>
                      <li><img src="images/cp_5.jpg"/></li>
                      <li><img src="images/cp_6.jpg"/></li>
                      <li><img src="images/cp_7.jpg"/></li>
                      <li><img src="images/cp_8.jpg"/></li>
                      <li><img src="images/cp_3.jpg"/></li>
                      <li><img src="images/cp_7.jpg"/></li>
                      <li><img src="images/cp_8.jpg"/></li>
                      <li><img src="images/cp_3.jpg"/></li>
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
    <!-- end -->
  </div>  
</div>
<span class="bk50">&nbsp;</span>
<!-- footer -->
@endsection