@extends('front.wap.base')
@section('head')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">联系</a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
  </div>

@endsection
@section('content')
<!-- start -->

<div class="compus_top">
  <p>美丽热线 <span>{{ session('setting')['fix_phone']  }}</span></p>
  <span class="bk20">&nbsp;</span>
  <p>医院地址 <span>{{ session('setting')['bases']  }}</span></p>
  <span class="bk20">&nbsp;</span>
  <p>QQ在线咨询 <span>{{ session('setting')['qq']  }}</span></p>
  <span class="bk20">&nbsp;</span>
  <a href="http://map.baidu.com/?latlng=30.796185,106.097182&title=伊美医疗美容机构&content=电话：{{ session('setting')['fix_phone']  }}&autoOpen=true&l" target="_blank">查看在线地图</a>
</div>
<span class="bk20">&nbsp;</span>
<!-- end -->
<!-- 3 -->
@endsection