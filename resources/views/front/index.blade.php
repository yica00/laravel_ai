@extends('front.base')
@section('content')
<!-- banner -->
<div id="slideBox" class="slideBox">
  <div class="hd">&nbsp;</div>
  <div class="bd">
    <ul>
      @foreach( $slides as $slide )
        <li><a href="{{ $slide->link }}" style="background:url({{ $slide->thumbnail }}) center no-repeat;">&nbsp;</a></li>
      @endforeach
    </ul>
  </div>
  <a class="prev" href="javascript:void(0)"></a>
  <a class="next" href="javascript:void(0)"></a>
</div>
<script type="text/javascript">
    jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});
</script>
<!-- productout -->
<div class="productout">
  <span class="bk50">&nbsp;</span>
  <div class="w1160 clearfix">
    <h2 class="ho_tit_all"><a href="/product"><img src="images/ho_tit_1.png"></a></h2>
    <span class="bk30">&nbsp;</span>
    <div class="top clearfix">
      <div class="w510 fr">
        <a href="{{ $recommends[0]->link }}" class="cp_all cp_1">
          <img src="{{ $recommends[0]->thumbnail }}">
          <span>{{ $recommends[0]->title }}</span>
        </a>
        <span class="bk10">&nbsp;</span>
        <div class="clearfix">
          <a href="{{ $recommends[1]->link }}" class="cp_all cp_2 fr">
            <img src="{{ $recommends[1]->thumbnail }}">
            <span>{{ $recommends[1]->title }}</span>
          </a>
          <a href="{{ $recommends[2]->link }}" class="cp_all cp_2 fl">
          <img src="{{ $recommends[2]->thumbnail }}">
          <span>{{ $recommends[2]->title }}</span>
        </a>
        </div>
      </div>
      <!-- banner -->
      <div id="slideBoxcp" class="slideBoxcp fl">
        <div class="hd">&nbsp;</div>
        <div class="bd">
          <ul>
          @foreach( $recommends as $recommend)
            <li>
              <a href="{{ $recommend->link }}" class="cp_all cp_3">
                <img src="{{ $recommend->thumbnail }}">
                <span>{{ $recommend->title }}</span>
              </a>
            </li>
          @endforeach
          </ul>
        </div>
        <a class="prev" href="javascript:void(0)"></a>
        <a class="next" href="javascript:void(0)"></a>
      </div>
      <script type="text/javascript">jQuery(".slideBoxcp").slide({mainCell:".bd ul",autoPlay:true});</script>
    </div>
    <span class="bk10">&nbsp;</span>
    <ul class="list clearfix">
      @foreach( $products as $product)
        <li><a href="/product/category/{{ $product->id }}"><img src="{{ $product->thumbnail }}" alt="" /><span>{{ $product->title }}</span></a></li>
      @endforeach
    </ul>
  </div>
</div>
<!-- caseout -->
<div class="caseout">
  <span class="bk50">&nbsp;</span>
  <div class="w1160 clearfix">
    <h2 class="ho_tit_all"><a href="/case"><img src="images/ho_tit_2.png"></a></h2>
    <span class="bk30">&nbsp;</span>
    <ul class="caselist clearfix">
      @foreach( $cases as $case )
      <li>
        <a href="/case">
          <img src="{{ $case->thumbnail }}" alt="" />
          <span class="box">&nbsp;</span>
          <div class="txt">
            <h2>{{ $case->title }}</h2>
            <p>{{ $case->link }}</p>
          </div>
        </a>
      </li>
      @endforeach
    </ul>
  </div>
  <span class="bk50">&nbsp;</span>
</div>
<!-- newsout -->
<div class="newsout">
  <span class="bk50">&nbsp;</span>
  <div class="w1160 clearfix">
    <h2 class="ho_tit_all"><a href="/news"><img src="images/ho_tit_3.png"></a></h2>
    <span class="bk30">&nbsp;</span>
    <div class="picScroll-leftplan">
      <div class="hd">&nbsp;</div>
      <div class="bd">
        <ul class="picList">
           @foreach( $newss as $news)
           <li>
            <a href="/news/{{$news->id}}">
              <span class="pic"><img src="{{ $news->thumbnail }}" alt="" /></span>
              <div class="txt">
                <h2>{{ $news->title }}</h2>
                <span>了解更多</span>
              </div>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    <script type="text/javascript">
    jQuery(".picScroll-leftplan").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click"});
    </script>
  </div>
  <span class="bk100">&nbsp;</span>
</div>
<!-- siteout -->
<div class="siteout">
  <span class="bk50">&nbsp;</span>
  <div class="w1160 clearfix">
    <h2 class="ho_tit_all"><a href="/scence"><img src="images/ho_tit_4.png"></a></h2>
    <span class="bk30">&nbsp;</span>
    <div class="picScroll-leftsite">
      <div class="hd">&nbsp;</div>
      <div class="bd">
        <ul class="picList">
          @foreach( $scences as $scence)
              <li>
                <a href="/scence">
                  <span class="pic"><img src="{{ $scence->thumbnail }}" alt="" /></span>
                  <div class="top">
                    <h2>{{ $scence->title }}</h2>
                    <h3>{{ $scence->link }}</h3>
                    {{--<p class="bot">安装：<em>1户</em></p>--}}
                  </div>
                </a>
              </li>
            @endforeach
        </ul>
      </div>
    </div>
    <script type="text/javascript">
        jQuery(".picScroll-leftsite").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:4,trigger:"click"});
    </script>
  </div>
  <span class="bk60">&nbsp;</span>
</div>
@endsection