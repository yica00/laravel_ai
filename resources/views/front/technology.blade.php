@extends('front.base')
@section('content')
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
          <p>technology</p>
        <h2>--&nbsp;&nbsp;技术&nbsp;&nbsp;--</h2>
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
    @foreach( session('header_nav')[3]->sons as $leader1 )
      <a href="{{ $leader1->link  }}"  @if( $leader1->link == $sty ) class="on" @endif >{{  mb_substr($leader1->title,2,20,'utf8' ) }}</a>
    @endforeach
   </div>
   </div>
   <span class="bk40">&nbsp;</span>
   <div class="tech_nrbox">
   <!-- 1 -->
    <div class="dl_1">
     <h2>定制建站</h2>
      {!! $article->comtent !!}
    </div>
    <span class="bk40">&nbsp;</span>
    <div class="w1160 clearfix">
    <!-- 2 -->
      <ul class="dl_2 clearfix">
        @foreach( $articles as $article )
        <li>
          <h2>企业网站定制</h2>
          <div class="bot">
            <h3>{{ $article->link }}<span>元/首年</span></h3>
            <div class="txt">
            {!! $article->comtent !!}
            </div>
          </div>
        </li>
        @endforeach
      </ul>
      <span class="bk40">&nbsp;</span>
    <!-- 3 -->
    <div class="processout">
        <div class="w1160 clearfix">
          <span class="bk30">&nbsp;</span>
          <div class="ho_tit_all">
            <p>Site delivery process</p>
            <h2>项目交付流程</h2>
            <h3>优化业务流程、提高工作效率，快速、高质量交付项目，提供超预期的服务</h3>
          </div>
          <span class="bk50">&nbsp;</span>
          <ul class="list clearfix">
            <li>
              <img src="images/pro_1.png" alt="" class="imggocircle">
              <h2>需求沟通</h2>
              <p>倾听客户需求，提供专业建议，确定设计风格</p>
            </li>
            <li>
              <img src="images/pro_2.png" alt="" class="imggocircle">
              <h2>策划方案</h2>
              <p>为您的企业定制个性化互联网策划书</p>
            </li>
            <li>
              <img src="images/pro_3.png" alt="" class="imggocircle">
              <h2>前端制作</h2>
              <p>CSS、JS、HTML5实现页面的展示动态</p>
            </li>
            <li>
              <img src="images/pro_4.png" alt="" class="imggocircle">
              <h2>程序开发</h2>
              <p>开发网站后台管理系统</p>
            </li>
            <li>
              <img src="images/pro_5.png" alt="" class="imggocircle">
              <h2>验收上线</h2>
              <p>填充网站内容，确认上传，交付客户收付尾款服务</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
   


  
  </div>
  <!-- 内容结束 -->
</div>
<span class="bk80">&nbsp;</span>
<!-- contactout -->
@endsection