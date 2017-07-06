@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;产品中心&nbsp;&nbsp;--</h2>
        <p>product center</p>
      </div>
      <p class="page_nav clearfix">
          @foreach( session('header_nav')[4]->sons as $leader1 )
              <a href="/product/category/{{ $leader1->id  }}" @if( $leader1->id == $id  ) class="on"  @endif > {{  mb_substr($leader1->title,2,20,'utf8' ) }}</a>
          @endforeach
       </p>
  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <span class="bk50">&nbsp;</span>
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
    <div id="productin_list" class="clearfix">
    @if( isset( $article->comtent[0]  ) )
        @foreach( $article->comtent[0] as $img )
        <a rel="images_group" href="{{ $img }}"><img src="{{ $img }}" alt="" /></a>
        @endforeach
    @endif
  </div>
    <div class="pageJump clearfix">
        <div class="number">
            @if( isset( $article->comtent[1]  ) )
                @if(  $article->comtent[1]['pre_page']  )
                    <span class="disabled"><a href="/product/category/{{$id}}">首页</a></span>
                    <span class="disabled"><a href="/product/category/{{$id}}?page={{ $article->comtent[1]['pre_page'] }}">上一页</a></span>
                @endif
                @if( $article->comtent[1]['next_page'] )
                    <span class="disabled"><a href="/product/category/{{$id}}?page={{ $article->comtent[1]['next_page'] }}">下一页</a></span>
                    <span class="disabled"><a href="/product/category/{{$id}}?page={{ $article->comtent[1]['total_page'] }}">尾页</a></span>
                @endif
            @endif
        </div>
    </div>
    <!-- end --> 
  </div>
  <span class="bk60">&nbsp;</span>
</div>
<span class="bk60">&nbsp;</span>
<!-- footer -->
@endsection