@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <p>------&nbsp;&nbsp;contact us&nbsp;&nbsp;------</p>
      <h2><span>联</span><span>系</span><span>我</span><span>们</span></h2>
    </div>
  </div>
</div>
<!-- sublist -->
<div class="w1160 clearfix">
  <ul class="sublist">
    @foreach( session('header_nav') as $cate )
      @if( $cate->id == 8 )
        @foreach( $cate->articles as $art )
          <li>
            <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" class="
          @if( $art->link )
                @if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link )
                        on
                @endif
            @else
              @if( $art->id == $id ) on @endif
            @endif
                    ">{{$art->title}}</a>
          </li>
        @endforeach
      @endif
    @endforeach
  </ul>
</div>
<!--  -->
<div class="wap_box">
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
      <p><input type="text" value="" name="email" id="" class="input" placeholder="请输入您的电子邮箱"></p>
      <p><input type="text" value="" name="phone" id="phone" class="input" placeholder="请输入您的真实手机号码"></p>
      <p><textarea name="message" class="textarea" id="" value="" placeholder="留言"></textarea></p>
      <p>验证码：<img src="/vaptcha" id="vaptcha"><input class="input" name="captcha_code" placeholder="请输入验证码" type="text"></p>
      <p></p>
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
<span class="bk50">&nbsp;</span>
<!-- footer -->
@endsection