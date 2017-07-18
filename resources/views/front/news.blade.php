@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;新闻中心&nbsp;&nbsp;--</h2>
        <p>news center</p>
      </div>
      <p class="page_nav clearfix">
          @foreach( session('header_nav')[2]->sons as $leader1 )
              <a href="{{ $leader1->link  }}" @if( $leader1->link == $sty  ) class="on" @endif>{{  mb_substr($leader1->title,2,20,'utf8' ) }}</a>
          @endforeach
      </p>
  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div id="slideBoxinn" class="slideBoxinn">
      <div class="hd">
          <ul>
              @foreach( $slenders as $slender )
              <li>&nbsp;</li>
              @endforeach
          </ul>
      </div>
      <div class="bd">
        <ul>
            @foreach( $slenders as $slender )
          <li>
            <a href="/news/{{$slender->id}}" class="clearfix">
              <div class="text fr">
                <h2>{{$slender->title}}</h2>
                <p>{{ mb_substr(getChanese($slender->comtent),0,30)."..." }}</p>
              </div>
              <span class="pic fl"><img src="{{$slender->thumbnail}}"></span>
            </a>
          </li>
            @endforeach
        </ul>
      </div>
    </div>
    <script type="text/javascript">jQuery(".slideBoxinn").slide({mainCell:".bd ul",autoPlay:false});</script>
    <span class="bk30">&nbsp;</span>
    <ul class="news_in_list clearfix">
       @foreach( $articles as $article )
      <li>
        <a href="/news/{{$article->id}}" class="clearfix">
            <div class="dl_r fr">
              <h2 class="txt_elip">{{$article->title}}</h2>
              <p class="txt_elip">{{ mb_substr(getChanese($article->comtent),0,50)."..." }}</p>
            </div>
            <div class="dl_l fl">
              <span class="date">{{ mb_substr($article->created_at,0,4)  }}</span>
              <span class="month">{{ mb_substr($article->created_at,5,6)  }}</span>
            </div>
          </a>
      </li>
        @endforeach
    </ul>
    <div class="pageJump clearfix">
      <div class="number">
          @if( $pages['pre_page']  )
              <span class="disabled"><a href="{{$sty}}">首页</a></span>
              <span class="disabled"><a href="{{$sty}}?page={{ $pages['pre_page'] }}">上一页</a></span>
          @endif
          @if( $pages['next_page'] )
              <span class="disabled"><a href="{{$sty}}?page={{ $pages['next_page'] }}">下一页</a></span>
              <span class="disabled"><a href="{{$sty}}?page={{ $pages['total_page'] }}">尾页</a></span>
          @endif
      </div>
    </div>
    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>


<!-- footer -->
@endsection