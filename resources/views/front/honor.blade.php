@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <h2>about us</h2>
      <p>关于我们</p>
    </div>
    <span class="bk20">&nbsp;</span>
    <ul class="sublist">
      @foreach( session('header_nav') as $cate )
        @if( $cate->id == 8)
          @foreach( $cate->articles as $art )
            <li class="
            @if( $art->link )
            @if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link )
                    on
@endif
            @else
            @if( $art->id == $id ) on @endif
            @endif
                    ">
              <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" >{{$art->title}}</a>
            </li>
          @endforeach
        @endif
      @endforeach
    </ul>
  </div>
</div>
<div class="wap_box">
  <span class="bk40">&nbsp;</span>
  <div class="w1160 clearfix">
  <!-- start -->
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
  <div class="tea_act_one clearfix" id="product_big">
    @foreach( $articles as $article )
    <a rel="images_group" href="{{$article->thumbnail}}"><img src="{{$article->thumbnail}}" alt=""><div class="txt">{{$article->title}}</div></a>
    @endforeach
  </div>
  <!-- end -->
  </div>
  <span class="bk40">&nbsp;</span>
</div>
@endsection