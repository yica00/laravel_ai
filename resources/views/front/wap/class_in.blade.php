@extends('front.wap.base')
@section('header')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">形象设计<span class=""></span></a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
    <div id="overlay"></div>
    <div id="win">
      <ul class="dropdown">
        @foreach( $cates as $cate )
        <li><a href="/wap/item/{{$cate->id}}">{{$cate->title}}</a></li>
        @endforeach
      </ul>
    </div>
  </div>
@endsection
@section('content')
<!-- start -->
<div class="class_mode">
  <!-- start -->
  <h2 class="item_kc_bt2">{{$article->title}}</h2>
  <div class="item_class_1 clearfix">
    <div class="img"><img src="{{$article->thumbnail}}"></div>
    <span class="bk20">&nbsp;</span>
    <div class=" dis">
      <h2>课程介绍</h2>
       {!! $article->comtent !!}
    </div>
  </div>
  <span class="bk20">&nbsp;</span>
  <div class="item_class_2 clearfix">
    <dl>
      <dt>学期</dt>
      <dd>{{  explode(',',$article->introduce)[0] }}</dd>
    </dl>
    <dl>
      <dt>学费</dt>
      <dd>{{  explode(',',$article->introduce)[1] }}</dd>
    </dl>
    <dl>
      <dt>开学日期</dt>
      <dd>{{  explode(',',$article->introduce)[2] }}</dd>
    </dl>
    <dl>
      <dt>上课地点</dt>
      <dd>{{  explode(',',$article->introduce)[3] }}</dd>
    </dl>
  </div>
  <span class="bk20">&nbsp;</span>
  <div class="clearfix">
    <div class="item_class_5">
        <a href="/wap/contact#baoming" class="tc">立即报名</a>
    </div>
  </div>
  @foreach( $article->articles as $item )
  <div class="item_class_3 clearfix">
    <h2 class="tit">{{$item->title}}</h2>
    <div class="dis">
      {{$item->introduce}}
    </div>
  </div>
  <span class="bk20">&nbsp;</span>
  @endforeach

  <div class="item_class_4 clearfix">
    <h2 class="tit">教学大纲</h2>
    <ul class="list clearfix">
      @foreach( $article->classs->articles as $item )
      <li>
        <img src="{{$item->thumbnail}}" alt="">
        <h2>{{$item->title}}</h2>
        <div class="li">
          {!! $item->comtent !!}
        </div>
      </li>
      @endforeach
    </ul>
  </div>
</div>
<!-- end -->
<!-- online_out -->
@endsection