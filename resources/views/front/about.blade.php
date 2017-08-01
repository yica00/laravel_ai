 @extends('front.base')
 @section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">  
      <div class="top">
        <h2>--关于我们--</h2>
        <p><span>about us</span></p>
      </div>
      <ul class="sublist clearfix">
          @foreach( session('header_nav') as $navs )
              @if($navs->link == "/about")
                  @foreach( $navs->articles as $arti )
                      <li><a @if( $arti->id == $id ) class="on" @endif href="@if( $arti->link ){{$arti->link}}@else{{$navs->link}}/category/{{$arti->id}}@endif">{{$arti->title}}</a></li>
                  @endforeach
              @endif
          @endforeach
      </ul>
    </div>
</div>
<span class="bk50">&nbsp;</span>
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <p style="color:red;font-size:24px;">
    {!! $about->comtent !!}
    </p>
    <!-- end -->
  </div>  
</div>
<span class="bk80">&nbsp;</span>
<!-- index_list -->
@endsection