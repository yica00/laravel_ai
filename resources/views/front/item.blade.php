@extends('front.base')
@section('content')
<div class="inbanner" style="background: url({{ $article->s100->thumbnail }}) center top no-repeat;">&nbsp;</div>
<div class="warp_box">
  <div class="warp_bot">
      <!-- start -->
      <!-- 1 -->
      <div class="w1280 clearfix">
        <div class="item_tit_all">
          <span class="bk60">&nbsp;</span>
          <h2>{{ $article->s200->title }}</h2>
          <span class="bk10">&nbsp;</span>
          <p><span>{{ $article->s200->introduce }}</span></p>
          <span class="bk30">&nbsp;</span>
        </div>
        <div class="picScroll-item" id="picScroll-item-1">
          <div class="hd">
            <a class="next"></a>
            <a class="prev"></a>
          </div>
          <div class="bd">
            <ul class="picList item_li_1">
              @foreach( $article->s200->articles as $k=>$arti )
              <li class="wow flipInY" data-wow-duration="1s" data-wow-delay="{{ $k*0.4 }}s" style="visibility: visible; animation-duration: 1s; animation-delay: {{ $k*0.4 }}s; animation-name: flipInY;">
                <div class="pic"><img src="{{$arti->thumbnail}}" alt="" /></div>
                <h2>{{$arti->title}}</h2>
                <p>{{$arti->introduce}}</p>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
        <script type="text/javascript">
        jQuery("#picScroll-item-1").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:6,trigger:"click"});
        </script>
        <span class="bk50">&nbsp;</span>
        <p class="item_btns wow shake animated " data-wow-duration="8s" data-wow-iteration="infinite" style="visibility: visible; animation-duration: 8s; animation-iteration-count: infinite; animation-name: shake;"><a href="/order" target="_blank">预约专家在线定制方案 &gt;&gt;</a></p>
      </div>
      <!-- 2 -->
      <span class="bk60">&nbsp;</span>
      <div class="de_concept clearfix">
        <div class="box clearfix">
          <img src="/images/tea_img.png" class="pic wow bounceInDown" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: bounceInDown;">
          <img src="/images/item_tit_1.png" class="tit wow rotateInDownLeft" data-wow-duration="1.5s" data-wow-delay="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 1.5s; animation-name: rotateInDownLeft;">
          <div class="txt wow bounceInDown" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceInDown;">
            {!! $article->s300->comtent !!}
          </div>
        </div>
      </div>
      <!-- 3 -->
      <div class="w1280 clearfix">
        <div class="item_tit_all">
          <span class="bk60">&nbsp;</span>
          <h2>{{ $article->s400->title }}</h2>
          <span class="bk10">&nbsp;</span>
          <p><span>{{ $article->s400->introduce }}</span></p>
          <span class="bk30">&nbsp;</span>
        </div>
        <div class="picScroll-item" id="picScroll-item-2">
          <div class="hd">
            <a class="next"></a>
            <a class="prev"></a>
          </div>
          <div class="bd">
            <ul class="picList item_li_2">
              @foreach( $article->s400->articles as $k=>$arti )
              <li  class="wow zoomIn" data-wow-duration="1s" data-wow-delay="{{$k*0.4}}s" style="visibility: visible; animation-duration: 1s; animation-delay: {{$k*0.4}}s; animation-name: zoomIn;">
                <div class="box">
                  <img src="{{$arti->thumbnail}}" alt="" class="pic" />
                  <span class="bk10">&nbsp;</span>
                  <div class="txt">
                    <h2>{{$arti->title}}</h2>
                    <div class="line">&nbsp;</div>
                    <p>{{$arti->introduce}}</p>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
        <script type="text/javascript">
        jQuery("#picScroll-item-2").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:4,trigger:"click"});
        </script>
      </div>
      <!-- 4 -->
      <div class="clearfix">
        <div class="item_tit_all">
          <span class="bk60">&nbsp;</span>
          <h2>{{$article->s500->title}}</h2>
          <span class="bk10">&nbsp;</span>
          <p><span>{{$article->s500->introduce}}</span></p>
          <span class="bk30">&nbsp;</span>
        </div>
        <div class="item_li_3 clearfix">
          <div class="w1280 clearfix">
            <div class="clearfix">
              <div class="w340 fr">
                @if( isset( $article->s500->articles[0] ) )
                <div class="txt wow rotateInDownRight" data-wow-duration="1.5s" data-wow-delay="1.0s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 1s; animation-name: rotateInDownRight;">
                  <h2>{{ $article->s500->articles[0]->title }}</h2>
                  <p>{{ $article->s500->articles[0]->introduce }}</p>
                </div>
                @endif
                <span class="bk100">&nbsp;</span>
                  @if( isset( $article->s500->articles[1] ) )
                <div class="txt wow rotateInDownRight" data-wow-duration="1.5s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.6s; animation-name: rotateInDownRight;">
                  <h2>{{ $article->s500->articles[1]->title }}</h2>
                  <p>{{ $article->s500->articles[1]->introduce }}</p>
                </div>
                 @endif
              </div>
              <div class="w340 fl">
                @if( isset( $article->s500->articles[2] ) )
                <div class="txt wow rotateInDownLeft" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: rotateInDownLeft;">
                  <h2>{{ $article->s500->articles[2]->title }}</h2>
                  <p>{{ $article->s500->articles[2]->introduce }}</p>
                </div>
                @endif
                <span class="bk100">&nbsp;</span>
                  @if( isset( $article->s500->articles[3] ) )
                <div class="txt wow rotateInDownLeft" data-wow-duration="1.5s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.6s; animation-name: rotateInDownLeft;">
                  <h2>{{ $article->s500->articles[3]->title }}</h2>
                  <p>{{ $article->s500->articles[3]->introduce }}</p>
                </div>
                    @endif
              </div>
            </div>
            <span class="bk100">&nbsp;</span>
            <span class="bk60">&nbsp;</span>
            <p class="item_btns wow shake animated " data-wow-duration="8s" data-wow-iteration="infinite" style="visibility: visible; animation-duration: 8s; animation-iteration-count: infinite; animation-name: shake;"><a href="/order" target="_blank">{{$article->s500->link}}</a></p>
          </div>
        </div>
      </div>
      <!-- 5 -->
      <div class="w1280 clearfix">
        <div class="item_tit_all">
          <span class="bk60">&nbsp;</span>
          <h2>{{$article->s600->title}}</h2>
          <span class="bk10">&nbsp;</span>
          <p><span>{{$article->s600->introduce}}</span></p>
          <span class="bk30">&nbsp;</span>
        </div>
        <div class="picScroll-item" id="picScroll-item-3">
          <div class="hd">
            <a class="next"></a>
            <a class="prev"></a>
          </div>
          <div class="bd">
            <ul class="picList item_li_4">
              @foreach( $article->s600->articles as $k=>$arti )
              <li  class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.6s; animation-name: slideInLeft;">
                <h2 class="tit">{{$arti->title}}</h2>
                <div class="txt">
                  <div class="pic" ><img src="{{$arti->thumbnail}}" alt=""/></div>
                  <p>{{$arti->introduce}}</p>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
        <script type="text/javascript">
        jQuery("#picScroll-item-3").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click"});
        </script>
        <span class="bk60">&nbsp;</span>
      </div>
      <!-- 6 -->
      <div class="item_team">
        <div class="w1280 clearfix">
          <div class="item_tit_all">
            <span class="bk60">&nbsp;</span>
            <h2>{{$article->s700->title}}</h2>
            <span class="bk10">&nbsp;</span>
            <p>我们的医师专业&敬业</p>
            <span class="bk30">&nbsp;</span>
          </div>
          <div class="picScroll-item" id="picScroll-item-4">
            <div class="hd">
              <a class="next"></a>
              <a class="prev"></a>
            </div>
            <div class="bd">
              <ul class="picList item_li_5">
                <li class="clearfix">
                  <div class="w297 fl mR44  wow bounceInLeft" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: bounceInLeft;">
                    @if( isset( $article->s700->articles[0] ) )
                    <div class="icon">
                      <img src="images/hon_btn_1.png" class="p1">
                      <p class="p2">{{ $article->s700->articles[0]->title }}</p>
                      <p class="p3">
                        @foreach( explode(',', $article->s700->articles[0]->introduce) as $intro )
                          {{$intro}}<br>
                        @endforeach
                      </p>
                    </div>
                    @endif
                    <span class="bk50">&nbsp;</span>
                      @if( isset( $article->s700->articles[2] ) )
                    <div class="icon">
                      <img src="images/hon_btn_2.png" class="p1">
                      <p class="p2">{{ $article->s700->articles[1]->title }}</p>
                      <p class="p3">
                        @foreach( explode(',', $article->s700->articles[1]->introduce) as $intro )
                          {{$intro}}<br>
                        @endforeach
                      </p>
                    </div>
                      @endif
                  </div>
                  <div class="img fl  wow zoomIn" data-wow-duration="1.5s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 1s; animation-name: zoomIn;">
                    <img src="{{$article->s700->thumbnail}}" class="i1">
                    <div class="txt">
                      <h2>{{$article->s700->link}}</h2>
                      <h3><span>{{$article->s700->introduce}}</span></h3>
                      <div class="dis">
                        {!! $article->s700->comtent !!}
                      </div>
                      <p class="btns wow shake animated " data-wow-duration="8s" data-wow-iteration="infinite" style="visibility: visible; animation-duration: 8s; animation-iteration-count: infinite; animation-name: shake;"><a href="/order">预约专家</a></p>
                    </div>
                  </div>
                  <div class="w297 fr wow bounceInRight" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: bounceInRight;">
                    @if( isset( $article->s700->articles[1] ) )
                    <div class="icon">
                      <img src="images/hon_btn_3.png" class="p1">
                      <p class="p2">{{ $article->s700->articles[2]->title }}</p>
                      <p class="p3">
                        @foreach( explode(',', $article->s700->articles[2]->introduce) as $intro )
                          {{$intro}}<br>
                        @endforeach
                      </p>
                    </div>
                    @endif
                    <span class="bk50">&nbsp;</span>
                      @if( isset( $article->s700->articles[3] ) )
                    <div class="icon">
                      <img src="images/hon_btn_4.png" class="p1">
                      <p class="p2">{{ $article->s700->articles[3]->title }}</p>
                      <p class="p3">
                        @foreach( explode(',', $article->s700->articles[3]->introduce) as $intro )
                          {{$intro}}<br>
                        @endforeach
                      </p>
                    </div>
                        @endif
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <script type="text/javascript">
          jQuery("#picScroll-item-4").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1,trigger:"click"});
          </script>
        </div>
      </div>
      <!-- 7 -->
      <div class="w1280 clearfix">
        <div class="item_tit_all">
          <span class="bk60">&nbsp;</span>
          <h2>{{$article->s800->title}}</h2>
          <span class="bk10">&nbsp;</span>
          <p><span>{{$article->s800->introduce}}</span></p>
          <span class="bk30">&nbsp;</span>
        </div>
        <div class="picScroll-case" id="picScroll-case-1">
          <div class="hd">
            <a class="next"></a>
            <a class="prev"></a>
          </div>
          <div class="bd">
            <ul class="picList item_li_6">
              @foreach( $article->s800->cases as $case )
              <li class="clearfix">
                <a href="/item_case/{{$article->s800->articles[0]->id }}" class="clearfix">
                  <div class="img img_2 fr">
                    <span>after</span>
                    <img src="{{$case[1]}}">
                  </div>
                  <div class="img img_1  fl">
                    <span>before</span>
                    <img src="{{$case[0]}}">
                  </div>
                </a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
        <script type="text/javascript">
        jQuery("#picScroll-case-1").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1,trigger:"click"});
        </script>
      </div>
      <!-- 8 -->
      <div class="w1280 clearfix">
        <div class="item_tit_all">
          <span class="bk60">&nbsp;</span>
          <h2>{{$article->s900->title}}</h2>
          <span class="bk10">&nbsp;</span>
          <p><span>{{$article->s900->introduce}}</span></p>
          <span class="bk30">&nbsp;</span>
        </div>
        <div class="picScroll-item" id="picScroll-item-5">
          <div class="hd">
            <a class="next"></a>
            <a class="prev"></a>
          </div>
          <div class="bd">
            <ul class="picList item_li_7">
              @foreach( $article->s900->articles as $case )
              <li class="wow slideInLeft" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: slideInLeft;">
                <a href="/question/{{ $case->id }}">
                  {{ $case->title }}
                </a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
        <script type="text/javascript">
        jQuery("#picScroll-item-5").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:4,trigger:"click"});
        </script>
        <span class="bk50">&nbsp;</span>
        <p class="item_btns wow shake animated " data-wow-duration="8s" data-wow-iteration="infinite" style="visibility: visible; animation-duration: 8s; animation-iteration-count: infinite; animation-name: shake;"><a href="/order" target="_blank">{{$article->s900->link}}</a></p>
      </div>
      <!-- end -->
      <span class="bk80">&nbsp;</span>
      <span class="bk100">&nbsp;</span>
  </div>
</div>
@endsection