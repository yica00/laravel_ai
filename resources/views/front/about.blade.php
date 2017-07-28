@extends('front.base')
@section('content')
<div class="in_tit_all">
  <p>yangshi nasitis</p>
  <h2><span>杨</span><span>氏</span><span>鼻</span><span>炎</span></h2>
</div>
<!-- aboutout -->
<div class="aboutin com_style">
  <div class="w1160 clearfix">
    <div class="txt">
      <h2 class="about_tit">医院简介</h2>
      {!! $about->comtent !!}
    </div>
  </div>
  <link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />
    <script type="text/javascript" src="js/jquery.fancybox-1.3.4.js"></script>
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
  <div class="bg_e8f2ff">
    <div class="w1160 clearfix">
      <span class="bk50">&nbsp;</span>
      <h2 class="about_tit">医院环境</h2>
      <div class="img ">
        @foreach( $envs->comtent[0] as $img )
        <a rel="images_group" href="{{$img}}"><img src="{{$img}}" alt="" /></a>
        @endforeach
      </div>
      <span class="60">&nbsp;</span>
    </div>
  </div>
</div>
<!-- footer -->
@endsection