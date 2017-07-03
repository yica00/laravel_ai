@extends('front.base')
@section('content')
<!-- banner -->
<div id="slideBox" class="slideBox">
  <div class="hd">&nbsp;</div>
  <div class="bd">
    <ul>
      @foreach( $slides as $slide )
        <li><a href="{{ $slide->link }}" style="background:url({{ $slide->thumbnail }}) center no-repeat;">&nbsp;</a></li>
      @endforeach
    </ul>
  </div>
  <a class="prev" href="javascript:void(0)"></a>
  <a class="next" href="javascript:void(0)"></a>
</div>
<script type="text/javascript">jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});</script>
<!-- driverout -->
<div class="driverout">
  <div class="w1160 clearfix">
    <h2 class="tit"><a href="/driver">司机招募令</a></h2>
    <div class="clearfix">
      <div class="drv_top fr">
        <h3><a href="/driver">招募要求</a></h3>
        <!-- 此处后台可编辑 -->
        <div class="txt">{!! $driver->comtent !!}</div>
      </div>
    </div>
    <ul class="drv_bot clearfix">
      <li>
        <img src="images/drv_1.png" alt="">
        <h4>准备证件</h4>
        <p>您需要携带驾驶证、监督卡和身份证</p>
      </li>
      <li>
        <img src="images/drv_2.png" alt="">
        <h4>资质审核</h4>
        <p>到达兴润，会有我们的工作人员审核您的资料</p>
      </li>
      <li>
        <img src="images/drv_3.png" alt="">
        <h4>招募成功</h4>
        <p>审核通过，成为我们的一员！</p>
      </li>
    </ul>
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!-- trainout -->
<div class="trainout clearfix">
  <a href="service_training" class="fr"><img src="images/train_2.jpg"></a>
  <a href="training" class="fl"><img src="images/train_1.jpg"></a>
</div>
<!-- modelsout -->
<div class="w1160 clearfix">
  <div class="modelsout">
    <h2 class="tit"><a href="/cars">合作车型</a></h2>
    <div class="slideTxtBox">
      <div class="hd">
        <ul><li class="li_1">企事业团体用车</li><li class="li_2">合作车型</li></ul>
      </div>
      <div class="bd">
        <div class="mod_1">
          <div class="txt">{!! $model->comtent !!}</div>
          <p class="btn"><a href="/models">查看更多</a></p>
        </div>
        <div class="clearfix">
          <ul class="mod_list clearfix">
            @foreach( $cars as $car )
            <li>
              <a href="/cars">
                <img src="{{ $car->photo }}" alt="">
                <div class="txt clearfix">
                  <span class="price fr"><em>{{ $car->price }}元</em>起</span>
                  <dl class="name fl">
                    <dt>{{ $car->name }}</dt>
                    <dd><span>{{ $car->displacement }}</span> |  <span>{{ $car->amount }}座</span>  |  <span>{{ $car->category }}</span></dd>
                  </dl>
                </div>
                </a>
              </li>
             @endforeach
          </ul>
          <span class="bk20">&nbsp;</span>
           <p class="btn"><a href="/cars">更多合作车型</a></p>
        </div>
      </div>
    </div>
    <script type="text/javascript">jQuery(".slideTxtBox").slide();</script>
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!-- didiout -->
<div class="didiout">
  <div class="w1160 clearfix">
    <div class="txt fr">
      <h2>我们是滴滴出行<br/>南充市授权公司</h2>
      <span class="bk40">&nbsp;</span>
      <p class="btn"><a href="/didi">查看更多</a></p>
    </div>
    <img src="{!! $didi->thumbnail !!}" class="pic fl">
  </div>
</div>
<!-- teacherout -->
<div class="teacherout">
  <div class="w1160 clearfix">
    <h2 class="tit"><a href="/teacher">专业培训师</a></h2>
    <span class="bk40">&nbsp;</span>
    <div class="picScroll-left">
      <div class="hd">&nbsp;</div>
      <div class="bd">
        <ul class="picList">
          @foreach( $teachers as $teacher )
          <li>
            <a href="/teacher/{{ $teacher->id }}">
              <span class="pic"><img src="{{ $teacher->photo }}"></span>
              <h3>{{ $teacher->name }}</h3>
              <p>{{ $teacher->title }}</p>
              <p>从业年限：<span>{{ $teacher->work_age }}</span>年</p>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>

    <script type="text/javascript">
    jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click"});
    </script>
  </div>
</div>

@endsection