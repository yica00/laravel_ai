@extends('front.base')
@section('content')
<!--main -->
<div class="wap_big_box">
  <!-- bread -->
  <div class="bread">
      <p class="page_nav">
        <a href="about.html">神鹰简介</a><a href="team.html">教练团队</a><a href="honor.html" class="on">荣誉资质</a>
      </p>
  </div>  
  <div class="w1160 clearfix"> 
    <div class="wap_box">
    <!-- start -->
    <span class="bk30">&nbsp;</span>
     <div class="mod18">
        <span id="prev" class="btn prev"></span>
        <span id="next" class="btn next"></span>
        <span id="prevTop" class="btn prev"></span>
        <span id="nextTop" class="btn next"></span>
        <div id="picBox" class="picBox">
            <ul class="cf" style="width: 6720px; left: -1680px;">
                <li>
                    <img src="images/a1.jpg" alt="">
                    <p>荣誉资质名称</p>
                </li>
                <li>
                    <img src="images/a2.jpg" alt="">
                    <p>荣誉资质名称</p>
                </li>
                <li>
                    <img src="images/a3.jpg" alt="">
                    <p>荣誉资质名称</p>
                </li>
                <li>
                    <img src="images/a4.jpg" alt="">
                    <p>荣誉资质名称</p>
                </li>
                <li>
                    <img src="images/a5.jpg" alt="">
                    <p>荣誉资质名称</p>
                </li>
                <li>
                    <img src="images/a6.jpg" alt="">
                    <p>荣誉资质名称</p>
                </li>
            </ul>
        </div>
        <div id="listBox" class="listBox">
            <ul class="cf" style="width: 3000px; left: 0px;">
                <li class="on"><img src="images/a1.jpg" alt=""></li>
                <li class=""><img src="images/a2.jpg" alt=""></li>
                <li class=""><img src="images/a3.jpg" alt=""></li>
                <li class=""><img src="images/a4.jpg" alt=""></li>
                <li class=""><img src="images/a5.jpg" alt=""></li>
                <li class=""><img src="images/a6.jpg" alt=""></li>
            </ul>
        </div>
    </div>  
    <script type="text/javascript" src="js/photo.js"></script>
    <span class="bk60">&nbsp;</span>
    <!-- end -->
    </div>
  </div>
  
</div>
@endsection