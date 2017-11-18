@extends('front.wap.base')
@section('content')
<!-- start -->
<div class="xm_banner">
  <img src="{{$article->comtent[0]}}">
</div>
<span class="bk20">&nbsp;</span>
<div class="item_mode">
  @foreach( $article->articles as $arti )
  <div class="dis">
    <h2>{{$arti->title}}</h2>
    <div class="txt">
      {{$arti->introduce}}
    </div>
  </div>
  <span class="bk20">&nbsp;</span>
  @endforeach


  <div class="dis">
    <h2>成功案例</h2>
    <span class="bk20">&nbsp;</span>
    @foreach( $article->cases->articles as $arti )
    <div class="list clearfix">
      <div class="col-xs-6">
        <div class="img"><img src="{{$arti[0]}}" alt=""></div>
        <div class="txt">before</div>
      </div>
      <div class="col-xs-6">
        <div class="img"><img src="{{$arti[1]}}" alt=""></div>
        <div class="txt">after</div>
      </div>
    </div>
    <span class="bk20">&nbsp;</span>
    @endforeach
  </div>
  <span class="bk20">&nbsp;</span>
  <div class="clearfix">
    <div class="it_bt">项目医生</div>
    <div class="swiper-container-2">
      <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="team_in.html" class="team_o_box">
              <img src="images/team_1.png">
              <div class="txt">
                <h2>南充医疗美容医院院长</h2>
                <div class="dis">
                  <p>中国医疗美容整形协会会员</p>
                  <p>国家认证整形外科副主任</p>
                  <p>香港依美医疗美容集团总裁</p>
                  <p>“恒久美美雕”医疗美容系列项目创始人</p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="team_in.html" class="team_o_box">
              <img src="images/team_1.png">
              <div class="txt">
                <h2>南充医疗美容医院院长2</h2>
                <div class="dis">
                  <p>中国医疗美容整形协会会员</p>
                  <p>国家认证整形外科副主任</p>
                  <p>香港依美医疗美容集团总裁</p>
                  <p>“恒久美美雕”医疗美容系列项目创始人</p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="team_in.html" class="team_o_box">
              <img src="images/team_1.png">
              <div class="txt">
                <h2>南充医疗美容医院院长3</h2>
                <div class="dis">
                  <p>中国医疗美容整形协会会员</p>
                  <p>国家认证整形外科副主任</p>
                  <p>香港依美医疗美容集团总裁</p>
                  <p>“恒久美美雕”医疗美容系列项目创始人</p>
                </div>
              </div>
            </a>
          </div>

          
      </div>
    </div>
  </div>
</div>
<!-- end -->
<!-- 3 -->
<span class="bk40">&nbsp;</span>
@endsection