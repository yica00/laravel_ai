@extends('front.base')
@section('content')
<!-- bread -->
<span class="bk30">&nbsp;</span>
<div class="bread">
  <div class="w1280 clearfix">
    <div class="in_tit_all">
      <div class="bt"><span>Brand <b>culture</b></span>/ 品牌文化</div>
    </div>
    <ul class="sublist clearfix sub_5">
      @foreach( session('header_nav') as $cate )
        @if( $cate->id == 6 )
          @foreach( $cate->articles as $art )
            <li class="@if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link ) on @endif">
              <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" >{{$art->title}}</a>
            </li>
          @endforeach
        @endif
      @endforeach
    </ul>
  </div>
</div>
<div class="wap_box">
  <div class="w1280 clearfix">
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
  <div class="slideTxtBox">
    <div class="hd">
      <ul>
        @foreach( $cates as $cate )
        <li @if( $cate->id == $id ) class="on" @endif ><a href="/about/compus/{{$cate->id}}"><h2>{{$cate->title}}</h2><p>campus</p></a></li>
        @endforeach
      </ul>
    </div>
    <div class="bd">
      <div class="compus_in">
        <div class="top">
          <p>招生服务咨询热线 <span>{{ explode(',',$article->introduce)[0] }}</span></p>
          <span class="bk20">&nbsp;</span>
          <p>总校地址 <span>{{ explode(',',$article->introduce)[1] }}</span></p>
          <span class="bk20">&nbsp;</span>
          <p>QQ在线咨询 <span>{{ explode(',',$article->introduce)[2] }}</span></p>
          <span class="bk20">&nbsp;</span>
          <a href="http://map.baidu.com/?latlng={{ explode(',',$article->link)[1] }},{{ explode(',',$article->link)[0] }}&title={{$article->title}}&content=电话：{{ explode(',',$article->introduce)[0] }}&autoOpen=true&l" target="_blank">查看在线地图</a>
        </div>
        <span class="bk20">&nbsp;</span>
        <div class="mid">
          <div class="tit">学校简介</div>
          <div class="dis">
            {!! $article->comtent !!}
          </div>
        </div>
        <span class="bk20">&nbsp;</span>
        <ul class="compus_list_in clearfix">
          @foreach( $article->articles as $arti )
          <li>
            <a rel="images_group" href="{{$arti->thumbnail}}">
              <div class="pic"><img src="{{$arti->thumbnail}}" alt=""></div>
              <div class="txt">{{$arti->title}}</div>
            </a>
          </li>
          @endforeach
        </ul>
      </div>

    </div>
  </div>
  <script type="text/javascript">jQuery(".slideTxtBox").slide();</script>
    
  <!-- end -->
  </div>
  <span class="bk80">&nbsp;</span>
</div>
<!-- item -->
@endsection