@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <p>------&nbsp;&nbsp;product center&nbsp;&nbsp;------</p>
      <h2><span>产</span><span>品</span><span>中</span><span>心</span></h2>
    </div>
  </div>
</div>
<!-- sublist -->
<div class="w1160 clearfix">
  <ul class="sublist">
      @foreach( session('header_nav') as $cate )
          @if( $cate->id == 4 )
              @foreach( $cate->articles as $art )
                  <li>
                      <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" class="
            @if( $art->link )
                      @if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link )
                              on
                    @endif
                      @else
                      @if( $art->id == $article->pid ) on @endif
                      @endif
                              ">{{$art->title}}</a>
                  </li>
              @endforeach
          @endif
      @endforeach
  </ul>
</div>
<!--  -->
<div class="wap_box">
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
        <div class="mf-property fr">
          <h2 class="main-tit">{{$article->title}}</h2>
          <div class="promise">
                    <div class="txt">
                        <p>品牌：{{$article->link}}</p>
                        <p>型号：{{$article->introduce}}</p>
                        {!! $article->comtent !!}

                    </div>
                    <p class="btn clearfix"><a href="/product/category/{{$article->pid}}" class="back fr">返回上级目录</a></p>
          </div>
        </div>
        <div class="real_save fl">
          <div id="slideRealman" class="slideRealman">
              <div class="bd">
                 <ul>
                    <li><a rel="images_group" href="{{$article->thumbnail}}"><img src="{{$article->thumbnail}}"/></a></li>
                 </ul>
              </div>
              {{--<div class="picScroll-maimg hd">--}}
                  {{--<div class="inhd clearfix">--}}
                    {{--<a class="next">&nbsp;</a>--}}
                    {{--<a class="prev">&nbsp;</a>--}}
                  {{--</div>--}}
                  {{--<div class="inbd">--}}
                    {{--<ul class="picList">--}}
                      {{--<li><img src="images/cp_1.jpg"/></li>--}}
                      {{--<li><img src="images/cp_2.jpg"/></li>--}}
                      {{--<li><img src="images/cp_3.jpg"/></li>--}}
                      {{--<li><img src="images/cp_4.jpg"/></li>--}}
                      {{--<li><img src="images/cp_5.jpg"/></li>--}}
                      {{--<li><img src="images/cp_6.jpg"/></li>--}}
                      {{--<li><img src="images/cp_7.jpg"/></li>--}}
                      {{--<li><img src="images/cp_8.jpg"/></li>--}}
                      {{--<li><img src="images/cp_3.jpg"/></li>--}}
                      {{--<li><img src="images/cp_7.jpg"/></li>--}}
                      {{--<li><img src="images/cp_8.jpg"/></li>--}}
                      {{--<li><img src="images/cp_3.jpg"/></li>--}}
                    {{--</ul>--}}
                  {{--</div>--}}
              {{--</div>--}}
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
<span class="bk50">&nbsp;</span>
<!-- footer -->
@endsection