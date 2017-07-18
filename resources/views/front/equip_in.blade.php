@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;配件库房&nbsp;&nbsp;--</h2>
        <p>Parts warehouse</p>
      </div>
  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox-1.3.4.css" media="screen" />
    <script type="text/javascript" src="/js/jquery.fancybox-1.3.4.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
         
        $("a[rel=images_group]").fancybox({
          'transitionIn':'none',
          'transitionOut':'none',
          'titlePosition':'over',
          'titleFormat':function(title, currentArray, currentIndex, currentOpts) {
            return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
          }
        });
      });
    </script>
    <div class="clearfix">
      <div class="pro_in_txt fr">
          <h2>{{$article->title}}</h2>
          <div class="dis">
              @if( isset( $articles[2] ) )
                  {!! $articles[2]->comtent !!}
              @endif
              <p  class="more"> <a href="/equipment/{{$article->id}}#pro_more_dis">点击查看更多介绍</a></p>
          </div>
          <p class="call">销售热线：{{ session('setting')['fix_phone']  }}</p>

      </div>
      <div class="real_save fl">
          <div id="slideRealman" class="slideRealman">
              <div class="bd">
                 <ul class="productin_list">
                     @if( isset( $articles[0] ) )
                         @foreach( $articles[0]->comtent[0] as $img )
                             <li><a rel="images_group" href="{{$img}}"><img src="{{$img}}" alt="" /></a></li>
                         @endforeach
                     @endif
                 </ul>
              </div>
              <!-- 小图 -->
              <div class="picScroll-maimg hd">
                  <div class="inhd clearfix">
                    <a class="next">&nbsp;</a>
                    <a class="prev">&nbsp;</a>
                  </div>
                  <div class="inbd">
                    <ul class="picList">
                        @if( isset( $articles[0] ) )
                            @foreach( $articles[0]->comtent[0] as $img )
                                <li><img src="{{$img}}"/></li>
                            @endforeach
                        @endif
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
    <span class="bk30">&nbsp;</span>
    <div id="pro_more_dis" class="pro_more_dis">
      <h2 class="tit">详细介绍</h2>
      <div class="dis">
          @if( isset( $articles[1] ) )
              {!! $articles[1]->comtent !!}
          @endif
      </div>
    </div>
    <div class="backpre clearfix">
        @if( $up_down['1'] )<a href="/equipment/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
        @if( $up_down['2'] ) <a href="/equipment/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
        <a href="/equipment">返回上级目录</a>
      </div>
    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>


<!-- footer -->
@endsection