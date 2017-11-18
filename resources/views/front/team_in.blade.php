@extends('front.base')
@section('content')
<div class="warp_box">
  <div class="warp_bot">
    <div class="brd_tit_all">
      <span class="bk100">&nbsp;</span>
      <h2>专家</h2>
      <p>--- experts ---</p>
    </div>  
      <!-- start -->
      <!-- 1简介 -->
      <div class="w1280 clearfix">
        <span class="bk80">&nbsp;</span>
        <div class="tea_dis_all clearfix">
          <div class="txt fr">
            <h2 class="tit">{{$team->name}}<span></span></h2>
            <div class="p1">
              <p class="b">{{$team->title}}</p>
            </div>
            <div class="p2">
              <h3><span>荣誉</span></h3>
              @foreach( explode(',',$team->honor) as $honor )
              {{$honor}}<br>
              @endforeach
              <br>
            </div>
            <div class="p2">
              <h3><span>擅长项目</span></h3>
              <p>{{$team->good_at}}</p>
            </div>
          </div>
          <div class="pic fl">
            <img src="{{$team->photo}}">
          </div>
        </div>
        <div  id="tea_about">
          <span class="bk30">&nbsp;</span>
          <div class="tea_dis_box">
            <h2 class="tit">简介</h2>
            <div class="txt">
              {!! $team->introduce !!}
            </div>
          </div>
        </div>
        <span class="bk30">&nbsp;</span>
        <div class="tea_bt_all">手术照片</div>
        <span class="bk30">&nbsp;</span>
        <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox-1.3.4.css" media="screen">
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
        <div class="tea_img_all clearfix">
          <div class="clearfix">
            @foreach( $team->comtent as $img )
            <a class=" w390 fl mR20" rel="images_group" href="{{$img}}" style="width: 30%;float: left;display: inline-block;margin-top: 10px" >
              <img src="{{$img}}">
            </a>
            @endforeach
            {{--<a class="w500 fl mR20" rel="images_group" href="images/sh2.jpg">--}}
              {{--<img src="images/sh2.jpg">--}}
            {{--</a>--}}
            {{--<a class="w240 fl" rel="images_group" href="images/sh3.jpg">--}}
              {{--<img src="images/sh3.jpg">--}}
            {{--</a>--}}
          </div>
          <span class="bk20">&nbsp;</span>
          {{--<div class="clearfix">--}}
            {{--<a class="w350 fl mR20" rel="images_group" href="images/sh4.jpg">--}}
              {{--<img src="images/sh4.jpg">--}}
            {{--</a>--}}
            {{--<a class="w390 fl mR20" rel="images_group" href="images/sh5.jpg">--}}
              {{--<img src="images/sh5.jpg">--}}
            {{--</a>--}}
            {{--<a class="w500 fl" rel="images_group" href="images/sh6.jpg">--}}
              {{--<img src="images/sh6.jpg">--}}
            {{--</a>--}}
          {{--</div>--}}
        </div>
      </div>
      <!-- end -->
      <span class="bk80">&nbsp;</span>
      <span class="bk100">&nbsp;</span>
  </div>
</div>
@endsection