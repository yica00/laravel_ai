@extends('front.base')
@section('content')
<!-- banner -->
<div id="slideBox" class="slideBox">
  <div class="hd">&nbsp;</div>
  <div class="bd">
    <ul>
      @foreach( $sliders as $slider )
      <li><a href="{{$slider->link}}" style="background:url({{$slider->thumbnail}}) center no-repeat;">&nbsp;</a></li>
      @endforeach
    </ul>
  </div>
  <a class="prev" href="javascript:void(0)"></a>
  <a class="next" href="javascript:void(0)"></a>
</div>
<script type="text/javascript">jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});</script>
</div>
<!-- quoted -->
<div class="quoted">
  <div class="w1160 clearfix">
    <div class="txt-2 fr">
      <h2>免费电话报价</h2>
      <p>{{ session('setting')['fix_phone']  }}</p>
    </div>
    <div class="txt-1 fl">
     <h2>皇室石材要花多少钱</h2>
     <p>8s填写表单获取精准报价</p>
    </div>
    <div class="form-1 fl">
        <form class="quo-form-1 clearfix" action="/front/message" method="post">
          {{  csrf_field() }}
          @if (count($errors) > 0)
            <div style="color: red">
              <ul>
                @if( is_object($errors) )
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                @else
                  {{ $errors }}
                @endif
              </ul>
            </div>
          @endif
          <input type="submit" class="btn_2 fr" id="submit" placeholder="获取报价" value="获取报价">

          <div class="ipt_all clearfix">
            <label class="fr" style="margin: 0 10px 0 0;"><input class="btn_1" type="text" name="name" id="name" placeholder="姓名"></label>
            <label class="fl"><input class="btn_1" type="text" name="phone" id="phone" placeholder="电话"></label>
          </div>
          <label class="lab_2"><input class="btn_3" type="text" name="message" placeholder="地址"></label>
        </form>
      <script>
          $("#submit").click(function () {
              var name = $('#name').val();
              var phone = $('#phone').val();
              if (name == "" || phone == "" ) {
                  alert("请先输入姓名,电话后报价");
                  return false;
              }
              $.ajax({
                  url: '/front/message',
                  type: 'POST',
                  data: $('#forms').serialize(),
                  dataType: 'JSON',
                  success: function (data) {
//                      alert(JSON.stringify(data));
//                          $(".writeinfo").append(data.msg);
                  }
              });
          });
      </script>
    </div>
  </div>
</div>
<span class="bk20">&nbsp;</span>
<!-- ho-list -->
<div class="w1160 clearfix">
  <ul class="ho-list clearfix">
    <li>
      <h2>全尺寸定制</h2>
      <p>可根据自身安装背景墙位置<br/>实际尺寸“私人订制”</p>
    </li>
    <li>
      <h2>图案自由定制</h2>
      <p>充分满足客户在空间装饰中的<br/>个性化需求</p>
    </li>
    <li>
      <h2>釉面定制</h2>
      <p>可根据背景墙图案及自身喜好<br/>来选择亮光釉或哑光釉</p>
    </li>
    <li>
      <h2>透光定制</h2>
      <p>可选择透光效果或不透光效果<br/>抑或全透光效果或者半透光效果置</p>
    </li>
  </ul>
</div>
<!-- product -->
<div class="w1160 clearfix">
  <span class="bk20">&nbsp;</span>
  <div class="ho-tit-all">
    <a href="/product">
      <span class="p1">{ 皇室石材 }</span>
      <span class="p2"><i>royal stone</i></span>
    </a>
  </div>
  <span class="bk40">&nbsp;</span>
  <ul class="prod-list clearfix">
    @foreach( $products as $product )
    <li>
      <a href="/product/category/{{$product->id}}">
        <span class="pic">
          <img src="{{$product->thumbnail}}" alt="">
        </span>
        <div class="txt">
          <h2>{{$product->title}}</h2>
          <p class="p1">{{$product->link}}</p>
          <p class="p2">&nbsp;</p>
        </div>
        <div class="mask">&nbsp;</div>
      </a>
    </li>
    @endforeach
  </ul>
</div>
<span class="bk40">&nbsp;</span>
<!-- caseout -->
<div class="caseout">
  <span class="bk40">&nbsp;</span>
  <div class="ho-tit-all">
    <a href="/case">
      <span class="p1">{ 皇室案例 }</span>
      <span class="p2"><i>royal case</i></span>
    </a>
  </div>
  <span class="bk40">&nbsp;</span>
  <div class="w1160 clearfix">
    <div class="picScroll-left">
      <div class="bd">
        <ul class="picList prolist">
          @foreach( $cases as $case )
          <li>
            <a href="/case/{{$case->id}}">
              <div class="pic"><span class="plus">&nbsp;</span><img src="{{$case->thumbnail}}" /></div>
              <div class="txt">{{$case->title}}</div>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
      <div class="hd">
        <ul></ul>
      </div>
    </div>
    <script type="text/javascript">
    jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,scroll:3,vis:3,trigger:"click"});
    </script>
  </div>
</div>
<!-- newsout -->
<div class="w1160 clearfix">
  <span class="bk40">&nbsp;</span>
  <div class="ho-tit-all">
    <a href="/news">
      <span class="p1">{ 皇室动态 }</span>
      <span class="p2"><i>royal dynamic</i></span>
    </a>
  </div>
  <span class="bk40">&nbsp;</span>
  <ul class="newsout clearfix">
    @foreach( $newss as $k=>$news )
    <li>
      <a href="/news/{{$news->id}}">
        @if( $k % 2 == 0 )
        <div class="pic"><img src="{{$news->thumbnail}}" /></div>
        @endif
        <div class="txt">
          <h2>{{$news->title}}</h2>
          <p class="p1">{{$news->introduce}}</p>
          <p class="p2">&nbsp;</p>
          <p class="p3">{{mb_substr($news->created_at,0,10)}}</p>
        </div>
          @if( $k % 2 == 1 )
            <div class="pic"><img src="{{$news->thumbnail}}" /></div>
          @endif
      </a>
    </li>
   @endforeach
  </ul>
</div>
<!-- footer -->
@endsection