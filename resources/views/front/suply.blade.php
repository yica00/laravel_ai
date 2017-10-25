@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <h2>join investment</h2>
      <p>招商加盟</p>
      <div class="line">&nbsp;</div>
    </div>
    <span class="bk20">&nbsp;</span>
    <ul class="sublist">
      @foreach( session('header_nav') as $cate )
        @if( $cate->id == 6 )
          @foreach( $cate->articles as $art )
            <li  class="
              @if( $art->link )
               @if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link ) on @endif
            @else
            @endif
                    ">
              <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif">{{$art->title}}</a>
            </li>
          @endforeach
        @endif
      @endforeach
    </ul>
  </div>
</div>
<span class="bk30">&nbsp;</span>
<!-- start -->
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
      <p><input type="text" value="" name="phone" id="phone" class="input" placeholder="请输入您的电话"></p>
      <p><textarea name="message" class="textarea" id="" value="" placeholder="如果您对于加盟李记酸菜鸡还有其他疑问，请写下来，我们会尽快联系您！"></textarea></p>
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
    <!-- end -->
  </div>  
</div>
<span class="bk60">&nbsp;</span>
<!-- end -->
@endsection