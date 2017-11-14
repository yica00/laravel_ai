@extends('front.base')
@section('content')
<!-- bread -->
<span class="bk30">&nbsp;</span>
<div class="bread">
  <div class="w1280 clearfix">
    <div class="in_tit_all">
      <div class="bt"><span>Ace <b>course</b></span>/ 王牌课程</div>
    </div>
    <ul class="sublist clearfix sub_8">
      @foreach( session('header_nav') as $cate )
        @if( $cate->id == 2)
          @foreach( $cate->articles as $art )
            <li class="
           @if( $art->link )
            @if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link )
                    on
@endif
            @else
            @if( $art->id == $id ) on @endif
            @endif
                    ">
              <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/item/{{$art->id}}@endif" >{{$art->title}}</a>
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
  <div class="item_ban clearfix">
    @foreach( $article->comtent[0] as $img )
    <div class="pic fl"><img src="{{$img}}"></div>
    @endforeach
  </div>
  <span class="bk60">&nbsp;</span>
  <h2 class="item_kc_bt">~~课程新班火热报名中~~</h2>
  <div class="item_inlist">
    <div class="top clearfix">
      <div class="w360 fl">&nbsp;</div>
      <div class="w500 fl">课程介绍</div>
      <div class="text_c w120 fl">学期</div>
      <div class="text_c w120 fl">学费</div>
      <div class="text_c w120 fl">开学日期</div>
    </div>
    <ul class="list clearfix">
      @foreach( $article->articles as $team )
      <li>
        <a href="/item/detail/{{$team->id}}" class="clearfix">
          <div class="w360 fl">
            <div class="img"><img src="{{$team->thumbnail}}"></div>
          </div>
          <div class="w500 fl">
            <div class=" dis">
              <h2>{{$team->title}}</h2>
              <p>{!! $team->comtent !!}</p>
            </div>
          </div>
          <div class="text_c w120 fl pp">{{  explode(',',$team->introduce)[0] }}</div>
          <div class="text_c w120 fl pp">{{  explode(',',$team->introduce)[1] }}</div>
          <div class="text_c w120 fl pp">{{  explode(',',$team->introduce)[2] }}</div>
        </a>
      </li>
      @endforeach
    </ul>
  </div>
  <span class="bk60">&nbsp;</span>
  <div class="wor_tea_in">
    <h2 class="tit">专业老师</h2>
    <ul class="team_list_o clearfix team_list_in">
      @foreach( $article->teams as $team )
        <li>
          <a href="/team/{{$team->id}}">
            <span class="pic"><img src="{{$team->photo}}" alt="" /></span>
            <div class="txt">
              <h2>{{$team->name}}</h2>
              <p>{{$team->title}}</p>
            </div>
          </a>
        </li>
      @endforeach
    </ul>
  </div>
  <span class="bk60">&nbsp;</span>
  <div class="wor_tea_in">
    <h2 class="tit">相关作品</h2>
    <ul class="work_list_in clearfix">
      @foreach( $article->rcases as $case )
      <li>
        <a href="/case/{{$case->id}}"><div class="pic"><img src="{{$case->thumbnail}}" alt=""><div class="txt">{{$case->title}}</div></div></a>
      </li>
      @endforeach
    </ul>
  </div>
  <!-- end -->
  </div>
  <span class="bk80">&nbsp;</span>
</div>
<!-- item -->
@endsection