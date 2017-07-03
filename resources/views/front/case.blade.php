@extends('front.base')
@section('content')
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
          <p>case</p>
        <h2>--&nbsp;&nbsp;案例&nbsp;&nbsp;--</h2>
      </div>
      <!--<p class="page_nav">
          <a href="case.html" class="on">中式</a>
          <a href="case.html">欧式</a>
          <a href="case.html">现代</a>
          <a href="case.html">地中海式</a>
       </p> -->
  </div>  
</div>
<!-- 内页 -->
<span class="bk100">&nbsp;</span>
<span class="bk100">&nbsp;</span>
<span class="bk10">&nbsp;</span>
<div class="wap_box">
  <!-- 内容开始 -->
  <div class="w1160 clearfix">
    <div class="page_nav clearfix">
        @foreach( $articles as $article  )
          <a href="/case/category/{{ $article->id }}"  @if($article->id == $id ) class="on" @endif>{{ $article->title }}</a>
        @endforeach
       </div>
  </div>
  <span class="bk40">&nbsp;</span>
   <div class="caseout">
    <ul class="list clearfix">
      <!--  data-150-bottom-center="transform: rotateY(-90deg); opacity: 0" data-150-center-center="transform: rotate(0); opacity: 1" class="skrollable skrollable-between" -->
      <li><a href="case_in.html"><img src="images/case_1.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
      <li><a href="case_in.html"><img src="images/case_2.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
      <li><a href="case_in.html"><img src="images/case_3.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
      <li><a href="case_in.html"><img src="images/case_4.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
      <li><a href="case_in.html"><img src="images/case_5.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
      <li><a href="case_in.html"><img src="images/case_6.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
      <li><a href="case_in.html"><img src="images/case_7.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
      <li><a href="case_in.html"><img src="images/case_8.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
      <li><a href="case_in.html"><img src="images/case_1.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
      <li><a href="case_in.html"><img src="images/case_2.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
      <li><a href="case_in.html"><img src="images/case_3.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
      <li><a href="case_in.html"><img src="images/case_4.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
      <li><a href="case_in.html"><img src="images/case_5.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
      <li><a href="case_in.html"><img src="images/case_6.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
      <li><a href="case_in.html"><img src="images/case_7.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
      <li><a href="case_in.html"><img src="images/case_8.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
    </ul>
  </div>
  <div class="pageJump clearfix">
      <div class="number">
          <span class="disabled"><a href="">首页</a></span>
          <span class="disabled"><a href="">上一页</a></span>
          <span class="disabled"><a href="">下一页</a></span>
          <span class="disabled"><a href="">末页</a></span>
      </div>
  </div>
  <!-- 内容结束 -->
</div>
<span class="bk80">&nbsp;</span>
<!-- contactout -->
@endsection