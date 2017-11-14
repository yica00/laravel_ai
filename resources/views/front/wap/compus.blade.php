@extends('front.wap.base')
@section('header')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">联合校区<span class=""></span></a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
    <div id="overlay"></div>
    <div id="win">
      <ul class="dropdown">
        <li class="on"><a href="/wap/about">品牌简介</a></li>
        <li><a href="/wap/culture">企业文化</a></li>
        <li><a href="/wap/video">视频中心</a></li>
        <li><a href="/wap/compus">联合校区</a></li>
      </ul>
    </div>
  </div>
@endsection
@section('content')
<!-- start -->
<div class="list_mode">
  <div class="compus_out">
    <div class="btn_list clearfix">
      <ul class="clearfix">
        @foreach( $cates as $cate )
        <li class="col-xs-4 @if( $cate->id == $article->id ) on @endif "><a href="/wap/compus/{{$cate->id}}">{{$cate->title}}</a></li>
        @endforeach
      </ul>
    </div>
  </div>
  <div class="compus_top">
    <p>招生服务咨询热线 <span>{{ explode(',',$article->introduce)[0] }}</span></p>
    <span class="bk20">&nbsp;</span>
    <p>总校地址 <span>{{ explode(',',$article->introduce)[1] }}</span></p>
    <span class="bk20">&nbsp;</span>
    <p>QQ在线咨询 <span>{{ explode(',',$article->introduce)[2] }}</span></p>
    <span class="bk20">&nbsp;</span>
    <a href="http://map.baidu.com/?latlng={{ explode(',',$article->link)[1] }},{{ explode(',',$article->link)[0] }}&title={{$article->title}}&content=电话：{{ explode(',',$article->introduce)[0] }}&autoOpen=true&l" target="_blank">查看在线地图</a>
  </div>
  <span class="bk20">&nbsp;</span>
  <div class="compus_mid">
    <div class="tit">学校简介</div>
    <div class="dis">
     {!! $article->comtent !!}
    </div>
  </div>
  <span class="bk20">&nbsp;</span>
  <div class="video_list clearfix">
    @foreach( $article->articles as $arti )
    <div class="col-xs-6">
      <a href="/wap/compus/{{$arti->id}}"><div class="pic"><img src="{{$arti->thumbnail}}" alt=""></div>
        <div class="txt">{{$arti->title}}</div>
      </a>
    </div>
    @endforeach
  </div>
</div>
<!-- end -->
<!-- online_out -->
@endsection