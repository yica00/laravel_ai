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
          <a href="/about" >星维简介</a><a href="/culture" class="on">企业文化</a><a href=/office_env>办公环境</a><a href="/team">优秀团队</a><a href="/honor">荣誉资质</a>
      </p>
  </div>  
</div> 
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
      {!! $article->comtent !!}
  </div>  
  <span class="bk60">&nbsp;</span>
</div>
<!-- contact_out -->
@endsection