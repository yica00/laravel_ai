@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;案例中心&nbsp;&nbsp;--</h2>
        <p>case</p>
      </div>

  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- start -->
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
    <div id="casen_list" class="clearfix">
        @foreach( $articles as $article )
            <a rel="images_group" href="{{ $article->thumbnail }}">
                <img src="{{ $article->thumbnail }}" alt="" />
                <span class="box">&nbsp;</span>
                <div class="txt">
                    <h2>{{ $article->title }}</h2>
                    <p>{{ $article->link }}</p>
                </div>
            </a>
        @endforeach

      </div>
    <div class="pageJump clearfix">
        <div class="number">

            @if( $pages['pre_page']  )
                <span class="disabled"><a href="/case">首页</a></span>
                <span class="disabled"><a href="/case?page={{ $pages['pre_page'] }}">上一页</a></span>
            @endif
            @if( $pages['next_page'] )
                    <span class="disabled"><a href="/case?page={{ $pages['next_page'] }}">下一页</a></span>
                    <span class="disabled"><a href="/case?page={{ $pages['total_page'] }}">尾页</a></span>
            @endif
        </div>
    </div>
    <!-- end --> 
  </div>
  <span class="bk60">&nbsp;</span>
</div>
<!-- index_list -->
@endsection