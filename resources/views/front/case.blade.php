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
        <ul class="case_in_list clearfix" >
          @foreach( $articles as $article )
          <li>
            <a href="/case/{{$article->id}}" class="clearfix">
              <div class="txt fr">
                  <div class="top clearfix">
                    <div class="m_all m_l fr">
                      <img src="{{ $article->cases[0][1] }}">
                      <span>after</span>
                    </div>
                    <div  class="m_all m_l fl">
                      <img src="{{ $article->cases[0][0] }}">
                      <span>before</span>
                    </div>
                  </div>
                  <div class="dis">
                    @foreach( explode(',',$article->introduce) as $k=>$intro )
                      @if( $k <2 )
                      <p class="p{{ $k+1 }}">{{$intro}}</p>
                      @endif
                    @endforeach
                      <p class="p3"><span>了解详情</span></p>
                  </div>
              </div>
              <div class="pic fl"><img src="{{ $article->thumbnail }}"></div>
            </a>
          </li>
          @endforeach
        </ul>
        <div class="pageJump clearfix">
          <div class="number">
            @if( $pages['pre_page']  )
              <span class="disabled"><a href="/case">首页</a></span>
              <span class="disabled"><a href="/case?page={{ $pages['pre_page'] }}">上一页</a></span>
            @endif
            @if( $pages['next_page'] )
              <span class="disabled"><a href="/case?page={{ $pages['next_page'] }}">下一页</a></span>
              <span class="disabled"><a href="/case?page={{ $pages['total_page'] }}">尾页</a></span>
            @endif
          </div>
        </div>
      </div>
      <!-- end -->
      <span class="bk80">&nbsp;</span>
      <span class="bk100">&nbsp;</span>
  </div>
</div>
@endsection