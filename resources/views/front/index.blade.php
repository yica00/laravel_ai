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
<!-- sear_box -->
{{--<div class="sear_box">--}}
  {{--<div class="w1160 clearfix">--}}
      {{--<!-- 此处关键词可替换 -->--}}
      {{--<div class="hot_word fl">热门搜索关键词：<a href="">定制包装</a><a href="" class="hot">包装</a><a href="">包装定制</a></div>--}}
        {{--<div class="search fr">--}}
          {{--<form>--}}
        {{--<input class="input-field" placeholder="请输入搜索内容" type="text" value="请输入搜索内容">--}}
        {{--<input class="input-btn" type="button">--}}
      {{--</form>--}}
        {{--</div>  --}}
  {{--</div>--}}
{{--</div>--}}
<!-- slogn -->
<div class="slogn">
  <div class="w1160 clearfix">
    <ul class="clearfix">
      <li>
        <img src="images/slo_1.png" alt="" />
        <h2>原创设计</h2>
        <p>design</p>
      </li>
      <li>
        <img src="images/slo_2.png" alt="" />
        <h2>精湛工艺</h2>
        <p>technology</p>
      </li>
      <li>
        <img src="images/slo_3.png" alt="" />
        <h2>制作成品</h2>
        <p>installtion</p>
      </li>
      <li>
        <img src="images/slo_4.png" alt="" />
        <h2>省心物流</h2>
        <p>logistics</p>
      </li>
      <li>
        <img src="images/slo_5.png" alt="" />
        <h2>全方位跟踪</h2>
        <p>track/p>
      </li>
    </ul>
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!-- product_tit -->
<div class="w1160 clearfix">
  <h2 class="ho_tit_all"><a href="/product"><img src="images/ho_tit_1.png"></a></h2>
  <span class="bk40">&nbsp;</span>
  <ul class="product_tit clearfix">
    @foreach( session('header_nav')[4]->sons as $leader1 )
      <li><a href="/product/category/{{ $leader1->id  }}" class="a_1">{{  mb_substr($leader1->title,2,20,'utf8' ) }}</a></li>
    @endforeach
      <li><a href="/product" class="a_10">MORE+</a></li>
  </ul>
  <span class="bk20">&nbsp;</span>
  <div class="product_list clearfix">
    @foreach( $producets as $producet )
    <a href="{{ $producet->link }}"><img src="{{ $producet->thumbnail }}" alt="" /></a>
    @endforeach
  </div>
  <div class="partout clearfix">
    <div class="lolist fr">
      <ul class="clearfix">
        @foreach( $pateners as $producet )
        <li><img src="{{ $producet->thumbnail }}" alt="" /></li>
        @endforeach
      </ul>
    </div>
    <div class="txt fl">
      <span class="bk40">&nbsp;</span>
      <h2>牵手嘉彩包装</h2>
      <p class="b">众多知名企业都选择了我们</p>
      <span class="bk30">&nbsp;</span>
      <p class="btn"><a href="/partner">查看更多</a></p>
    </div>
  </div>
</div>
<span class="bk60">&nbsp;</span>
<span class="ho_ad_all">&nbsp;</span>
<span class="bk60">&nbsp;</span>
<!-- caseout -->
<div class="w1160 clearfix">
  <h2 class="ho_tit_all"><a href="/case"><img src="images/ho_tit_2.png"></a></h2>
  <span class="bk40">&nbsp;</span>
  <div class="caseout clearfix">
    <div class="caselist fr">
      <ul class="clearfix">
        <li><a href="/case"><img src="{{ $cases->comtent[0][0] }}"></a></li>
        <li><a href="/case"><img src="{{ $cases->comtent[0][1] }}"></a></li>
        <li><a href="/case"><img src="{{ $cases->comtent[0][2] }}"></a></li>
        <li><a href="/case"><img src="{{ $cases->comtent[0][3] }}"></a></li>
      </ul>
    </div>
    <div class="picScroll-case fl">
      <div class="bd">
        <ul class="picList">
          @foreach( $cases->comtent[0] as $case )
          <li><a href="/case"><img src="{{ $case }}"></a></li>
          @endforeach
        </ul>
      </div>
      <div class="hd"><ul></ul></div>
    </div>
    <script type="text/javascript">jQuery(".picScroll-case").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1,trigger:"click"});</script>
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!-- equipout -->
<div class="equipout">
  <div class="w1160 clearfix">
    <span class="bk40">&nbsp;</span>
    <h2 class="ho_tit_all"><a href="/equipment"><img src="/images/ho_tit_3.png"></a></h2>
    <span class="bk40">&nbsp;</span>
    <div class="picMarquee-left">
        <div class="hd">&nbsp;</div>
        <div class="bd">
          <ul class="picList">
            @foreach( $equipments as $equipment )
            <li>
              <a href="/equipment">
                <img src="{{ $equipment->thumbnail }}">
                <span>{{ $equipment->title }}</span>
              </a>
            </li>
            @endforeach
          </ul>
        </div>
    </div>
    <script type="text/javascript">
    jQuery(".picMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:3,interTime:50});
    </script>
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!-- advantage -->
<div class="advantage">
    <div class="tit"><div class="w1160 clearfix"><a href="/service">我们五大优势<br/>为您提供更优质的包装定制服务</a></div></div>
    <span class="bk40">&nbsp;</span>
    <div class="w1160 clearfix">
      <div class="ser_list fr">
        <img src="images/ad_2.jpg">
        <span class="bk10">&nbsp;</span>
        <div class="bt clearfix">
          <p class="fr">优质产品 创意领先 <br/>更节能，更环保，使用更安心</p>
          <span class="num fl">NO2</span>
        </div>
        <span class="bk20">&nbsp;</span>
        <dl class="clearfix">
          <dt>&nbsp;</dt>
          <dd>有创意、有深度、有差异化的完成<span>产品包装设计</span><br/>从视觉上由外及内的反映出产品内核的目的。</dd>
        </dl>
        <dl class="clearfix">
          <dt>&nbsp;</dt>
          <dd>提升企事业单位形象 ，<br/>提高<span>产品价值</span>！</dd>
        </dl>
        <dl class="clearfix">
          <dt>&nbsp;</dt>
          <dd>先后服务过几百家企事业单位。<br/>其中98%的客户<span>满意度良好</span>！</dd>
        </dl>
      </div>  
      <div class="ser_list fl">
        <img src="images/ad_1.jpg">
        <span class="bk10">&nbsp;</span>
        <div class="bt clearfix">
          <p class="fr">品牌口碑好<br/>南充名列前茅的包装制作公司</p>
          <span class="num fl">NO1</span>
        </div>
        <span class="bk20">&nbsp;</span>
        <dl class="clearfix">
          <dt>&nbsp;</dt>
          <dd>南充名列前茅的<span>包装制作公司</span><br/>设计、印刷、制作一站式服务， 让您省时省心省钱！</dd>
        </dl>
        <dl class="clearfix">
          <dt>&nbsp;</dt>
          <dd>公司标准化流程进行，对每一个客户负责，<br/>嘉彩以口碑赢得客户。</dd>
        </dl>
        <dl class="clearfix">
          <dt>&nbsp;</dt>
          <dd>让客户对我们的<span>设计</span>、<br/>品质和服务给予了高度认可!</dd>
        </dl>
      </div>  
    </div>
    <span class="bk60">&nbsp;</span>
    <div class="ser_big clearfix">
      <div class="w1160 clearfix">
        <img src="images/ad_3.png" class="fr">
        <div class="dis fl">
          <span class="bk70">&nbsp;</span>
          <div class="bt clearfix">
            <p class="fr">成本降到极致<br/>给您最佳性价比</p>
            <span class="num fl">NO3</span>
          </div>
          <span class="bk20">&nbsp;</span>
          <dl class="clearfix">
            <dt>&nbsp;</dt>
            <dd>从原材料采购到生产工序，经层层优化，保证质量的同时，<br/>成本降到极致。</dd>
          </dl>
          <dl class="clearfix">
            <dt>&nbsp;</dt>
            <dd>与多家国内知名原材料供应商长期合作，100%保证原材料<br/>用料，确保精美高品质成品。</dd>
          </dl>
        </div>
      </div>
    </div>
    <span class="bk40">&nbsp;</span>
    <div class="w1160 clearfix">
      <div class="ser_list fr">
        <img src="images/ad_5.jpg">
        <span class="bk10">&nbsp;</span>
        <div class="bt clearfix">
          <p class="fr">优质产品 创意领先 <br/>更节能，更环保，使用更安心</p>
          <span class="num fl">NO5</span>
        </div>
        <span class="bk20">&nbsp;</span>
        <dl class="clearfix">
          <dt>&nbsp;</dt>
          <dd>顶尖设备，一流技术，优质材料<br/>质量问题，全责承担，安心无忧虑!</dd>
        </dl>
        <dl class="clearfix">
          <dt>&nbsp;</dt>
          <dd>以<span>诚信友好、互惠互利</span>的原则,<br/>与印刷同行、广告业人士真诚合！</dd>
        </dl>
        <dl class="clearfix">
          <dt>&nbsp;</dt>
          <dd>产品造型多样、外观精致、材质高品!</dd>
        </dl>
      </div>  
      <div class="ser_list fl">
        <img src="images/ad_4.jpg">
        <span class="bk10">&nbsp;</span>
        <div class="bt clearfix">
          <p class="fr">用心服务 回报客户<br/>设计、选材、加工一站式服务</p>
          <span class="num fl">NO4</span>
        </div>
        <span class="bk20">&nbsp;</span>
        <dl class="clearfix">
          <dt>&nbsp;</dt>
          <dd>优秀的团队，专业的服务<br/>专业设计师为您提供<span>专属私人订制</span>。</dd>
        </dl>
        <dl class="clearfix">
          <dt>&nbsp;</dt>
          <dd>价格公道，按时交货!</dd>
        </dl>
        <dl class="clearfix">
          <dt>&nbsp;</dt>
          <dd>我们坚持做一个专业的、合法的、<br/>正规的纸盒包装公司!</dd>
        </dl>
      </div>  
    </div>
</div>
<!-- chengnuo -->
<span class="chengnuo">&nbsp;</span>
<span class="bk60">&nbsp;</span>
<div class="liucheng clearfix">
  <div class="w1160 clearfix">
    <h2 class="ho_tit_all"><a href=" "><img src="images/ho_tit_4.png"></a></h2>
    <span class="bk40">&nbsp;</span>
    <ul class="list">
      <li><img src="images/lc_1.png" alt="" /></li>
      <li><img src="images/lc_2.png" alt="" /></li>
      <li><img src="images/lc_3.png" alt="" /></li>
      <li><img src="images/lc_4.png" alt="" /></li>
      <li><img src="images/lc_5.png" alt="" /></li>
      <li><img src="images/lc_6.png" alt="" /></li>
    </ul>
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!-- footer -->
@endsection