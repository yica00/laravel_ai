@extends('front.base')
@section('content')
<!-- banner -->
<div id="slideBox" class="slideBox">
  <div class="hd">&nbsp;</div>
  <div class="bd">
    <ul>
      <li><a href="" style="background:url(images/bn_1.jpg) center no-repeat;">&nbsp;</a></li>
      <li><a href="" style="background:url(images/bn_2.jpg) center no-repeat;">&nbsp;></a></li>
      <li><a href="" style="background:url(images/bn_3.jpg) center no-repeat;">&nbsp;</a></li>
    </ul>
  </div>
  <a class="prev" href="javascript:void(0)"></a>
  <a class="next" href="javascript:void(0)"></a>
</div>
<script type="text/javascript">jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});</script>
<!-- driverout -->
<div class="driverout">
  <div class="w1160 clearfix">
    <h2 class="tit"><a href="driver.html">司机招募令</a></h2>
    <div class="clearfix">
      <div class="drv_top fr">
        <h3><a href="driver.html">招募要求</a></h3>
        <!-- 此处后台可编辑 -->
        <div class="txt">有1年及2年以上驾驶经验。驾驶技术娴熟；<br/> 无不良驾驶记录，无重大事故及交通违章，具有较强的安全意识；<br/>懂商务接待礼仪，具有一定的服务意识； <br/>为人踏实、老实忠厚，保密意识强、责任心强。</div>
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
  <a href="training.html" class="fr"><img src="images/train_2.jpg"></a>
  <a href="training.html" class="fl"><img src="images/train_1.jpg"></a>
</div>
<!-- modelsout -->
<div class="w1160 clearfix">
  <div class="modelsout">
    <h2 class="tit"><a href="models.html">合作车型</a></h2>
    <div class="slideTxtBox">
      <div class="hd">
        <ul><li class="li_1">企事业团体用车</li><li class="li_2">合作车型</li></ul>
      </div>
      <div class="bd">
        <div class="mod_1">
          <div class="txt">企事业团体用车须知企事业团体用车须知企事业团体用车须知企事业团体用车须知企事业团体用车须知企事业团体用车须知企事业团体用车须知企事业团体用车须知企事业团体用车须知企事业团体用车须知企事业团体用车须知企事业团体用车须知企事业团体用车须知</div>
          <p class="btn"><a href="models.html">查看更多</a></p>   
        </div>
        <div class="clearfix">
          <ul class="mod_list clearfix">
            <li>
              <a href="car.html">
                <img src="images/car1.jpg" alt="">
                <div class="txt clearfix">
                  <span class="price fr"><em>138元</em>起</span>
                  <dl class="name fl">
                    <dt>起亚K3</dt>
                    <dd><span>2.0T自动</span> |  <span>5座</span>  |  <span>经济型</span></dd>
                  </dl>
                </div>
                </a>
              </li>
              <li>
              <a href="car.html">
                <img src="images/car2.jpg" alt="">
                <div class="txt clearfix">
                  <span class="price fr"><em>138元</em>起</span>
                  <dl class="name fl">
                    <dt>起亚K3</dt>
                    <dd><span>2.0T自动</span> |  <span>5座</span>  |  <span>经济型</span></dd>
                  </dl>
                </div>
                </a>
              </li>
              <li>
              <a href="car.html">
                <img src="images/car3.jpg" alt="">
                <div class="txt clearfix">
                  <span class="price fr"><em>138元</em>起</span>
                  <dl class="name fl">
                    <dt>起亚K3</dt>
                    <dd><span>2.0T自动</span> |  <span>5座</span>  |  <span>经济型</span></dd>
                  </dl>
                </div>
                </a>
              </li>
          </ul>
          <span class="bk20">&nbsp;</span>
           <p class="btn"><a href="models.html">更多合作车型</a></p>
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
      <p class="btn"><a href="models.html">查看更多</a></p>  
    </div>
    <img src="images/shouqs.jpg" class="pic fl">
  </div>
</div>
<!-- teacherout -->
<div class="teacherout">
  <div class="w1160 clearfix">
    <h2 class="tit"><a href="teacher.html">专业培训师</a></h2>
    <span class="bk40">&nbsp;</span>
    <div class="picScroll-left">
      <div class="hd">&nbsp;</div>
      <div class="bd">
        <ul class="picList">
          <li>
            <a href="teacher_in.html">
              <span class="pic"><img src="images/tea_1.jpg"></span>
              <h3>王晓宇</h3>
              <p>高级培训师</p>
              <p>从业年限：<span>5</span>年</p>
            </a>
          </li>
          <li>
            <a href="teacher_in.html">
              <span class="pic"><img src="images/tea_2.jpg"></span>
              <h3>王晓宇</h3>
              <p>高级培训师</p>
              <p>从业年限：<span>5</span>年</p>
            </a>
          </li>
          <li>
            <a href="teacher_in.html">
              <span class="pic"><img src="images/tea_3.jpg"></span>
              <h3>王晓宇</h3>
              <p>高级培训师</p>
              <p>从业年限：<span>5</span>年</p>
            </a>
          </li>
          <li>
            <a href="teacher_in.html">
              <span class="pic"><img src="images/tea_2.jpg"></span>
              <h3>王晓宇</h3>
              <p>高级培训师</p>
              <p>从业年限：<span>5</span>年</p>
            </a>
          </li>
          <li>
            <a href="teacher_in.html">
              <span class="pic"><img src="images/tea_1.jpg"></span>
              <h3>王晓宇</h3>
              <p>高级培训师</p>
              <p>从业年限：<span>5</span>年</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <script type="text/javascript">
    jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click"});
    </script>
  </div>
</div>

@endsection