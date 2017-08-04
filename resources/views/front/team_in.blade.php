@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">  
      <div class="top">
        <h2>--设计团队--</h2>
        <p><span>design team</span></p>
      </div>
    </div>
</div>
<span class="bk50">&nbsp;</span>
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div class="txt_model team_dis clearfix">
      <div class="pic fl">
        <img src="{{$team->photo}}">
      </div>
      <div class="txt fr">
        <h2 class="clearfix"><span class="fr">{{$team->title}}</span>{{$team->name}}</h2>
        <dl class="clearfix">
          <dt>从业年限</dt>
          <dd>{{$team->work_age}}年</dd>
        </dl>
        <dl class="clearfix">
          <dt>教育背景</dt>
          <dd>{{$team->education}}</dd>
        </dl>
        <dl class="clearfix">
          <dt>擅长风格</dt>
          <dd>{{$team->good_at}}</dd>
        </dl>
        <dl class="clearfix">
          <dt>设计理念</dt>
          <dd>{{$team->design_concept}}</dd>
        </dl>
        <dl class="big clearfix">
          <dt>主要作品</dt>
          <dd>
              {{$team->introduce}}
          </dd>
        </dl>
      </div>
    </div>
    <span class="bk30">&nbsp;</span>
    <div class="teamcase">
     <h2 class="title">主要作品</h2>
     <span class="bk30">&nbsp;</span>
     <ul class="caselist clearfix">
         @foreach( $articles as $article )
      <li>
        <a  href="/case/{{$article->id}}">
          <img src="{{$article->thumbnail}}" alt="">
          <span class="box">&nbsp;</span>
          <div class="txt">{{$article->title}}</div>
        </a>
      </li>
        @endforeach
    </ul>
    <span class="bk40">&nbsp;</span>
      <div class="backpre clearfix">      
              {{--<a href="team_in.html" rel="next">上一篇</a>--}}
              {{--<a href="team_in.html" rel="prev">下一篇</a>--}}
              {{--<a href="team.html">返回上级目录</a>--}}
          </div>
    </div>
    <!-- end -->
  </div>  
</div>
<span class="bk80">&nbsp;</span>
<!-- index_list -->
@endsection