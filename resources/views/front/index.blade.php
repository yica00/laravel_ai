@extends('front.base')
@section('content')
<!-- banner -->
<div id="slideBox" class="slideBox">
  <div class="hd">&nbsp;</div>
  <div class="bd">
    <ul>
      @foreach( $slides as $slide )
        <li><a href="{{ $slide->link  }}" style="background:url({{ $slide->thumbnail  }}) center no-repeat;">&nbsp;</a></li>
      @endforeach
    </ul>
  </div>
  <a class="prev" href="javascript:void(0)"></a>
  <a class="next" href="javascript:void(0)"></a>
</div>
<script type="text/javascript">jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});</script>
<!-- aboutout -->
<div class="aboutout">
  <div class="w1160 clearfix">
    <span class="bk50">&nbsp;</span>
    <h2 class="ho_tit_all"><a href="about"><img src="images/ho_tit_1.png"></a></h2>
    <span class="bk50">&nbsp;</span>
    <div class="nr clearfix">
      <div class="txt fl">
        <h3>服务农业    服务农村   服务农民</h3>
        <h2>因为专一，所以我们更专业</h2>
        <span class="bk20">&nbsp;</span>
        <div class="b">{!! mb_substr($introduce->comtent,3,-4,'utf8') !!}
        </div>
      </div>
      <img src={{  $introduce->thumbnail }} class="pic fr">
    </div>
    <span class="bk40">&nbsp;</span>
    <ul class="list clearfix">
      <li><a href="about"><img src="images/abt_btn_1.png" alt="" /></a></li>
      <li><a href="office"><img src="images/abt_btn_2.png" alt="" /></a></li>
      <li><a href="office"><img src="images/abt_btn_3.png" alt="" /></a></li>
      <li><a href="office"><img src="images/abt_btn_4.png" alt="" /></a></li>
    </ul>
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!-- productout -->
<div class="productout"> 
  <div class="w1160">
  <h2 class="ho_tit_all"><a href="product"><img src="images/ho_tit_2.png"></a></h2>
  <span class="bk30">&nbsp;</span>
  <p class="btn clearfix">
    @foreach( $products as $product )
      <a href="/produce/categry/{{  $product->id }}">{{  mb_substr($product->title,2,10,'utf8') }}</a>
    @endforeach
  </p>
  <span class="bk30">&nbsp;</span>
  <div id="slideBoxpro" class="slideBoxpro">
      <div class="hd">&nbsp;</div>
      <div class="bd">
        <ul>
          <li>
            <a href="product_in" class="clearfix">
              <img src="images/pro1.jpg" class="fr pic" />
              <div class="txt fl">
                <h2>三安</h2>
                <h3>年销售1000万袋</h3>
                <span class="bk30">&nbsp;</span>
                <p>国内首创，并获国家专利。采用的生产工艺为国际先进的干粉物理团粒法。本品是目前国内养分含量最高的复合肥，肥效持久，利用率高。增产效果明显，比传统肥料增产20%以上。</p>
              </div>
            </a>
          </li>
          <li>
            <a href="product_in" class="clearfix">
              <img src="images/pro1.jpg" class="fr pic" />
              <div class="txt fl">
                <h2>三安2</h2>
                <h3>年销售1000万袋</h3>
                <span class="bk30">&nbsp;</span>
                <p>国内首创，并获国家专利。采用的生产工艺为国际先进的干粉物理团粒法。本品是目前国内养分含量最高的复合肥，肥效持久，利用率高。增产效果明显，比传统肥料增产20%以上。</p>
              </div>
            </a>
          </li>
          <li>
            <a href="product_in" class="clearfix">
              <img src="images/pro1.jpg" class="fr pic" />
              <div class="txt fl">
                <h2>三安3</h2>
                <h3>年销售1000万袋</h3>
                <span class="bk30">&nbsp;</span>
                <p>国内首创，并获国家专利。采用的生产工艺为国际先进的干粉物理团粒法。本品是目前国内养分含量最高的复合肥，肥效持久，利用率高。增产效果明显，比传统肥料增产20%以上。</p>
              </div>
            </a>
          </li>
          <li>
            <a href="product_in" class="clearfix">
              <img src="images/pro1.jpg" class="fr pic" />
              <div class="txt fl">
                <h2>三安4</h2>
                <h3>年销售1000万袋</h3>
                <span class="bk30">&nbsp;</span>
                <p>国内首创，并获国家专利。采用的生产工艺为国际先进的干粉物理团粒法。本品是目前国内养分含量最高的复合肥，肥效持久，利用率高。增产效果明显，比传统肥料增产20%以上。</p>
              </div>
            </a>
          </li>
          <li>
            <a href="product_in" class="clearfix">
              <img src="images/pro1.jpg" class="fr pic" />
              <div class="txt fl">
                <h2>三安5</h2>
                <h3>年销售1000万袋</h3>
                <span class="bk30">&nbsp;</span>
                <p>国内首创，并获国家专利。采用的生产工艺为国际先进的干粉物理团粒法。本品是目前国内养分含量最高的复合肥，肥效持久，利用率高。增产效果明显，比传统肥料增产20%以上。</p>
              </div>
            </a>
          </li>
        </ul>
      </div>
      <a class="prev" href="javascript:void(0)"></a>
      <a class="next" href="javascript:void(0)"></a>

    </div>

    <script type="text/javascript">
    jQuery(".slideBoxpro").slide({mainCell:".bd ul",autoPlay:true});
    </script>
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!-- advantage -->
<div class="advantage">
  <div class="w1160 clearfix">    
    <a class="tit" href="core">
      <h2>星维科技长效稳定复合肥   只为农作物的感受着想</h2>
      <span class="bk20">&nbsp;</span>
      <h3>针对目前种植过程普遍存在的土壤有机质严重不足所出现的一系列问题，宜宾星维生物科技有限公司依靠自身的技术实力，全新推出健康腐殖酸复合肥</h3>
    </a>
    <span class="bk40">&nbsp;</span>
    <img src="images/advantage_img.png">
  </div>
</div>
<span class="bk60">&nbsp;</span>
<a href="" class="ho_ad_all">&nbsp;</a>
<span class="bk60">&nbsp;</span>
<!-- character -->
<div class="w1160 clearfix"> 
  <div class="character">
    <div class="txt">
    <h2><a href="core_2">产品特点</a></h2>
    <span class="bk10">&nbsp;</span>
    <p>本公司长效稳定的复合肥是集海内外博士团队最新研发的科研成果，采用获得中国发明专利的最新技术生产而成。</p>
    </div>
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!-- baseout -->
<div class="baseout">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <h2 class="ho_tit_all"><a href="base"><img src="images/ho_tit_3.png"></a></h2>
    <span class="bk50">&nbsp;</span>
    <div class="clearfix">
      <div class="w540 fl mR10">
        <a href="base" class="basic big">
          <img src="images/base1.jpg">
          <span>自贡七星湖葡萄</span>
        </a>
        <span class="bk10">&nbsp;</span>
        <a href="base" class="basic midx">
          <img src="images/base2.jpg">
          <span>威远大棚蔬菜</span>
        </a>
      </div>
      <div class="w300 fl mR10">
        <a href="base" class="basic small">
          <img src="images/base3.jpg">
          <span>河南大豆</span>
        </a>
        <span class="bk10">&nbsp;</span>
        <a href="base" class="basic small">
          <img src="images/base4.jpg">
          <span>眉山黄丰镇橘子</span>
        </a>
        <span class="bk10">&nbsp;</span>
        <a href="base" class="basic small">
          <img src="images/base5.jpg">
          <span>云南西双版纳香蕉</span>
        </a>
      </div>
      <div class="w300 fl">
        <a href="base" class="basic small">
          <img src="images/base6.jpg">
          <span>达州蘑菇</span>
        </a>
        <span class="bk10">&nbsp;</span>
        <a href="base" class="basic midy">
          <img src="images/base7.jpg">
          <span>贵州水稻</span>
        </a>
      </div>
    </div>
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!-- contact_out -->
@endsection