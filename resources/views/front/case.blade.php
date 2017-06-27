@extends('front.base')
@section('content')
<!--main -->
<div class="wap_big_box">
  <!-- bread -->
  <!--<div class="bread">
      <p class="page_nav">
        <a href="about.html">神鹰简介</a><a href="team.html" class="on">教练团队</a><a href="honor.html">荣誉资质</a>
      </p>
   </div>   -->
  <div class="w1160 clearfix"> 
    <span class="bk10">&nbsp;</span>
    <div class="wap_box">
    <!-- start -->
   <div class="caseout">
      <div class="box">
        <div id="slideBoxcase" class="slideBoxcase">
          <div class="hd">&nbsp;</div>
          <div class="bd">
            <ul>
              @foreach( $articles as $article )
                <li>
                  <img src="{{ $article->thumbnail }}" />
                  <div class="txt">
                    {!! $article->comtent !!}
                  </div>
                </li>
              @endforeach


            </ul>
          </div>
          <!-- 下面是前/后按钮代码，如果不需要删除即可 -->
          <a class="prev" href="javascript:void(0)"></a>
          <a class="next" href="javascript:void(0)"></a>
        </div>
        <script type="text/javascript">
        jQuery(".slideBoxcase").slide({mainCell:".bd ul",autoPlay:true});
        </script>
      </div>
    </div>
    <span class="bk10">&nbsp;</span>
    <!-- end -->
    </div>
  </div>
  
</div>
@endsection