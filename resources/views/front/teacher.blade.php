@extends('front.base')
@section('content')
<!-- start -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- start -->
    <ul class="teacherlist clearfix">
        @foreach( $articles as $article )
          <li>
            <a href="/teacher/{{ $article->id }}">
              <span class="pic"><img src="{{ $article->photo }}"></span>
              <h3>{{ $article->name }}</h3>
              <p>{{ $article->title }}</p>
              <p>从业年限：<span>{{ $article->work_age }}</span>年</p>
            </a>
          </li>
        @endforeach
        </ul>
        <div class="pageJump clearfix">
          <div class="number">
              @if( $pages['pre_page']  )
                  <span class="disabled"><a href="/teacher">首页</a></span>
                  <span class="disabled"><a href="/teacher?page={{ $pages['pre_page'] }}">上一页</a></span>
              @endif
              @if( $pages['next_page'] )
                  <span class="disabled"><a href="/teacher?page={{ $pages['next_page'] }}">下一页</a></span>
                  <span class="disabled"><a href="/teacher?page={{ $pages['total_page'] }}">尾页</a></span>
              @endif
          </div>
      </div>
    <!-- end --> 
  </div>
</div>

<!-- end -->
@endsection