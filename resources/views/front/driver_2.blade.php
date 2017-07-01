@extends('front.base')
@section('content')
<!-- start -->
<div class="bread">
  <div class="w1160 clearfix">
      <p class="page_nav clearfix">
        <a href="/driver" >招募要求</a>
        <a href="/process" class="on">招募流程</a>
      </p>
  </div>  
</div>
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- start -->
    <ul class="drv_botin clearfix">
      <li>
        <img src="images/drv_1.png" alt="">
        <h4>准备证件</h4>
        <p>您需要携带驾驶证、监督卡和身份证</p>
      </li>
      <li>
        <img src="images/drv_2.png" alt="">
        <h4>资质审核</h4>
        <p>到达兴润，会有我们的工作人员审核您的资料</p>
      </li>
      <li>
        <img src="images/drv_3.png" alt="">
        <h4>招募成功</h4>
        <p>审核通过，成为我们的一员！</p>
      </li>
    </ul>
    {!! $article->comtent !!}
    <!-- end --> 
  </div>
</div>

<!-- end -->
@endsection