@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;试验基地&nbsp;&nbsp;--</h2>
        <p>Test site</p>
      </div>
      <p class="page_nav clearfix">
          @foreach( session('header_nav')[6]->sons as $leader1 )
              <a href="/base/categoty/{{ $leader1->id  }}" @if( $leader1->id == $id  ) class="on"  @endif > {{  mb_substr($leader1->title,2,20,'utf8' ) }}</a>
          @endforeach
        {{--<a href="base.html" class="on">自贡七星湖葡萄</a><a href="base.html">威远大棚蔬菜</a><a href="base.html">河南大豆</a><a href="base.html">眉山黄丰镇橘子</a><a href="base.html">云南西双版纳香蕉</a><a href="base.html">达州蘑菇</a><a href="base.html">贵州水稻</a>--}}
      </p>
  </div>  
</div> 
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div class="base_top">
        {!! $self->comtent !!}
    </div>
    <span class="bk30">&nbsp;</span>
    <div class="mod18">
        <span id="prev" class="btn prev"></span>
        <span id="next" class="btn next"></span>
        <span id="prevTop" class="btn prev"></span>
        <span id="nextTop" class="btn next"></span>
        <div id="picBox" class="picBox">
            <ul class="cf">
                @foreach( $articles as $article)
                    <li>
                        <img src="{{  $article->thumbnail }}" alt="">
                        <p>{{  $article->title }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
        <div id="listBox" class="listBox">
            <ul class="cf">
                @for( $i=0;$i<count($articles);$i++ )
                    <li  @if( $i == 0 ) class="on" @endif ><img src="{{  $articles[$i]->thumbnail }}" alt=""></li>
                @endfor
            </ul>
        </div>
    </div>  
    <script type="text/javascript" src="js/photo.js"></script>
    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>
<!-- contact_out -->
@endsection