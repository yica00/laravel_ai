@extends('front.base')
@section('content')
<div class="in_tit_all">
  <p>Characteristic treatment</p>
  <h2><span>特</span><span>色</span><span>治</span><span>疗</span></h2>
</div>
<!-- aboutout -->
<div class="treatin com_style">
  <div class="w1160 clearfix">
    <div class="txt">
      <h2 class="about_tit">疗法简介</h2>
      {!! $article->comtent !!}
    </div>
  </div>
  <div class="bg_e8f2ff">
    <div class="w1160 clearfix">
      <span class="bk50">&nbsp;</span>
      <h2 class="about_tit">特色项目</h2>
      <div class="item clearfix">
        @foreach( $articles as $k=>$arti )
        <dl class="clearfix">
          @if( $k%2 == 1 )
            <dt class="boost_img fr"><img src="{{$arti->thumbnail}}"></dt>
          @endif
          <dd class="fr">
            <h2>{{ $arti->title }}</h2>
            {!! $arti->comtent !!}
          </dd>
            @if( $k%2 == 0 )
              <dt class="boost_img fr"><img src="{{$arti->thumbnail}}"></dt>
            @endif
        </dl>
        @endforeach
      </div>
      <span class="60">&nbsp;</span>
    </div>
  </div>
</div>
<!-- footer -->
@endsection