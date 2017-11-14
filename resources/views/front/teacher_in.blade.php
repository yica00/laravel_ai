@extends('front.base')
@section('content')
<!-- bread -->
<span class="bk30">&nbsp;</span>
<div class="bread">
  <div class="w1280 clearfix">
    <div class="in_tit_all">
      <div class="bt"><span>Star   <b>teachers</b></span>/ 明星师资</div>
    </div>
  </div>
</div>
<div class="wap_box">
  <div class="w1280 clearfix">
  <!-- start -->
  <div class="teacher_dis clearfix">
    <div class="txt fr">
      <h2 class="tit">{{$team->name}}</h2>
      <h3 class="zw">{{$team->title}}</h3>
      <div class="jj">
        @foreach( explode(',',$team->introduce) as $intro )
          <p>{{$intro}}</p>
         @endforeach
      </div>
    </div>
    <div class="pic fl">
      <img src="{{$team->photo}}">
    </div>
  </div>
  <span class="bk50">&nbsp;</span>
    <div class="wor_tea_in">
      <h2 class="tit">相关作品</h2>
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
      <ul class="work_list_in clearfix">
        @foreach( $team->rcases as $case  )
        <li>
          <a rel="images_group" href="{{$case->thumbnail}}"><div class="pic"><img src="{{$case->thumbnail}}" alt=""><div class="txt">{{$case->title}}</div></div></a>
        </li>
        @endforeach
      </ul>
    </div>
  {{--<div class="backpre clearfix">      --}}
    {{--<a href="teacher_in.html" rel="next">上一篇</a>--}}
    {{--<a href="teacher_in.html" rel="prev">下一篇</a>--}}
    {{--<a href="teacher.html">返回上级目录</a>--}}
  {{--</div>--}}
  <!-- end -->
  </div>
  <span class="bk80">&nbsp;</span>
</div>
<!-- item -->
@endsection