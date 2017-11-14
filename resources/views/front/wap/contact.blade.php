<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>{{ session('setting')['web_name']  }}</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="{{ session('setting')['description']  }}">
  <meta name="keywords" content="{{ session('setting')['keywords']  }}">
  <!-- base -->
  <meta name="viewport" content="width=720px;">
  <script type="text/javascript" src="/js/wap/jquery-1.9.1.min.js"></script>
  <script src="/js/wap/TouchSlide.1.1.js"></script>
  <script src="/js/wap/touchslider.js"></script>
  <script src="/js/wap/bootstrap.min.js"></script>
  <script src="/js/wap/main.js"></script>
  <!-- animate -->
  <link href="/css/wap/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/css/wap/htmleaf-demo.css">
  <link rel="stylesheet" href="/css/wap/swiper.min.css">
  <link href="/css/wap/base.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="/js/wap/jquery.touchSwipe.min.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="/js/respond.min.js"></script>
  <script src="/js/html5shiv.min.js"></script>
  <![endif]-->
  <script src="/js/wap/font.js"></script>
  <script>
      var _hmt = _hmt || [];
  </script>
  <script type="text/javascript">
      window.onload = function (){
          var oWin = document.getElementById("win");
          var oLay = document.getElementById("overlay");
          var oBtn = document.getElementById("popmenu");
          var oClose = document.getElementById("close");
          oBtn.onclick = function (){
              oLay.style.display = "block";
              oWin.style.display = "block"
          };
          oLay.onclick = function (){
              oLay.style.display = "none";
              oWin.style.display = "none"
          }
      };
  </script>
</head>
<body>
<div class="header">
  <a href="i/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
  <a class="col-xs-10 ui-title tit" id="popmenu">联系我们</a>
  <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
</div>
<div class="cd-bouncy-nav-modal">
  <nav>
    <ul class="cd-bouncy-nav">
      <li><a href="/wap">网站首页</a></li>
      <li><a href="/wap/item/15">王牌课程</a></li>
      <li><a href="/wap/teacher">明星师资</a></li>
      <li><a href="/wap/star">走进片场</a></li>
      <li><a href="/wap/work">学员作品</a></li>
      <li><a href="/wap/news">新闻动态</a></li>
      <li><a href="/wap/about">品牌文化</a></li>
      <li><a href="/wap/contact">联系我们</a></li>
    </ul>
  </nav>
  <a href="#0" class="cd-close">关闭</a>
</div>
@section('content')
<!-- start -->
<div class="list_mode">
  <div class="compus_top">
    <p>招生服务咨询热线 <span>{{ session('setting')['fix_phone']  }}</span></p>
    <span class="bk20">&nbsp;</span>
    <p>总校地址 <span>{{ session('setting')['bases']  }}</span></p>
    <span class="bk20">&nbsp;</span>
    <p>QQ在线咨询 <span>{{ session('setting')['qq']  }}</span></p>
    <span class="bk20">&nbsp;</span>
    <a href="http://map.baidu.com/?latlng={{ explode(',',session('setting')['bases_xy'])[1] }},{{ explode(',',session('setting')['bases_xy'])[0] }}&title=美丽俏佳人南充校区&content=电话：{{ session('setting')['fix_phone']  }}&autoOpen=true&l" target="_blank">查看在线地图</a>
  </div>
  <span class="bk20">&nbsp;</span>
  <div class="clearfix">
    <div class="online_out">
      <img src="/images/wap/ho_tit_6.png"  class="img_adap">
      <form class="on_form_2" action="/front/message" method="post" id="baoming">
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
            @foreach( session('meili')[0] as $school )
              <option value="{{$school->title}}">{{$school->title}}</option>
            @endforeach
          </select>
        </p>
        <p>
          <select id="" name="class">
            <option value="0" selected="selected">请选择课程</option>
            @foreach( session('meili')[1] as $school )
              <option value="{{$school->title}}">{{$school->title}}</option>
            @endforeach
          </select>
        </p>
        <p><textarea name="content" class="textarea" id="" value="" placeholder="如何您还有其他问题，可以在这里给我们留言"></textarea></p>
        <p class="submit_but"><button type="submit">点击这里提交报名</button></p>
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
    <span class="bk10">&nbsp;</span>
    <p class="submit_but"><button type="submit">点击这里提交报名</button></p>
  </div>
  <span class="bk20">&nbsp;</span>
  <div class="contact_ewm">
    <p>搜索微信公众号  <psan>58994445</psan></p>
    <p>或扫描下方二维码即可关注</p>
    <img src="{{ session('setting')['wx_map']  }}">
  </div>
</div>
<!-- end -->
<!-- online_out -->

<!-- footer -->
<div class="footer">
  <dl class="dl_1 dl_call">
    <dt>招生服务咨询热线</dt>
    <dd class="dd_1">-hotline-</dd>
    <dd class="dd_2">{{ session('setting')['fix_phone']  }}</dd>
  </dl>
  <dl class="dl_1">
    <dt>学校地址</dt>
    <dd class="dd_1">-school address-</dd>
    <dd class="dd_2">{{ session('setting')['bases']  }}</dd>
  </dl>
  <dl class="dl_1">
    <dt>在线咨询</dt>
    <dd class="dd_1">-Online consulting-</dd>
    <dd class="dd_2">QQ:{{ session('setting')['qq']  }}</dd>
  </dl>
  <div class="bot">
    <p>版权所有 © 四川美丽俏佳人企业管理有限公司</p>
    <p>技术支持 ：<a href="http://www.scnuohang.com/" target="_blank">诺航科技</a></p>
    <p>Copyright Qiaojiaren All Rights Reserved</p>
  </div>
</div>
<!-- fixed -->
<span class="bk80">&nbsp;</span>
<div class="fixed">
  @foreach( session('meili')[0] as $k=>$school )
    <a href="/wap/compus/{{$school->id}}" class="col-xs-2 @if( $k%2 == 1 ) a2 @endif ">{{$school->title}}</a>
  @endforeach
</div>
<a class="to-top clearfix"><img src="/images/wap/to-top.svg" class="fr"></a>
<script src="/js/wap/jquery.toTop.min.js"></script>
<script>
    jQuery(function($){
        // Plugin activation (basic)
        // $('.to-top').toTop();

        // Plugin activation with options
        $('.to-top').toTop({
            //options with default values
            autohide: true,  //boolean 'true' or 'false'
            offset: 420,     //numeric value (as pixels) for scrolling length from top to hide automatically
            speed: 500,      //numeric value (as mili-seconds) for duration
            right: 20,       //numeric value (as pixels) for position from right
            bottom:80       //numeric value (as pixels) for position from bottom
        });
    });
</script>
<script src="/js/wap//swiper.min.js"></script>
<!-- Initialize Swiper -->
<!-- 1 -->
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
</script>
<!-- 2 -->
<script>
    var swiper = new Swiper('.swiper-container-2', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
</script>
<!-- 3 -->
<script>
    var swiper = new Swiper('.swiper-container-3', {
        pagination: '.swiper-pagination',
        effect: 'flip',
        grabCursor: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev'
    });
</script>
</body>
</html>