@extends('front.base')
@section('content')
<div class="in_tit_all">
  <p>successful case</p>
  <h2><span>成</span><span>功</span><span>案</span><span>例</span></h2>
</div>
<!-- aboutout -->
<div class=" com_style">
  <div class="w1160 clearfix">
    <ul class="casein filter_img">
      @foreach( $articles as $article )
      <li >
        <a href="/case/{{$article->id}}" class="clearfix">
          <div class="txt fr">
            <h3>杨氏鼻炎成功案例</h3>
            <h2></h2>
            <p><span>康复者</span>{{$article->title}}</p>
            <p><span>症状</span>{{$article->link}}</p>
            <p><span>治疗方案</span>{{$article->introduce}}</p>
          </div>
          <div class="pic fl"><img src="{{$article->thumbnail}}" class="img_1"><img src="/images/watermark.png" class="img_2"></div>
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
    <span class="bk60">&nbsp;</span>
  </div>
</div>
<!-- footer -->
@endsection