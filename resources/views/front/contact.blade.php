@extends('front.base')
@section('content')
<!-- start -->
<div class="wap_box">

<div class="mapbox">
  <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
  <div style="width:100%;height:400px;" id="dituContent"></div>
</div>
<div class="w1160 clearfix">
<span class="bk20">&nbsp;</span>

    <div class="contact_way">
      <dl>
        <dt>400电话</dt>
        <dd>{{ session('setting')['phone_400']  }}</dd>
      </dl>
      <dl>
        <dt>座机</dt>
        <dd>{{ session('setting')['fix_phone']  }}</dd>
      </dl>
      <dl>
        <dt>邮箱</dt>
        <dd>{{ session('setting')['email']  }}</dd>
      </dl>
      <dl>
        <dt>Q Q</dt>
        <dd>{{ session('setting')['qq']  }}</dd>
      </dl>
      <dl>
        <dt>地址</dt>
        <dd>{{ session('setting')['bases']  }}</dd>
      </dl>
    </div>
</div>
</div>
<!-- end -->
@endsection