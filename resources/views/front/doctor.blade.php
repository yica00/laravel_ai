@extends('front.base')
@section('content')
<div class="in_tit_all">
  <p>Ancestral doctor</p>
  <h2><span>祖</span><span>传</span><span>医</span><span>师</span></h2>
</div>
<!-- aboutout -->
<div class="doctorin com_style">
  <div class="w1160 clearfix">
    <img src="{{$article->thumbnail}}" class="pic">
    <div class="dis">
      <h2>徐如祥<span>坐诊医师</span></h2>
      <p class="time">出诊时间：{{$article->link}}</p>
      <ul class="honor">
        @foreach( explode(',',$article->introduce) as $iterm  )
        <li>{{$iterm}}</li>
         @endforeach
      </ul>

    </div>
    @foreach( $articles as $ati )
    <dl class="ddli bg_e8f2ff">
      <dt>{{$ati->title}}</dt>
      <dd>
        {!! $ati->comtent !!}
      </dd>
    </dl>
    @endforeach
     <span class="bk40">&nbsp;</span>
 </div>

</div>
<!-- footer -->
@endsection