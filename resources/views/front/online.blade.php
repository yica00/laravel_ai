@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <h2>about us</h2>
      <p>关于我们</p>
    </div>
    <span class="bk20">&nbsp;</span>
    <ul class="sublist">
      @foreach( session('header_nav') as $cate )
        @if( $cate->id == 8)
          @foreach( $cate->articles as $art )
            <li class="
            @if( $art->link )
            @if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link )
                    on
@endif
            @else
            @if( $art->id == $id ) on @endif
            @endif
                    ">
              <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" >{{$art->title}}</a>
            </li>
          @endforeach
        @endif
      @endforeach
    </ul>
  </div>
</div>
<div class="wap_box">
  <span class="bk40">&nbsp;</span>
  <div class="w1160 clearfix">
  <!-- start -->
  <div class="txt_model_3 online_form clearfix">
      <div class="w450 fr">
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
          <p><input type="text" value="" name="name" id="name" class="input" placeholder="请输入您的姓名"></p>
          <p><input type="text" value="" name="phone" id="phone" class="input" placeholder="请输入您的电话"></p>
          <p><input type="text" value="" name="xiaoqu" id="phone" class="input" placeholder="请输入您的小区"></p>
          <p><input type="text" value="" name="budge" id="phone" class="input" placeholder="请输入您的预算"></p>
          <p><input type="text" value="" name="area" id="phone" class="input" placeholder="请输入您的建筑面积"></p>
          <p>
            <select id="" name="style">
              <option value="0" selected="selected">请选择您的装修风格</option>
              @foreach( $articles as $article )
                <option value="{{$article->title}}">{{$article->title}}</option>
              @endforeach
            </select>
          </p>

          <button type="submit" class="submit_but">&nbsp;</button>
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
      <div class="w570  fl">
        <div class="txtScroll-top">
          <div class="hd">&nbsp;</div>
          <div class="bd">
            <ul class="infoList">
              @foreach( $messages as $message )
              <li><span class="p_1">{{mb_substr($message->phone,0,3)}}****{{mb_substr($message->phone,7,4)}}</span><span class="p_2">{{$message->name}}</span><span class="p_3">已申请报价</span><span class="p_4">{{ \Carbon\Carbon::now('PRC')->diffInDays($message->created_at) }}天前</span></li>
              @endforeach
            </ul>
          </div>
        </div>
        <script type="text/javascript">
        jQuery(".txtScroll-top").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"top",autoPlay:true,vis:7});
        </script>
        <div class="txt">
          <h2>已有<span>{{$num}}</span>户业主申请报价</h2>
          <p>我们承诺您的信息将被严格保密</p>
        </div>
      </div>
  </div>
  <!-- end -->
  </div>
  <span class="bk40">&nbsp;</span>
</div>
@endsection