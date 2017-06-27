@extends('front.base')
@section('content')
<!--main -->
<div class="wap_big_box">
  <!-- bread -->
  <!--<div class="bread">
      <p class="page_nav">
        <a href="about.html">神鹰简介</a><a href="team.html" class="on">教练团队</a><a href="honor.html">荣誉资质</a>
      </p>
   </div>   -->
  <div class="w1160 clearfix"> 
    <span class="bk10">&nbsp;</span>
    <div class="wap_box">
    <!-- start -->
    <div class="plan_model">
        <div class="top">
{{--          <h2>{{  $plans[0]->title }}</h2>--}}
          <h2>{{  $plan_fa->title }}</h2>
         {{--<h2>全天地面拓展活动行程</h2>--}}
        </div>
        <span class="bk20">&nbsp;</span>
        <div class="slideTxtBoxplan">
          <div class="hd">
            <ul><li>费用清单</li><li>行程安排</li><li>项目介绍</li><li>联系方式</li></ul>
          </div>
          <div class="bd">
            <div>
              {!! $plans[0]->comtent !!}
            </div>
            <div>
              {!! $plans[1]->comtent !!}
            </div>
            <div>
              <ul class="list clearfix">
                <li class="clearfix">
                  <div class="txt fr">
                    <h2 class="tit">{{ $plans[2]->title }}</h2>
                    {!! $plans[2]->comtent !!}
                  </div>
                  <img src="{{ $plans[2]->thumbnail }}" alt="" class="pic fl" />
                </li>
                <li class="clearfix">
                  <div class="txt fr">
                    <h2 class="tit">{{ $plans[3]->title }}</h2>
                    {!! $plans[3]->comtent !!}
                  </div>
                  <img src="{{ $plans[3]->thumbnail }}" alt="" class="pic fl" />
                </li>
              </ul>
            </div>
            <div>
              <dl>
                <dt>南充神鹰户外军事拓展连锁</dt>
                <dd>官方网站：<a href="" target="_blank">www.cs0817.com</a></dd>
                <dd>活动咨询QQ： 360090407   微信公众号：南充神鹰户外</dd>
                <dd>野战咨询电话∶152 2816 9898  （来前请电话联系） </dd>
              </dl>
              <dl>
                <dt>西山基地</dt>
                <dd>地址：西山风景区栖乐垭村（西山草莓园旁）</dd>
                <dd>联系人：许教练（152-2812-1788）</dd>
                <dd><b>西山开车路线</b></dd>
                <dd>从西山风景区正大门，左侧上山路进入隧道，出隧道后沿主路行驶100米下坡处右拐，（有广告牌），再行驶300米即到 </dd>
                <dd><b>西山公交路线</b></dd>
                <dd>乘坐公交2路、22路、25路、26路、6路等到西山风景区，然后步行2KM到栖乐垭村西山草莓园旁即到</dd>
              </dl>
              <dl>
                <dt>搬罾青山湖基地</dt>
                <dd>地址：南充顺庆区搬罾镇青山湖景区>
                <dd>联系人：胡教练（152-2816-9898）</dd>
                <dd><b>搬罾开车路线</b></dd>
                <dd>沿府荆南路(恒大绿洲方向)直行，进入柳树垭隧道，出隧道后右拐(有指示牌)，500米左右就到果乐园</dd>
                <dd><b>搬罾公交路线</b></dd>
                <dd>顺庆城镇公交，在城北汽车站出发，到搬罾百香草莓下车，步行200米就到果乐园到</dd>
              </dl>
              <dl>
                <dt>搬罾果乐园基地</dt>
                <dd>地址：南充顺庆区搬罾镇果乐园内</dd>
                <dd>联系人：胡教练（188-8233-6709）</dd>
                <dd><b>搬罾开车路线</b></dd>
                <dd>沿府荆南路(恒大绿洲方向)直行，进入柳树垭隧道，出隧道后右拐(有指示牌)，500米左右就到果乐园</dd>
                <dd><b>搬罾公交路线</b></dd>
                <dd>顺庆城镇公交，在城北汽车站出发，到搬罾百香草莓下车，步行200米就到果乐园到</dd>
              </dl>

            </div>
          </div>
        </div>
        <script type="text/javascript">jQuery(".slideTxtBoxplan").slide();</script>
    </div>
    <span class="bk10">&nbsp;</span>
    <!-- end -->
    </div>
  </div>
  
</div>
@endsection