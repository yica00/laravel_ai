@extends('front.base')
@section('content')
<div class="in_tit_all">
  <p>Maintenance instructions</p>
  <h2><span>保</span><span>养</span><span>须</span><span>知</span></h2>
</div>
<!-- aboutout -->
<div class="com_style">
  <div class="w1160 clearfix">
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
                <p>
                  {{$slender->introduce}}
                </p>
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
              <p class="txt_elip">{{$article->introduce}}</p>
            </div>
            <div class="dl_l fl">
              <span class="date">{{  mb_substr($article->created_at,0,4) }}</span>
              <span class="month">{{  mb_substr($article->created_at,5,5) }}</span>
            </div>
          </a>
      </li>
      @endforeach
    </ul>
    <div class="pageJump clearfix">
      <div class="number">
        @if( $pages['pre_page']  )
          <span class="disabled"><a href="/news">首页</a></span>
          <span class="disabled"><a href="/news?page={{ $pages['pre_page'] }}">上一页</a></span>
        @endif
        @if( $pages['next_page'] )
          <span class="disabled"><a href="/news?page={{ $pages['next_page'] }}">下一页</a></span>
          <span class="disabled"><a href="/news?page={{ $pages['total_page'] }}">尾页</a></span>
        @endif
      </div>
    </div>
    <span class="bk60">&nbsp;</span>
  </div>
  </div>
</div>
<!-- footer -->
@endsection