@extends('front.base')
@section('content')
<!--main -->
<div class="wap_big_box">
  <!-- bread -->
  <div class="bread">
      <p class="page_nav">
        <a href="/about_us">神鹰简介</a><a href="/team" class="on">教练团队</a><a href="/honor">荣誉资质</a>
      </p>
  </div>  
  <div class="w1160 clearfix"> 
    <div class="wap_box">
    <!-- start -->
    <span class="bk10">&nbsp;</span>
    <div class="txt_model team_dis clearfix">
      <div class="pic fl">
        <img src="{{  $team->photo }}">
      </div>
      <div class="txt fr">
        <h2 class="clearfix"><span class="fr">{{  $team->belong_to }}</span>{{  $team->name }}</h2>
        <dl>
          <dt>个人简历</dt>
          <dd>{{  $team->introduce }}</dd>
        </dl>
        <dl>
          <dt>培训项目</dt>
          <dd>
            @foreach( $team->iterm as $itm )
              <span>{{ $itm  }}</span>
            @endforeach
          </dd>
        </dl>
        <dl>
          <dt>联系方式</dt>
          <dd style="font-size: 28px;">{{  $team->phone }}</dd>
        </dl>
      </div>
    </div>
    <span class="bk10">&nbsp;</span>
    <!-- end -->
    </div> 
  </div>
  
</div>
@endsection