@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;产品中心&nbsp;&nbsp;--</h2>
        <p>product</p>
      </div>
      <p class="page_nav clearfix">
        <a href="product.html" class="on">沙发</a><a href="product.html">酒柜</a><a href="product.html">衣柜</a><a href="product.html">床</a><a href="product.html">桌椅</a><a href="product.html">鞋柜</a><a href="product.html">橱柜</a><a href="product.html">书柜</a><a href="product.html">茶几</a><a href="product.html">电视柜</a><a href="product.html">梳妆台</a><a href="product.html">窗帘</a>
      </p>
  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- start -->
     <div class="mod18">
        <span id="prev" class="btn prev"></span>
        <span id="next" class="btn next"></span>
        <span id="prevTop" class="btn prev"></span>
        <span id="nextTop" class="btn next"></span>
        <div id="picBox" class="picBox">
            <ul class="cf">
                <li>
                    <img src="images/cp_5.jpg" alt="">
                    <p>产品相册</p>
                </li>
                <li>
                    <img src="images/cp_6.jpg" alt="">
                    <p>产品相册</p>
                </li>
                <li>
                    <img src="images/cp_7.jpg" alt="">
                    <p>产品相册</p>
                </li>
                <li>
                    <img src="images/cp_8.jpg" alt="">
                    <p>产品相册</p>
                </li>
                <li>
                    <img src="images/cp_9.jpg" alt="">
                    <p>产品相册</p>
                </li>
                <li>
                    <img src="images/cp_10.jpg" alt="">
                    <p>产品相册</p>
                </li>
            </ul>
        </div>
        <div id="listBox" class="listBox">
            <ul class="cf">
                <li class="on"><img src="images/cp_5.jpg" alt=""></li>
                <li class=""><img src="images/cp_6.jpg" alt=""></li>
                <li class=""><img src="images/cp_7.jpg" alt=""></li>
                <li class=""><img src="images/cp_8.jpg" alt=""></li>
                <li class=""><img src="images/cp_9.jpg" alt=""></li>
                <li class=""><img src="images/cp_10.jpg" alt=""></li>
            </ul>
        </div>
    </div>  
    <script type="text/javascript" src="js/photo.js"></script>
    <!-- end --> 
  </div>
  <span class="bk60">&nbsp;</span>
</div>
<!-- index_list -->
@endsection