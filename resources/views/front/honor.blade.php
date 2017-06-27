@extends('front.base')
@section('content')
<!--main -->
<div class="wap_big_box">
  <!-- bread -->
  <div class="bread">
      <p class="page_nav">
          <a href="about_us" class="on">神鹰简介</a><a href="team">教练团队</a><a href="honor">荣誉资质</a>
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
                @foreach( $honors as $honor )
                    <li>
                        <img src="{{  $honor->thumbnail }}" alt="">
                        <p>{{  $honor->title }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
        <div id="listBox" class="listBox">
            <ul class="cf" style="width: 3000px; left: 0px;">
                @foreach( $honors as $honor )
                    <li class="on"><img src="{{  $honor->thumbnail }}" alt=""></li>
                @endforeach
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