<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>美丽俏佳人</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
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
</head>
<body>

<img src="{{$pics[0]->thumbnail}}" class="hed_ban">
<img src="{{$pics[1]->thumbnail}}" class="top_ban">
<div class="about_out clearfix">
  <img src="{{$pics[3]->thumbnail}}" class="pic fr">
  <a href="/wap/contact#baoming" class="btns fl">
    <img src="{{$pics[2]->thumbnail}}">
  </a>
</div>
<span class="bk40">&nbsp;</span>
<!-- news -->
<div class="last_news">
  <a href="/wap/news" class="ho_tit_1">
    <img src="/images/wap/ho_tit_1.png">
  </a>
  <span class="bk10">&nbsp;</span>
  <!-- Swiper -->
  <div class="swiper-container">
      <div class="swiper-wrapper">
        @foreach( $pics[4]->comtent[0] as $img )
          <div class="swiper-slide"><a href="/wap/news"><img src="{{$img}}"></a></div>
        @endforeach
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
  </div>
</div>
<span class="bk20">&nbsp;</span>
<!-- item_out -->
<div class="item_out">
  <span class="bk50">&nbsp;</span>
  <div class="ho_tit_2">
    <img src="/images/wap/ho_tit_2.png" class="img_adap">
  </div>
  <div class="item_box">
    <div class="swiper-container-3">
      <div class="swiper-wrapper">
        @foreach( $classs as $school )
          <div class="swiper-slide">
            <div class="item_big_dis">
              <a href="/wap/item/detail/{{$school->id}}" class="clearfix">
                <div class="col-xs-7">
                  <div class="txt">
                    <h2>{{$school->title}}</h2>
                    <p class="p1">Makeup basic class</p>
                    <p class="p2">学期时间：{{  explode(',',$school->introduce)[0] }}</p>
                    <div class="p3">
                      {{--<h3>赠送</h3>--}}
                      <p>学费：{{  explode(',',$school->introduce)[1] }}</p>
                      <p>开学日期：{{  explode(',',$school->introduce)[2] }}</p>
                      {{--<p>1250元T台饰品制作课程</p>--}}
                    </div>
                  </div>
                </div>
                <div class="col-xs-5">
                  <div class="pic">
                    <img src="/images/wap/work_1.jpg">
                  </div>
                </div>
              </a>
            </div>
          </div>
        @endforeach
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <img src="/images/wap/item_1.jpg" class="img_adap">
  <span class="bk30">&nbsp;</span>
  <p class="btns"><a href="/wap/contact#baoming"><img src="/images/wap/btn_online.gif" class="img_adap"></a></p>
  <span class="bk10">&nbsp;</span>
  <img src="/images/wap/item_2.jpg" class="img_adap">
  <span class="bk30">&nbsp;</span>
</div>
<!-- teacher -->
<img src="{{$pics[5]->thumbnail}}"  class="img_adap">
<div class="swiper-container-2">
  <div class="swiper-wrapper">
    @foreach( $pics[5]->comtent[0] as $img )
      <div class="swiper-slide"><a href="/wap/teacher"><img src="{{$img}}"></a></div>
     @endforeach
  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
</div>
<span class="bk10">&nbsp;</span>
<!-- video -->
<a href="/wap/video"><img src="{{$pics[6]->thumbnail}}"  class="img_adap"></a>
<!-- pianc -->
<img src="{{$pics[7]->thumbnail}}"  class="img_adap">
<!-- work_out -->
<div class="work_out">
  <a href="/wap/work" class="ho_tit_1">
    <img src="/images/wap/ho_tit_3.png">
  </a>
  <span class="bk10">&nbsp;</span>
  <div class="work_img_o clearfix">
    <ul class="clearfix">
      @foreach( $works as $k=>$work )
        @if( $k<2 )
        <li class="li_1 col-xs-6">
          <a href="/wap/work/{{$work->id}}">
            <img src="{{$work->thumbnail}}" alt="">
          </a>
        </li>
        @endif
      @endforeach
        @foreach( $works as $k=>$work )
          @if( $k>1 )
          <li class="li_1 col-xs-4">
            <a href="/wap/work/{{$work->id}}">
              <img src="{{$work->thumbnail}}" alt="">
            </a>
          </li>
          @endif
        @endforeach
    </ul>
  </div>
</div>
<!-- compus_out -->
<span class="bk20">&nbsp;</span>
<div class="compus_out">
  <a href="/wap/compus" class="ho_tit_1">
    <img src="/images/wap/ho_tit_4.png">
  </a>
  <span class="bk10">&nbsp;</span>
  <div class="btn_list clearfix">
    <ul class="clearfix">
      @foreach( session('meili')[0] as $k=>$school )
      <li class="col-xs-4"><a href="/wap/compus/{{$school->id}}">{{$school->title}}</a></li>
      @endforeach
    </ul>
  </div>
  <div class="environ_1 clearfix">
    <div class="clearfix">
      <div class="col-xs-8">
        <a href="/wap/compus" class="img_1"><img src="{{$pics[8]->comtent[0][4]}}"  class="img_adap"></a>
      </div>
      <div class="col-xs-4">
        <a href="/wap/compus" class="img_1"><img src="{{$pics[8]->comtent[0][3]}}"  class="img_adap"></a>
      </div>
    </div>
    <span class="bk10">&nbsp;</span>
    <div class="clearfix">
      <div class="col-xs-4">
        <a href="/wap/compus" class="img_3"><h2>教学环境</h2><p>environment</p></a>
        <span class="bk10">&nbsp;</span>
        <a href="/wap/compus" class="img_1"><img src="{{$pics[8]->comtent[0][2]}}"  class="img_adap"></a>
      </div>
      <div class="col-xs-8">
        <a href="/wap/compus" class="img_4"><img src="{{$pics[8]->comtent[0][1]}}"  class="img_adap"></a>
        <span class="bk10">&nbsp;</span>
        <a href="/wap/compus" class="img_5"><img src="{{$pics[8]->comtent[0][0]}}"  class="img_adap"></a>
      </div>
    </div>
  </div>
</div>
<!-- news_out -->
<span class="bk20">&nbsp;</span>
<div class="news_out">
  <a href="/wap/news" class="ho_tit_1">
    <img src="/images/wap/ho_tit_5.png">
  </a>
  <span class="bk10">&nbsp;</span>
  <ul class="news_o_list clearfix">
    @foreach( $news as $new )
    <li>
      <a href="/wap/news/{{$new->id}}" class="clearfix">
        <div class="col-xs-4 ">
          <span class="pic"><img src="{{$new->thumbnail}}"></span>
        </div>
        <div class="col-xs-8 ">
          <div class="txt">
            <h2>{{$new->title}}</h2>
            <p>{{$new->introduce}}</p>
          </div>
        </div>
      </a>
    </li>
    @endforeach
  </ul>
</div>
<!-- online_out -->
<<div class="clearfix">
  <div class="online_out">
    <img src="/images/wap/ho_tit_6.png"  class="img_adap">
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

</div>
<span class="bk20">&nbsp;</span>
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
<script src="/js/wap/swiper.min.js"></script>
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