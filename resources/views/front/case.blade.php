@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <h2>Decoration Case</h2>
      <p>装修案例</p>
    </div>
  </div>
</div>
<div class="wap_box">
  <span class="bk40">&nbsp;</span>
  <div class="w1160 clearfix">
  <!-- start -->
  <div class="sorting">
      <div class="list clearfix">
        <div class="all fr">
          <ul class="clearfix">
            <li>
              <a href="/case/0/{{$sid}}" class=" @if( $hid == "0" )on @endif">不限</a>
              @foreach( $houses as $house )
                <a href="/case/{{$house->id}}/{{$sid}}"  class="ppp @if( $hid == $house->id )on @endif">{{$house->title}}</a>
              @endforeach
            </li>
          </ul>
        </div>
        <b class="key fl">房间</b>
      </div>
      <div class="list clearfix">
        <div class="all fr">
          <ul class="clearfix">
            <li>
              <a href="/case/{{$hid}}/0" class=" @if( $sid == "0" )on @endif">不限</a>
              @foreach( $styles as $style )
                <a href="/case/{{$hid}}/{{$style->id}}" class="zzz @if( $sid == $style->id )on @endif">{{$style->title}}</a>
              @endforeach
            </li>       
          </ul>
        </div>
        <b class="key fl">风格</b>
      </div>

    </div>
  <ul class="casein_list clearfix">
    @foreach( $articles as $article )
    <li>
      <a href="/case/{{$article->id}}">
        <img src="{{$article->thumbnail}}" alt="{{$article->title}}">
        <span class="mask">&nbsp;</span>
        <span class="line">&nbsp;</span>
        <span class="name">{{$article->title}}</span>
      </a>
    </li>
    @endforeach
  </ul>
  <div class="pageJump clearfix">
      <div class="number">
        @if( $pages['pre_page']  )
          <span class="disabled"><a href="/case/{{$hid}}/{{$sid}}">首页</a></span>
          <span class="disabled"><a href="/case/{{$hid}}/{{$sid}}?page={{ $pages['pre_page'] }}">上一页</a></span>
        @endif
        @if( $pages['next_page'] )
          <span class="disabled"><a href="/case/{{$hid}}/{{$sid}}?page={{ $pages['next_page'] }}">下一页</a></span>
          <span class="disabled"><a href="/case/{{$hid}}/{{$sid}}?page={{ $pages['total_page'] }}">尾页</a></span>
        @endif
      </div>
    </div>
  <!-- end -->
  </div>
  <span class="bk40">&nbsp;</span>
</div>
@endsection