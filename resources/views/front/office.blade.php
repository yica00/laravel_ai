@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;走进星维&nbsp;&nbsp;--</h2>
        <p>into xingwei</p>
      </div>
      <p class="page_nav clearfix">
          <a href="about.html">星维简介</a><a href="about.html">企业文化</a><a href="office.html" class="on">办公环境</a><a href="office.html">优秀团队</a><a href="office.html">荣誉资质</a>
      </p>
  </div>  
</div> 
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
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
                    <p>办公环境、优秀团队、荣誉资质均为相册板式</p>
                </li>
                <li>
                    <img src="images/a2.jpg" alt="">
                    <p>办公环境、优秀团队、荣誉资质均为相册板式</p>
                </li>
                <li>
                    <img src="images/a3.jpg" alt="">
                    <p>办公环境、优秀团队、荣誉资质均为相册板式</p>
                </li>
                <li>
                    <img src="images/a4.jpg" alt="">
                    <p>办公环境、优秀团队、荣誉资质均为相册板式</p>
                </li>
                <li>
                    <img src="images/a5.jpg" alt="">
                    <p>办公环境、优秀团队、荣誉资质均为相册板式</p>
                </li>
                <li>
                    <img src="images/a6.jpg" alt="">
                    <p>办公环境、优秀团队、荣誉资质均为相册板式</p>
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
  <span class="bk60">&nbsp;</span>
</div>
<!-- contact_out -->
@endsection