@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;关于联手&nbsp;&nbsp;--</h2>
        <p>about</p>
      </div>
      <p class="page_nav clearfix">
         <a href="about.html">品牌介绍</a><a href="about.html">企业文化</a><a href="about.html">发展历程</a><a href="about.html">组织架构</a><a href="about.html">领导致辞</a><a href="show.html"  class="on">风采展示</a>
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
                    <img src="images/a1.jpg" alt="">
                    <p>风采展示</p>
                </li>
                <li>
                    <img src="images/a2.jpg" alt="">
                    <p>风采展示</p>
                </li>
                <li>
                    <img src="images/a3.jpg" alt="">
                    <p>风采展示</p>
                </li>
                <li>
                    <img src="images/a2.jpg" alt="">
                    <p>风采展示</p>
                </li>
                <li>
                    <img src="images/a1.jpg" alt="">
                    <p>风采展示</p>
                </li>
                <li>
                    <img src="images/a3.jpg" alt="">
                    <p>风采展示</p>
                </li>
            </ul>
        </div>
        <div id="listBox" class="listBox">
            <ul class="cf">
                <li class="on"><img src="images/a1.jpg" alt=""></li>
                <li class=""><img src="images/a2.jpg" alt=""></li>
                <li class=""><img src="images/a3.jpg" alt=""></li>
                <li class=""><img src="images/a2.jpg" alt=""></li>
                <li class=""><img src="images/a1.jpg" alt=""></li>
                <li class=""><img src="images/a3.jpg" alt=""></li>
            </ul>
        </div>
    </div>  
    <script type="text/javascript" src="js/photo.js"></script>
    <!-- end -->
    <!-- end --> 
  </div>
  <span class="bk60">&nbsp;</span>
</div>
<!-- index_list -->
@endsection