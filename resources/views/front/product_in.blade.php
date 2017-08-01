@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">  
      <div class="top">
        <h2>--优质选材--</h2>
        <p><span>High quality material</span></p>
      </div>
    </div>
</div>
<span class="bk50">&nbsp;</span>
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div class="clearfix">
        <div class="mf-property fr">
          <h2 class="main-tit">{{$article->title}}</h2>
          <div class="promise">
                    <div class="txt">
                      <p><span>品牌：</span>{{$article->link}}</p>
                        @foreach( explode(',',$article->introduce) as $intro )
                      <p>{{$intro}}</p>
                        @endforeach
                    </div>
                    <p class="btn clearfix"><a href="/product" class="back fr">返回上级目录</a></p>
          </div>
        </div>
        <div class="real_save fl">
          <div id="slideRealman" class="slideRealman">
              <div class="bd">
                 <ul>
                     @foreach( $article->comtent[0] as $img )
                    <li><img src="{{$img}}"/></li>
                     @endforeach
                 </ul>
              </div>
              <div class="picScroll-maimg hd">
                  <div class="inhd clearfix">
                    <a class="next">&nbsp;</a>
                    <a class="prev">&nbsp;</a>
                  </div>
                  <div class="inbd">
                    <ul class="picList">
                        @foreach( $article->comtent[0] as $img )
                            <li><img src="{{$img}}"/></li>
                        @endforeach
                    </ul>
                  </div>
              </div>
            </div>
            <script type="text/javascript">
            jQuery(".picScroll-maimg").slide({titCell:".inhd ul",mainCell:".inbd ul",autoPage:true,effect:"left",autoPlay:true,vis:7,trigger:"click"});
            </script>
            <script type="text/javascript">
            jQuery(".slideRealman").slide({mainCell:".bd ul",autoPlay:true});
            </script>
        </div>
  </div>
    <!-- end -->
  </div>  
</div>
<span class="bk80">&nbsp;</span>
<!-- index_list -->
@endsection