@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <p>------&nbsp;&nbsp;Budget quotation&nbsp;&nbsp;------</p>
      <h2><span>预</span><span>算</span><span>报</span><span>价</span></h2>
    </div>
  </div>
</div>
<!-- start -->
<!--  -->
<div class="wap_box">
  <span class="bk40">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
      <form class="on_form" action="/front/message" method="post">
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
      <p><input type="text" value="" name="name" id="name" class="input" placeholder="请输入您的真实姓名"></p>
      <p><input type="text" value="" name="phone" id="phone" class="input" placeholder="请输入您的电话"></p>

      <p><input type="text" value="" name="address" id="" class="input" placeholder="请输入您的地址"></p>
      <p>
          <select id="" name="style">
              <option value="请选择风格">请选择风格</option>
              <option value="中式">中式</option>
              <option value="欧式" >欧式</option>
              <option value="美式">美式</option>
              <option value="英式" >英式</option>
              <option value="现代">现代</option>
          </select>
      </p>

      <p><textarea name="message" class="textarea" id="" value="" placeholder="如何您还有其他问题需要咨询，可以在这里给我们留言"></textarea></p>
      <p><button type="submit" id="submit" class="submit_but">确认提交</button></p>
    </form>
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
          function isPhoneNo(phone) {
              var pattern = /^1[34578]\d{9}$/;
              return pattern.test(phone);
          }
      </script>
  </div>  
</div>
<span class="bk50">&nbsp;</span>
<!-- end -->
<!-- footer -->
@endsection