@extends('front.base')
@section('content')
<!-- bread -->
<span class="bk30">&nbsp;</span>
<div class="bread">
  <div class="w1280 clearfix">
    <div class="in_tit_all">
      <div class="bt"><span>Ace <b>course</b></span>/ 王牌课程</div>
    </div>
    <ul class="sublist clearfix sub_8">
      @foreach( session('header_nav') as $cate )
        @if( $cate->id == 2)
          @foreach( $cate->articles as $art )
            <li class="
           @if( $art->link )
            @if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link )
                    on
@endif
            @else
            @if( $art->id == $article->pid ) on @endif
            @endif
                    ">
              <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/item/{{$art->id}}@endif" >{{$art->title}}</a>
            </li>
          @endforeach
        @endif
      @endforeach
    </ul>
  </div>
</div>
<div class="wap_box">
  <div class="w1280 clearfix">
  <!-- start -->
  <h2 class="item_kc_bt2">{{ $article->title }}</h2>
  <div class="item_class_1 clearfix">
    <div class=" dis fr">
      <h2>课程介绍</h2>
      <p>{!! $article->comtent !!}</p>
    </div>
    <div class="img fl"><img src="{{$article->thumbnail}}"></div>
  </div>
  <span class="bk40">&nbsp;</span>
  <div class="item_class_2 clearfix">
    <dl>
      <dt>学期</dt>
      <dd>{{  explode(',',$article->introduce)[0] }}</dd>
    </dl>
    <dl>
      <dt>学费</dt>
      <dd>{{  explode(',',$article->introduce)[1] }}</dd>
    </dl>
    <dl>
      <dt>开学日期</dt>
      <dd>{{  explode(',',$article->introduce)[2] }}</dd>
    </dl>
    <dl>
      <dt>上课地点</dt>
      <dd>{{  explode(',',$article->introduce)[3] }}</dd>
    </dl>
  </div>
  <span class="bk40">&nbsp;</span>
  <div class="clearfix">
    <div class="item_class_5">
        <a href="#"  class="tc">立即报名</a>
    </div>
    <div id="gray">&nbsp;</div>
    <div class="popup" id="popup">
      <div class="top_nav" id='top_nav'>
        <div align="center">在线报名<a class="guanbi"></a></div>
      </div>
      <div class="min">
        <div class="cls_dis clearfix">
          <h2>{{ $article->title }}</h2>
          <p>学期：{{  explode(',',$article->introduce)[0] }}</p>
          <p>学费：{{  explode(',',$article->introduce)[1] }}</p>
          <p>开学日期：{{  explode(',',$article->introduce)[2] }}</p>
          <p>上课地点：{{  explode(',',$article->introduce)[3] }}</p>
        </div>
        <form class="tc_login" action="/front/message" method="post">
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
          <p class="p1 clearfix"><input type="text" name="name" id="" required="required" placeholder="请输入您的姓名" autocomplete="off"></p>
          <p class="p1 clearfix"><input type="text" name="phone" id="" required="required" placeholder="请输入您的手机" autocomplete="off"></p>

          <input type="text" name="class" value="{{ $article->title }}"  hidden >
          <input type="text" name="school" value="{{  explode(',',$article->introduce)[3] }}" hidden  >
          <input type="text" name="content" value="" hidden  >
          <div class="btnch">
            <input type="submit" class="button" title="Sign In" value="立即报名">
          </div>
        </form>   
      </div>
    </div>
    <script type="text/javascript">
      //窗口效果
      //点击登录class为tc 显示
      $(".tc").click(function(){
        $("#gray").show();
        $("#popup").show();//查找ID为popup的DIV show()显示#gray
        tc_center();
      });
      //点击关闭按钮
      $("a.guanbi").click(function(){
        $("#gray").hide();
        $("#popup").hide();//查找ID为popup的DIV hide()隐藏
      })

      //窗口水平居中
      $(window).resize(function(){
        tc_center();
      });

      function tc_center(){
        var _top=($(window).height()-$(".popup").height())/2;
        var _left=($(window).width()-$(".popup").width())/2;
        
        $(".popup").css({top:_top,left:_left});
      } 
      </script>

      <script type="text/javascript">
       $(document).ready(function(){ 

        $(".top_nav").mousedown(function(e){ 
          $(this).css("cursor","move");//改变鼠标指针的形状 
          var offset = $(this).offset();//DIV在页面的位置 
          var x = e.pageX - offset.left;//获得鼠标指针离DIV元素左边界的距离 
          var y = e.pageY - offset.top;//获得鼠标指针离DIV元素上边界的距离 
          $(document).bind("mousemove",function(ev){ //绑定鼠标的移动事件，因为光标在DIV元素外面也要有效果，所以要用doucment的事件，而不用DIV元素的事件 
          
            $(".popup").stop();//加上这个之后 
            
            var _x = ev.pageX - x;//获得X轴方向移动的值 
            var _y = ev.pageY - y;//获得Y轴方向移动的值 
          
            $(".popup").animate({left:_x+"px",top:_y+"px"},10); 
          }); 

        }); 

        $(document).mouseup(function() { 
          $(".popup").css("cursor","default"); 
          $(this).unbind("mousemove"); 
        });
      }) 
    </script>
  </div>
    @foreach( $article->articles as $arti )
  <div class="item_class_3 clearfix">
    <h2 class="tit">{{$arti->title}}</h2>
    <div class="dis">
      {{$arti->introduce}}
    </div>
  </div>
  <span class="bk40">&nbsp;</span>
    @endforeach

  <div class="item_class_4 clearfix">
    <h2 class="tit">教学大纲</h2>
    <ul class="list clearfix">
      @foreach( $article->classs->articles as $arti )
      <li>
        <img src="{{$arti->thumbnail}}" alt="" />
        <h2>{{$arti->title}}</h2>
        <div class="li">
          {!! $arti->comtent !!}
        </div>
      </li>
      @endforeach
    </ul>
  </div>
  
  <!-- end -->
  </div>
  <span class="bk80">&nbsp;</span>
</div>
<!-- item -->
@endsection