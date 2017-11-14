@extends('front.base')
@section('content')
<!-- bread -->
<span class="bk30">&nbsp;</span>
<div class="bread">
  <div class="w1280 clearfix">
    <div class="in_tit_all">
      <div class="bt"><span>contact <b>us</b></span>/ 联系我们</div>
    </div>
    <ul class="sublist clearfix sub_2">
      <li class="on"><a href="/contact">在线报名<span>Online registration</span></a></li>
      <li><a href="/contact/way">联系地址<span>Contact address</span></a></li>
    </ul>
  </div>
</div>
<div class="wap_box">
  <div class="w1280 clearfix">
  <!-- start -->
  <div class="txt_model_3">
    <form class="on_form_2" action="/front/message" method="post">
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
      <p><input type="text" value="" name="name" id="name" class="input" placeholder="请输入您的姓名"></p>
      <p><input type="text" value="" name="phone" id="phone" class="input" placeholder="请输入您的电话"></p>
      <p>
        <select id="" name="school">
          <option value="0" selected="selected">请选择校区</option>
          @foreach( $schools as $school )
          <option value="{{$school->title}}">{{$school->title}}</option>
          @endforeach
        </select>
      </p>
      <p>
        <select id="" name="class">
          <option value="0" selected="selected">请选择课程</option>
          @foreach( $classs as $school )
            <option value="{{$school->title}}">{{$school->title}}</option>
          @endforeach
        </select>
      </p>
      <p><textarea name="content" class="textarea" id="" value="" placeholder="如何您还有其他问题，可以在这里给我们留言"></textarea></p>
      <p><button type="submit" class="submit_but">确认提交</button></p>
    </form>
    <script>
        $('.submit_but').click(function () {
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
  </div>
  <span class="bk40">&nbsp;</span>
  <div class="privilege">
    <div class="w1280 clearfix">
      <div class="ho_tit_all">
        <a href="">
          <img src="images/ho_tit_6.png">
        </a>
      </div>
      <span class="bk30">&nbsp;</span>
      <ul class="list clearfix">
        <li>
          <div class="txt">
            <h2>韩国免费进修</h2>
            <p>提供短期韩国免费进修（1-3月）机会，推荐进舞台剧组、影视剧组化妆造型实习。</p>
          </div>
          <div class="bot">
            <p>Free<br/> education <br/>in South Korea</p>
          </div>
        </li>
        <li>
          <div class="txt">
            <h2>包学包会，学会为止</h2>
            <p>针对所有学员包学包会，学不会可跟下期新班免费继续学习，学会为止。</p>
          </div>
          <div class="bot">
            <p>Pack your <br/>bags and <br/>learn to do so</p>
          </div>
        </li>
        <li>
          <div class="txt">
            <h2>终身免费进修</h2>
            <p>随时可以返回学校免费进修所学专业的新技术，一次学习终身免费升级。</p>
          </div>
          <div class="bot">
            <p>Lifelong <br/>free <br/>education</p>
          </div>
        </li>
        <li>
          <div class="txt">
            <h2>尊享优惠，创业支持</h2>
            <p>凡在美丽俏佳人入学学员，可免费加盟美丽俏佳人作为终身奋斗的事业，公司会提供最大的支持。</p>
          </div>
          <div class="bot">
            <p>Free <br/>education <br/>in South Korea</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!-- end -->
  </div>
  <span class="bk80">&nbsp;</span>
</div>
<!-- item -->
@endsection