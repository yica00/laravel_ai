@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <p>------&nbsp;&nbsp;about us&nbsp;&nbsp;------</p>
      <h2><span>关</span><span>于</span><span>我</span><span>们</span></h2>
    </div>
  </div>
</div>
<!-- sublist -->
<div class="w1160 clearfix">
  <ul class="sublist">
    <li><a href="about.html">公司简介</a></li>
    <li><a href="about.html">企业文化</a></li>
    <li><a href="honor.html" class="on">荣誉资质</a></li>
    <li><a href="honor.html">办公环境</a></li>
  </ul>
</div>
<!--  -->
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div class="mod18">
        <span id="prev" class="btn prev"></span>
        <span id="next" class="btn next"></span>
        <span id="prevTop" class="btn prev"></span>
        <span id="nextTop" class="btn next"></span>
        <div id="picBox" class="picBox">
            <ul class="cf">
                <li>
                    <img src="images/a1.jpg" alt="">
                    <p>办公环境、荣誉资质均为相册板式</p>
                </li>
                <li>
                    <img src="images/a2.jpg" alt="">
                    <p>办公环境、荣誉资质均为相册板式</p>
                </li>
                <li>
                    <img src="images/a3.jpg" alt="">
                    <p>办公环境、荣誉资质均为相册板式</p>
                </li>
                <li>
                    <img src="images/a4.jpg" alt="">
                    <p>办公环境、荣誉资质均为相册板式</p>
                </li>
                <li>
                    <img src="images/a5.jpg" alt="">
                    <p>办公环境、荣誉资质均为相册板式</p>
                </li>
                <li>
                    <img src="images/a6.jpg" alt="">
                    <p>办公环境、荣誉资质均为相册板式</p>
                </li>
            </ul>
        </div>
        <div id="listBox" class="listBox">
            <ul class="cf">
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
    <!-- end -->
  </div>  
</div>
<span class="bk50">&nbsp;</span>
<!-- footer -->
@endsection