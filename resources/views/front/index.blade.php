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
      <a href="/product/category/{{  $product->id }}">{{  mb_substr($product->title,2,10,'utf8') }}</a>
    @endforeach
  </p>
  <span class="bk30">&nbsp;</span>
  <div id="slideBoxpro" class="slideBoxpro">
      <div class="hd">&nbsp;</div>
      <div class="bd">
        <ul>
          @foreach( $pro_details as $pro_detail )
            <li>
              <a href="/product/detail/{{ $pro_detail->id }}" class="clearfix">
                <img src="{{ $pro_detail->thumbnail }}" class="fr pic" />
                <div class="txt fl">
                  <h2>{{ $pro_detail->title }}</h2>
                  <h3>{{ $pro_detail->link }}</h3>
                  <span class="bk30">&nbsp;</span>
                  {!! $pro_detail->comtent !!}
                </div>
              </a>
            </li>
          @endforeach
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
      {!! $core1->comtent !!}
    </a>
    <span class="bk40">&nbsp;</span>
    <img src="{{ $core1->thumbnail }}">
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
      {!! $core2->comtent !!}
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
        <a href="{{  $bases[0]->link }}" class="basic big">
          <img src="{{  $bases[0]->thumbnail }}">
          <span>{{ mb_substr($bases[0]->title,2,20,'utf8') }}</span>
        </a>
        <span class="bk10">&nbsp;</span>
        <a href="{{  $bases[1]->link }}" class="basic midx">
          <img src="{{  $bases[1]->thumbnail }}">
          <span>{{ mb_substr($bases[1]->title,2,20,'utf8') }}</span>
        </a>
      </div>
      <div class="w300 fl mR10">
        <a href="{{  $bases[2]->link }}" class="basic small">
          <img src="{{  $bases[2]->thumbnail }}">
          <span>{{ mb_substr($bases[2]->title,2,20,'utf8') }}</span>
        </a>
        <span class="bk10">&nbsp;</span>
        <a href="{{  $bases[3]->link }}" class="basic small">
          <img src="{{  $bases[3]->thumbnail }}">
          <span>{{ mb_substr($bases[3]->title,2,20,'utf8') }}</span>
        </a>
        <span class="bk10">&nbsp;</span>
        <a href="{{  $bases[4]->link }}" class="basic small">
          <img src="{{  $bases[4]->thumbnail }}">
          <span>{{ mb_substr($bases[4]->title,2,20,'utf8') }}</span>
        </a>
      </div>
      <div class="w300 fl">
        <a href="{{  $bases[5]->link }}" class="basic small">
          <img src="{{  $bases[5]->thumbnail }}">
          <span>{{ mb_substr($bases[5]->title,2,20,'utf8') }}</span>
        </a>
        <span class="bk10">&nbsp;</span>
        <a href="{{  $bases[6]->link }}" class="basic midy">
          <img src="{{  $bases[6]->thumbnail }}">
          <span>{{ mb_substr($bases[6]->title,2,20,'utf8') }}</span>
        </a>
      </div>
    </div>
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!-- contact_out -->
@endsection