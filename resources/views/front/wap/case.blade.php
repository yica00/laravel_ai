@extends('front.wap.base')
@section('head')
  <div class="header">
    <a href="/wap/case" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">案例</a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
  </div>
@endsection
@section('content')
<!-- start -->
<ul class="case_in_list clearfix">
  @foreach( $articles as $article )
  <li>
    <a href="/wap/case/{{$article->id}}">
      <div class="pic">
        <img src="{{$article->thumbnail}}" alt="">
      </div>
      <span class="bk10">&nbsp;</span>
      <div class="list clearfix">
        <div class="col-xs-6">
          <div class="img"><img src="{{$article->cases[0][0]}}" alt=""></div>
          <div class="txt">before</div>
        </div>
        <div class="col-xs-6">
          <div class="img"><img src="{{$article->cases[0][1]}}" alt=""></div>
          <div class="txt">after</div>
        </div>
      </div>
      <div class="bot">
        <div class="dis">
          @foreach( explode(',',$article->introduce) as $k=>$intro )
            @if( $k <2 )
              <p class="p{{ $k+1 }}">{{$intro}}</p>
            @endif
          @endforeach
        </div>
      </div>
    </a>
  </li>
@endforeach
</ul>
<!-- end -->
<!-- 3 -->
@endsection