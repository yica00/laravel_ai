@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <p>------&nbsp;&nbsp;contact us&nbsp;&nbsp;------</p>
      <h2><span>联</span><span>系</span><span>我</span><span>们</span></h2>
    </div>
  </div>
</div>
<!-- sublist -->
<div class="w1160 clearfix">
  <ul class="sublist">
    <li><a href="contact.html">联系方式</a></li>
    <li><a href="online.html" class="on">在线留言</a></li>  
  </ul>
</div>
<!--  -->
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <form class="on_form" action="" method="post">
      <p><input type="text" value="" name="name" id="" class="input" placeholder="请输入您的真实姓名"></p>
      <p><input type="text" value="" name="email" id="" class="input" placeholder="请输入您的电子邮箱"></p>
      <p><input type="text" value="" name="tel" id="" class="input" placeholder="请输入您的真实手机号码"></p>
      <p><textarea name="content" class="textarea" id="" value="" placeholder="留言"></textarea></p>
      <p><button type="submit" class="submit_but">确认提交</button></p>
    </form>

    <!-- end -->
  </div>  
</div>
<span class="bk50">&nbsp;</span>
<!-- footer -->
@endsection