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
          <a href="/about" >星维简介</a><a href="/culture">企业文化</a><a href="/office_env"  >办公环境</a><a href="/team">优秀团队</a><a href="/honor" class="on" >荣誉资质</a>
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
                @foreach($articles as $article )
                    <li>
                        <img src="{{ $article->thumbnail }}" alt="">
                        <p>{{ $article->title }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
        <div id="listBox" class="listBox">
            <ul class="cf">
                @foreach($articles as $article )
                    <li class="on"><img src="{{ $article->thumbnail }}" alt=""></li>
                @endforeach
            </ul>
        </div>
    </div>  
    <script type="text/javascript" src="js/photo.js"></script>
    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>
<!-- contact_out -->
@endsection