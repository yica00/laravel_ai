@extends('front.base')
@section('content')

<!--main -->
<div class="wap_big_box">
  <!-- bread -->
  <!-- <div class="bread">
      <p class="page_nav">
        <a href="expand.html" class="on">企业拓展</a>
           <a href="expand.html">亲子拓展</a>
      </p>
  </div>   -->
  <div class="w1160 clearfix"> 
    <div class="wap_box">
    <!-- start -->
    <span class="bk10">&nbsp;</span>
    <div class="txt_model">
      <div id="slideBoxexpd" class="slideBoxexpd">
        <div class="hd">
          <ul><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li></ul>
        </div>
        <div class="bd">
          <ul>
            <li><a href="" ><img src="images/case1.jpg"></a></li>
            <li><a href="" ><img src="images/case2.jpg"></a></li>
            <li><a href="" ><img src="images/case3.jpg"></a></li>
            <li><a href="" ><img src="images/case4.jpg"></a></li>
          </ul>
        </div>
      </div>
      <script type="text/javascript">jQuery(".slideBoxexpd").slide({mainCell:".bd ul",autoPlay:true});</script> 
      <dl class="expandtxt">
        <dt>项目简介</dt>
        <dd>
          {!! $article->comtent !!}}
        </dd>
      </dl>
    </div>
    <span class="bk10">&nbsp;</span>
    <!-- end -->
    </div>
  </div>
  
</div>
@endsection