@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <h2>Stores presence</h2>
      <p>门店风采</p>
      <div class="line">&nbsp;</div>
    </div>
  </div>
</div>
<span class="bk30">&nbsp;</span>
<!-- start -->
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div class="store_big_box">
      <div class="txt fr">
            <h2 class="tit">{{$article->title}}</h2>
            <div class="list">
              <div class="p1">
                <h2>联系电话</h2>
                <p>{{$article->serial_number}}</p>
              </div>
              <span class="bk20">&nbsp;</span>
              <div class="p2">
                <h2>联系地址</h2>
                <p>{{$article->link}}</p>
              </div>
            </div>
      </div>
      <img src="{{$article->thumbnail}}" alt="{{$article->title}}" />
    </div>
    <span class="bk20">&nbsp;</span>
    <div class="store_mid_box">
      <h2>门店简介</h2>
      <div class="txt">
        {{$article->introduce}}
      </div>
    </div>
    <span class="bk20">&nbsp;</span>
    <div class="store_mid_box">
      <h2>门店环境</h2>
      <div class="txt">
        <div class="mod18">
          <span id="prev" class="btn prev"></span>
          <span id="next" class="btn next"></span>
          <span id="prevTop" class="btn prev"></span>
          <span id="nextTop" class="btn next"></span>
          <div id="picBox" class="picBox">
              <ul class="cf">
                  @foreach( $article->comtent[0] as $img )
                  <li>
                      <img src="{{$img}}" alt="">
                      <p></p>
                  </li>
                   @endforeach
              </ul>
          </div>
          <div id="listBox" class="listBox">
              <ul class="cf">
                  @foreach( $article->comtent[0] as $img )
                  <li><img src="{{$img}}" alt=""></li>
                  @endforeach
              </ul>
          </div>
        </div>  
        <script type="text/javascript" src="/js/photo.js"></script>
      </div>
    </div>
    
    <!-- end -->
  </div>  
</div>
<span class="bk60">&nbsp;</span>
<!-- end -->
@endsection