@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;联系我们&nbsp;&nbsp;--</h2>
        <p>contact us</p>
      </div>
      <p class="page_nav clearfix">
          <a href="contact.html" class="on">在线留言</a><a href="way.html">联系方式</a>
      </p>
  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div class="sub_con_t clearfix">
      <div class="dl_l fr">
          <form class="on_form" action="" method="post">
            <p><input type="text" value="" name="name" id="" class="input" placeholder="姓名"></p>
            <p><input type="text" value="" name="email" id="" class="input" placeholder="邮箱"></p>
            <p><input type="text" value="" name="tel" id="" class="input" placeholder="手机"></p>
            <p><textarea name="content" class="textarea" id="" value="" placeholder="留言"></textarea></p>
            <p><button type="submit" class="submit_but">&nbsp;</button></p>
          </form>
        </div>
        <div class="img fl">
          <img src="images/quote.jpg">
        </div>
    </div>
    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>


<!-- footer -->
@endsection