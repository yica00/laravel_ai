@extends('front.base')
@section('content')
<!-- start -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- start -->
    <div class="team_dis clearfix">
      <div class="pic fl">
        <img src="{{ $teacher->photo }}">
      </div>
      <div class="txt fr">
        <h2 class="clearfix"><span class="fr">{{ $teacher->title }}</span>{{ $teacher->name }}</h2>
        <dl>
          <dt>个人简历</dt>
          <dd>{{ $teacher->introduce }}</dd>
        </dl>
        <dl>
          <dt>培训项目</dt>
          <dd>
              @foreach( $teacher->iterm as $itm )
                  <span>{{ $itm  }}</span>
              @endforeach
          </dd>
        </dl>
        <dl>
          <dt>联系方式</dt>
          <dd style="font-size: 28px;">{{ $teacher->phone }}</dd>
        </dl>
      </div>
    </div>
    <span class="bk20">&nbsp;</span>
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
      <div id="food_list" class="clearfix">
          @foreach( $teacher->imgs as $itm )
              <a  rel="images_group" href="{{$itm}}">
                  <img src="{{$itm}}">
              </a>
          @endforeach

      </div>
      <div class="backpre clearfix">
          {{--@if( $up_down['1'] )<a href="/teacher/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif--}}
          {{--@if( $up_down['2'] ) <a href="/teacher/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif--}}
          <a href="/teacher">返回上级目录</a>
          </div>
    <!-- end --> 
  </div>
</div>

<!-- end -->
@endsection