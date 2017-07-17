@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;关于我们&nbsp;&nbsp;--</h2>
        <p>about us</p>
      </div>
      <p class="page_nav clearfix">
          @foreach( session('header_nav')[1]->sons as $leader1 )
              <a href="{{ $leader1->link  }}" @if( $leader1->link == $sty  ) class="on" @endif>{{  mb_substr($leader1->title,2,20,'utf8' ) }}</a>
          @endforeach
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
                    <p>优秀团队、荣誉资质均为相册板式</p>
                </li>
                <li>
                    <img src="images/a2.jpg" alt="">
                    <p>优秀团队、荣誉资质均为相册板式</p>
                </li>
                <li>
                    <img src="images/a3.jpg" alt="">
                    <p>优秀团队、荣誉资质均为相册板式</p>
                </li>
                <li>
                    <img src="images/a4.jpg" alt="">
                    <p>优秀团队、荣誉资质均为相册板式</p>
                </li>
                <li>
                    <img src="images/a5.jpg" alt="">
                    <p>优秀团队、荣誉资质均为相册板式</p>
                </li>
                <li>
                    <img src="images/a6.jpg" alt="">
                    <p>优秀团队、荣誉资质均为相册板式</p>
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


<!-- footer -->
@endsection