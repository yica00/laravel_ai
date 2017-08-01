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
<!-- 报价 -->
<div class="w1160 clearfix">
  <span class="bk30">&nbsp;</span>
  <div class="quotes clearfix">
      <div class="bear_form fr">
          <p class="txt">您的爱家预算为</p>
          <div class="result" id="result">0</div>
          <div class="btn clearfix">
             <a class="btn_1" id="submit">免费智能报价</a>
             <a href="tencent://message/?uin={{ session('setting')['qq']  }}&amp;Menu=yes" class="btn_2">精确人工报价</a>
          </div>
      </div>
      <div class="num fl"><p>已成功为<span>12158</span>户家庭提供精准方案</p></div>
      <div class="quotes_form fl">
        <form class="clearfix" id="forms" method="post">
          {{csrf_field()}}
            <dl class="clearfix">
                <dt>房屋户型</dt>
                <dd>
                    <select>
                        <option value="1">1室</option><option value="2">2室</option><option value="3">3室</option><option value="4">4室</option>
                    </select>
                  </dd>
                  <dd>
                    <select>
                        <option value="1">1厅</option><option value="2">2厅</option><option value="3">3厅</option><option value="4">4厅</option>
                    </select>
                  </dd>
                  <dd>
                    <select>
                        <option value="1">1卫</option><option value="2">2卫</option><option value="3">3卫</option>
                    </select>
                  </dd>
                  <dd>
                    <input class="int_1" type="text" name="area"  id="area" placeholder="输入房地产面积"> <em>㎡</em>
                </dd>
              </dl>
              <dl class="clearfix">
                <dt>楼盘地址</dt>
                <dd>
                    <select>
                        <option value="1">南充市</option>
                      {{--<option value="2">绵阳市</option><option value="3">自贡市</option><option value="4">攀枝花市</option><option value="5">泸州市</option><option value="6">德阳市</option><option value="7">广元市</option><option value="8">遂宁市</option><option value="9">内江市</option><option value="10">乐山市</option><option value="11">资阳市</option><option value="12">宜宾市</option><option value="13">南充市</option><option value="14">达州市</option><option value="15">雅安市</option><option value="16">阿坝藏族羌族自治州</option> <option value="17">甘孜藏族自治州</option><option value="18">凉山彝族自治州</option><option value="19">广安市</option><option value="20">巴中市</option><option value="21">眉山市</option>--}}
                    </select>
                  </dd>
                  <dd>
                    <input class="int_2" type="text" name="address" id="address" placeholder="请填写小区/楼盘详细地址">
                </dd>
              </dl>
              <dl class="clearfix">
                <dt>装修风格</dt>
                <dd>
                    <input class="int_3 on" type="button" name="style" value="现代风格">
                  </dd>
                  <dd>
                    <input class="int_3" type="button"  value="田园风格">
                  </dd>
                  <dd>
                    <input class="int_3" type="button"  value="简约风格">
                  </dd>
                  <dd>
                    <input class="int_3" type="button"  value="欧式风格">
                  </dd>
                  <dd>
                    <input class="int_3" type="button"  value="其他风格">
                  </dd>
              </dl>
          <script>
              $('.int_3').click(function () {
                  $('.int_3').each(function () {
                      var th = $(this);
                      th.removeClass('on');
                      th.removeAttr('name');
                  });
                  var th = $(this);
                  th.addClass('on');
                  th.attr('name',"style");
              });

              $("#submit").click(function(){
                  var name = $('#name').val();
                  var phone = $('#phone').val();
                  var area = $('#area').val();
                  if( name == "" ||phone == "" ||area == "" ){
                      alert("请先输入姓名,电话,和面积后报价");
                      return false;
                  }
                  var price = parseInt(area)*{{ session('setting')['price']  }}
                  $('#result').html(price);
                  $.ajax({
                      url: '/front/message',
                      type: 'POST',
                      data: $('#forms').serialize(),
                      dataType: 'JSON',
                      success: function (data) {
                          alert(JSON.stringify(data));
//                          $(".writeinfo").append(data.msg);
                      }
                  });
              });


          </script>
              <dl class="clearfix">
                <dt>您的称呼</dt>
                  <dd>
                    <input class="int_4" type="text" name="name" id="name" placeholder="先生/女士">
                </dd>
                <dd>
                    <input class="int_5" type="text" name="phone" id="phone" placeholder="输入手机号">
                </dd>
                {{--<dd>--}}
                    {{--<input class="int_6" type="text" name="" placeholder="输入验证码">--}}
                {{--</dd>--}}
                  {{--<dd>--}}
                    {{--<input class="int_7" type="submit" name="" value="获取验证码">--}}
                {{--</dd>--}}
              </dl>
          </form>
      </div>
    </div>
  <span class="bk30">&nbsp;</span>
</div>
<!-- caseout -->
<div class="caseout">
  <div class="w1160 clearfix">
    <span class="bk50">&nbsp;</span>
    <div class="ho_tit_all">
      <a href="/case" class="clearfix"><em class="bg_l fl">&nbsp;</em><em class="p fl">装修风格<i>优选数千套精美风格，超万张照片供您欣赏</i></em><em class="bg_r fl">&nbsp;</em></a>
    </div>
    <span class="bk30">&nbsp;</span>
    <div class="clearfix">
      <div class="w330 fl mR10">
        <a href="https://yun.kujiale.com/design/3FO4IH45QOMK/show?fromqrcode=true" target="_blank" class="btn_vr">VR实景装修效果图</a>
        <span class="bk10">&nbsp;</span>
        <a href="/case/{{$cases[0]->id}}" class="caseo_link">
          <img src="{{$cases[0]->thumbnail}}">
          <span class="mask">&nbsp;</span>
          <span class="txt">{{$cases[0]->title}}</span>
        </a>
      </div>
      <div id="slideBoxcp" class="slideBoxcp fl mR10">
        <div class="hd">&nbsp;</div>
        <div class="bd">
          <ul>
            @foreach( $cases as $case )
            <li>
              <a href="/case/{{$case->id}}">
                <img src="{{$case->thumbnail}}">
                <div class="txt">
                  <span class="name">{{$case->title}}</span>
                  <span class="btn">查看更多</span>
                </div>
                <span class="mask_black">&nbsp;</span>
              </a>
            </li>
            @endforeach
          </ul>
        </div>
        <a class="prev" href="javascript:void(0)"></a>
        <a class="next" href="javascript:void(0)"></a>
      </div>
      <script type="text/javascript">jQuery(".slideBoxcp").slide({mainCell:".bd ul",autoPlay:true});</script>
      <div class="w330 fl">
        <a href="/case/{{$cases[1]->id}}" class="caseo_link">
          <img src="{{$cases[1]->thumbnail}}">
          <span class="mask">&nbsp;</span>
          <span class="txt">{{$cases[1]->title}}</span>
        </a>
        <span class="bk10">&nbsp;</span>
        <a href="/case/{{$cases[2]->id}}" class="caseo_link">
          <img src="{{$cases[2]->thumbnail}}">
          <span class="mask">&nbsp;</span>
          <span class="txt">{{$cases[2]->title}}</span>
        </a>
      </div>
    </div>
    <span class="bk80">&nbsp;</span>
  </div>
</div>
<!-- teamout -->
<div class="w1160 clearfix">
  <span class="bk50">&nbsp;</span>
  <div class="ho_tit_all">
    <a href="/team" class="clearfix"><em class="bg_l fl">&nbsp;</em><em class="p fl">设计团队<i>汇聚多余名资深设计师，合力为您打造一个完美的家</i></em><em class="bg_r fl">&nbsp;</em></a>
  </div>
  <span class="bk30">&nbsp;</span>
  <div class="picScroll-lefteam">
      <div class="hd">
        <a class="next"></a>
        <a class="prev"></a>
      </div>
      <div class="bd">
        <ul class="picList">
          @foreach( $teams as $team )
          <li>
            <a href="/team/{{$team->id}}">
            <img src="{{$team->photo}}" />
            <div class="txt"><h2>{{$team->name}}</h2><p class="p2">{{$team->title}}</p></div>
            </a>
          </li>
            @endforeach
        </ul>
      </div>
  </div>
  <script type="text/javascript">
  jQuery(".picScroll-lefteam").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:4,trigger:"click"});
  </script>
  <span class="bk80">&nbsp;</span>
</div>
<!-- productout -->
<div class="productout">
  <span class="bk50">&nbsp;</span>
  <div class="w1160 clearfix">
   <div class="ho_tit_all">
    <a href="/product" class="clearfix"><em class="bg_l fl">&nbsp;</em><em class="p fl">优质选材<i>集团化采购，一线大品牌，德系材料工艺保障</i></em><em class="bg_r fl">&nbsp;</em></a>
  </div>
    <span class="bk40">&nbsp;</span>
    <ul class="list clearfix">
      @foreach( $products as $product )
      <li>
        <a href="/product/{{$product->id}}">
          <span class="pic"><img src="{{$product->thumbnail}}" alt="" /></span>
          <span class="mask_black">&nbsp;</span>
              <div class="txt">
                <h2>{{$product->title}}</h2>
                <p>{{$product->link}}</p>
              </div>
        </a>
      </li>
        @endforeach
    </ul>
  </div>
  <span class="bk50">&nbsp;</span>
</div>
<span class="bk50">&nbsp;</span>
<div class="ho_add_all">
</div>
<span class="bk80">&nbsp;</span>
<!-- news -->
<div class="w1160 clearfix">
      <div class="ho_tit_all">
      <a href="/news" class="clearfix"><em class="bg_l fl">&nbsp;</em><em class="p fl">新闻中心<i>实时掌握最美品佳资讯，与我们共同成长</i></em><em class="bg_r fl">&nbsp;</em></a>
      </div>
    <span class="bk40">&nbsp;</span>
    <!-- colorful_out -->
    <div class="picScroll-left-hd">
      <div class="hd"><a class="next"></a>
          <a class="prev"></a></div>
      <div class="bd">
        <ul class="picList boost_img">
          @foreach( $newss as $news )
          <li>
            <a href="/news/{{$news->id}}">
              <span class="pic"><img src="{{$news->thumbnail}}"></span>
              <div class="txt">
                <h2>{{$news->title}}</h2>
                <p>{{$news->introduce}}</p>
                <span class="btn">查看更多</span>
              </div>
            </a>
          </li>
            @endforeach
        </ul>
      </div>
    </div>
    <script type="text/javascript">
    jQuery(".picScroll-left-hd").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click"});
    </script>
</div>

<span class="bk80">&nbsp;</span>
<!-- witness -->
<div class="w1160 clearfix">
  <div class="ho_tit_all">
    <a href="/witness" class="clearfix"><em class="bg_l fl">&nbsp;</em><em class="p fl">客户见证<i>我们服务过996位客户，听听他们的声音！</i></em><em class="bg_r fl">&nbsp;</em></a>
  </div>
  <span class="bk40">&nbsp;</span>
    <div class="picScroll-leftwit">
    <div class="hd">
      <a class="next"></a>
      <a class="prev"></a>
    </div>
    <div class="bd">
      <ul class="picList boost_img">
        @foreach( $vitnesss as $vit )
        <li>
          <a href="/witness/{{$vit->id}}">
                  <span class="pic"><img src="{{$vit->thumbnail}}" alt="" /></span>
                  <div class="txt">{{$vit->title}}</div>
                </a>
        </li>
          @endforeach
      </ul>
    </div>
  </div>

  <script type="text/javascript">
  jQuery(".picScroll-leftwit").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:4,trigger:"click"});
  </script>
</div>
<span class="bk80">&nbsp;</span>
<!-- index_list -->
@endsection