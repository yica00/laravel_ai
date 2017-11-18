@extends('front.base')
@section('content')
  <div class="warp_box">
    <div class="warp_bot">
      <div class="brd_tit_all">
        <span class="bk100">&nbsp;</span>
        <h2>案例</h2>
        <p>--- case ---</p>
      </div>
      <!-- start -->
      <!-- 1简介 -->
      <div class="w1280 clearfix">
        <span class="bk80">&nbsp;</span>
        <div class="case_box_all">
          <h2 class="tit">{{$article->title}}</h2>
          <span class="bk20">&nbsp;</span>
          <div class="dis">
            @foreach( explode(',',$article->introduce) as $intro )
            <p>{{$intro}}</p>
            @endforeach
          </div>
          <span class="bk20">&nbsp;</span>
          <h2 class="bt">对比照片</h2>
          <span class="bk20">&nbsp;</span>
          <div class="picScroll-case" id="picScroll-case-1">
            <div class="hd">
              <a class="next"></a>
              <a class="prev"></a>
            </div>
            <div class="bd">
              <ul class="picList item_li_6">
                @foreach( $article->cases as $case )
                <li class="clearfix">
                  <a class="clearfix">
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
          <span class="bk20">&nbsp;</span>
          <h2 class="bt">案例详情</h2>
          <span class="bk20">&nbsp;</span>
          <div class="box">
           {!! $article->comtent !!}
          </div>
        </div>
        <div class="backpre clearfix">
        </div>
      </div>
      <!-- end -->
      <span class="bk80">&nbsp;</span>
      <span class="bk100">&nbsp;</span>
    </div>
  </div>
@endsection