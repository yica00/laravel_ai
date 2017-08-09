@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">  
      <div class="top">
        <h2>--联系我们--</h2>
        <p><span>contact us</span></p>
      </div>
      <ul class="sublist clearfix">
          @foreach( session('header_nav') as $cate )
              @if( $cate->id == 8 )
                  @foreach( $cate->articles as $art )
                      <li>
                          <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" class=" @if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link ) on @endif">{{$art->title}}</a>
                      </li>
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
    <div class="order_warp">
          <p class="top">感谢您填写在线装修信息。为了我们能及时与您取得联系，信息填写后，请保证您的电话处于正常开机状态，我们会有专员第一时间和您取得联系。若您还有疑问，您可以致电客服专线电话：<span>{{ session('setting')['fix_phone']  }}/{{ session('setting')['phone']  }}</span>，我们将会有最专业的客服为您解答疑虑。</p>
        <form  name="reservation" action="/front/message" method="post">
            {{  csrf_field() }}
          <table class="lybclass" cellspacing="0" cellpadding="0" width="800" align="center" border="0">
              <tbody>
                  <tr>
                      <th></th>
                      <td>
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
                      </td>
                  </tr>

                  <tr>
                      <th>业主姓名：</th>
                      <td><input id="name" name="name" type="text"><span>请填写您的真实姓名</span><em>*</em></td>
                  </tr>
                  <tr>
                      <th>联系电话：</th>
                      <td><input id="phone" name="phone" type="text"><span>请您填写手机号码，我们会保护您的隐私</span><em>*</em></td>
                  </tr>
                  <tr>
                      <th>楼盘地址：</th>
                      <td><input id="" name="address" type="text" style="width:498px;"></td>
                  </tr>
                  <tr>
                      <th>房屋面积：</th>
                      <td><input id="" name="area" type="text"><span>平方米</span></td>
                  </tr>
                  <tr>
                      <th>装修预算：</th>
                      <td><input id="" name="badget" type="text"><span>万元</span></td>
                  </tr>
                  <tr>
                      <th>房屋户型：</th>
                      <td>
                          <select name="category"> <option value="0">请选择户型</option>
                              <option value="平层装修设计">平层装修设计</option>
                              <option value="跃层装修设计">跃层装修设计</option>
                              <option value="洋房装修设计">洋房装修设计</option>
                              <option value="别墅装修设计">别墅装修设计</option>
                              <option value="商业空间设计">商业空间设计</option>
                              <option value="其他装修设计">其他装修设计</option>
                          </select>
                      </td>
                  </tr>
                  <tr>
                      <th>装修要求：</th>
                      <td><textarea id="lytext" name="message" ></textarea></td>
                  </tr>
                  <tr>
                      <th>验证码：</th>
                      <td><img src="/vaptcha" id="vaptcha"></td>
                  </tr>
                  <tr>
                      <th></th>
                      <td><input id="" name="captcha_code" placeholder="请输入验证码" type="text"><span></span><em>*</em></td>
                  </tr>
              </tbody>
          </table>
          <p class="lysubcan clearfix" style="padding:0 0 0 316px;*padding:0 0 0px 316px !important;">
            <input type="submit" id="submit" name="Submit" value="确定提交">
            {{--<input type="reset" name="Reset" valur="取消重置" class="mL10">--}}
          </p>
      </form>
    </div>
      <script>
          $('#submit').click(function () {
              var name = $('#name').val();
              var phone = $('#phone').val();

              if( phone == "" || name == "" ){
                 alert("姓名和电话必须填写");
                  return false;
              }

              if( isPhoneNo(phone) == false ){
                  alert("你输入的手机号格式不正确！")
                  return false;
              }
          });

          $('#vaptcha').click(function () {
              $(this).attr('src','/vaptcha?'+ Math.random());
          });

          function isPhoneNo(phone) {
              var pattern = /^1[34578]\d{9}$/;
              return pattern.test(phone);
          }
      </script>
    <!-- end -->
  </div>  
</div>
<span class="bk80">&nbsp;</span>
<!-- index_list -->
@endsection