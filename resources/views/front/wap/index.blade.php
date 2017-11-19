@extends('front.wap.base')

@section('head')
<div class="header">
    <a href="/wap" class="col-xs-1"><span class="back disnone">&nbsp;</span></a>
    <a href="/wap" class="col-xs-10"><span  class="logo">&nbsp;</span></a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
</div>
@endsection

@section('content')
<!-- banner -->
<div class="banner_box">
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach( $pics as $team )
            <div class="swiper-slide"><a href=""><img src="{{$team->thumbnail}}"></a></div>
            @endforeach
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>
<!-- 1 -->
<div class="team_out">
    <span class="bk60">&nbsp;</span>
    <div class="ho_tit_all">
        <a href="/wap/team">
            <h2>专/家/团/队</h2>
            <p>国内知名专家助阵<span>依美</span>，专业技术传递<span>恒久美</span></p>
        </a>
    </div>
    <span class="bk40">&nbsp;</span>
    <div class="swiper-container-2">
        <div class="swiper-wrapper">
{{--            @foreach( $teams as $team )--}}
            <div class="swiper-slide">
                <a href="{{$teams->link}}" class="team_o_box">
                    <img src="{{$teams->thumbnail}}">
                    <div class="txt">
                        <h2>{{$teams->title}}</h2>
                        <div class="dis">
                            {!! $teams->comtent !!}
                        </div>
                    </div>
                </a>
            </div>
             {{--@endforeach--}}
        </div>
    </div>
</div>
<!-- 2 -->
<div class="item_out">
    <span class="bk60">&nbsp;</span>
    <div class="ho_tit_all">
        <a href="/wap/item">
            <h2>经/典/项/目</h2>
            <p>恒久美美雕<span>七大经典项目</span>，让你的<span>魅力永恒</span></p>
        </a>
    </div>
    <span class="bk40">&nbsp;</span>
    <div class="swiper-container-3">
        <div class="swiper-wrapper">
            @foreach( session('header_nav2') as $ks=>$navs )
            <div class="swiper-slide">
                <a href="/wap/item/category/{{$navs->id}}">
                    <img src="{{$navs->comtent[0][0]}}">
                </a>
            </div>
            @endforeach
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <span class="bk40">&nbsp;</span>
</div>
<!-- 3 -->
@endsection