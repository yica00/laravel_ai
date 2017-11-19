<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>{{ session('setting')['web_name']  }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--<meta name="viewport" content="width=device-width,initial-scale=1,">--}}
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="{{ session('setting')['description']  }}">
    <meta name="keywords" content="{{ session('setting')['keywords']  }}">
    <!-- base -->

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
@yield('head')
<div class="cd-bouncy-nav-modal">
    <nav>
        <ul class="cd-bouncy-nav">
            <li><a href="/wap">首页</a></li>
            <li><a href="/wap/item">项目</a></li>
            <li><a href="/wap/case">案例</a></li>
            <li><a href="/wap/team">专家</a></li>
            <li><a href="/wap/equip">设备</a></li>
            <li><a href="/wap/news">动态</a></li>
            <li><a href="/wap/brand">品牌</a></li>
            <li><a href="/wap/contact">联系</a></li>
        </ul>
    </nav>
    <a href="#0" class="cd-close">关闭</a>
</div>

@yield('content')

<!-- footer -->
<div class="appoint_out" id="apply_on">
    <span class="bk60">&nbsp;</span>
    <div class="ho_tit_all">
        <a href="#apply_on">
            <h2>预/约/通/道</h2>
        </a>
    </div>
    <span class="bk40">&nbsp;</span>
    <form class="on_form_2" action="/front/message" method="post" id="order">
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
        <p><input type="date" value="" name="time"  class="input" placeholder="请输入您要预约的时间"></p>
        <p>
            <select id="" name="item">
                <option value="0" selected="selected">请选预约项目</option>
                @foreach( session('header_nav') as $ks=>$navs )
                    @if( $ks == 2 )
                        @foreach( $navs->articles as $ar )
                            <option value="{{$ar->title}}">{{$ar->title}}</option>
                        @endforeach\
                    @endif
                @endforeach
            </select>
        </p>
        <p><textarea name="content" class="textarea" id="" value="" placeholder="如何您还有其他问题，可以在这里给我们留言"></textarea></p>
        <p class="submit_but"><button type="submit">点击这里提交预约</button></p>
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
<!-- 4 -->
<span class="bk40">&nbsp;</span>
<div class="ho_btn_call">
    <span><img src="/images/wap/btn_call.svg"></span>美丽热线：{{ session('setting')['fix_phone']  }}
</div>
<span class="bk40">&nbsp;</span>
<!-- footer -->
<div class="footer">
    <span class="bk40">&nbsp;</span>
    <div class="swiper-container-4">
        <div class="swiper-wrapper">
            @foreach( session('header_nav2') as $ks=>$navs )
            <div class="swiper-slide">
                <a href="/wap/item/category/{{$navs->id}}">
                    <span class="pic"><img src="{{$navs->comtent[0][1]}}"></span>
                    <h2>{{$navs->title}}</h2>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <span class="bk50">&nbsp;</span>
    <div class="ewm">
        <img src="{{ session('setting')['wx_map']  }}">
        <p>扫描二维码关注我们</p>
    </div>
    <span class="bk20">&nbsp;</span>
    <h2 class="call"><span><img src="/images/wap/hot_btn.png"></span>{{ session('setting')['fix_phone']  }}</h2>
    <span class="bk20">&nbsp;</span>
    <div class="bot">
        <p>来院地址：{{ session('setting')['bases']  }}</p>
        <p>版权所有 © 依美医疗美容机构 Copyright Yimei All Rights Reserved </p>
        <p>技术支持 ：<a href="http://www.scnuohang.com/" target="_blank">诺航科技</a></p>
    </div>
</div>
<span class="bk80">&nbsp;</span>
<div class="fixed_order"><a href="#apply_on">免费预约依美整形美容&gt;&gt;</a></div>

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
        pagination: '.swiper-pagination-2',
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
<!-- 4 -->
<script>
    var swiper = new Swiper('.swiper-container-4', {
        pagination: '.swiper-pagination-4',
        slidesPerView: 4,
        paginationClickable: true,
        spaceBetween:10,
    });
</script>
</body>
</html>