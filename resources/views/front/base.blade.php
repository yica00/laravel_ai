<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<!-- saved from url=(0024)http://www.clearedu.net/ -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>{{ session('setting')['web_name']  }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="{{ session('setting')['keywords']  }}">
    <meta name="description" content="{{ session('setting')['description']  }}">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <!-- 适应手机 -->
    <meta name="viewport" content="width=1160px;">
    <link href="/css/base.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/js/jquery.SuperSlide.2.1.1.source.js"></script>

    <!--[if IE]>
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->
    <!-- 焦点图 -->
    <script type="text/javascript" src="/js/jquery.DB_tabMotionBanner.min.js"></script>
</head>
<body>
<div class="parallax-image-wrapper" data-anchor-target=".skillout + .gap" data-bottom-top="transform:translateY(200%)" data-top-bottom="transform:translateY(0)">
    <div class="parallax-image" style="background:url(images/palmtrees.jpg)" data-anchor-target=".skillout + .gap" data-bottom-top="transform: translateY(-80%);" data-top-bottom="transform: translateY(80%);">
    </div>
</div>
<div class="parallax-image-wrapper" data-anchor-target=".teamout + .gap" data-bottom-top="transform:translateY(200%)" data-top-bottom="transform:translateY(0)">
    <div class="parallax-image" style="background-image:url(images/bay.jpg)" data-anchor-target=".teamout + .gap" data-bottom-top="transform: translateY(-80%);" data-top-bottom="transform: translateY(80%);"></div>
</div>
<div id="skrollr-body">
    <!-- header -->
    <div class="header">
        <div class="w1160 clearfix">
            <div class="hd_btn fr">
                <div class="clearfix">
                    <div class="btn_4 fr mL20">
                        <a href="#"  class="tc"><img src="/images/ho_ch_1.png" alt=""></a>
                    </div>
                    <div id="gray">&nbsp;</div>
                    <div class="popup" id="popup">
                        <div class="top_nav" id='top_nav'>
                            <div align="center">免费策划<a class="guanbi"></a></div>
                        </div>
                        <div class="min">
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
                            <form method="POST" name="form_login" target="_top" class="tc_login" action="/front/message">
                                {{ csrf_field() }}
                                <p class="p1 clearfix"><span>联系人姓名</span><input type="text" name="name" id="name" required="required" placeholder="请填写真实姓名" autocomplete="off" ></p>
                                <p class="p1 clearfix"><span>联系人手机</span><input type="text" name="phone" id="call" required="required" placeholder="请填写真实手机" autocomplete="off" ></p>
                                <p class="p1 clearfix"><span>公司所在地</span><select id="s_province" name="s_province" class="mR10"></select>  <select id="s_city" name="s_city" ></select> </p>
                                <script class="resources library" src="/js/area.js" type="text/javascript"></script>
                                <script type="text/javascript">_init_area();</script>
                                <script type="text/javascript">

                                    var Gid  = document.getElementById ;

                                    var showArea = function(){

                                        Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +

                                            Gid('s_city').value + " - 县/区" +

                                            Gid('s_county').value + "</h3>"

                                    }

                                    Gid('s_county').setAttribute('onchange','showArea()');

                                </script>
                                <p class="p1 clearfix"><span>公司名称</span><input type="text" name="company" id="add" required="required" placeholder="" autocomplete="off" ></p>
                                <p class="p1 clearfix"><span>座机</span><input type="text" name="fix_phone" id="ph" required="required" placeholder="" autocomplete="off" ></p>
                                <div  class="btnch">
                                    <input type="submit" class="button" title="Sign In" value="立即策划">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--  -->
                    <div class="btn btn_3 fr mL20">
                        <img src="/images/ho_wx_1.png" alt="" class="d_1"><img src="/images/ho_wx_2.png" class="d_2"><img src="{{ session('setting')['wx_map']  }}" class="d_3">
                    </div>
                    <a href="tencent://message/?uin={{ session('setting')['qq']  }}&amp;Menu=yes" class="btn fr  mL20">
                        <img src="/images/ho_qq_1.png" alt="" class="d_1"><img src="/images/ho_qq_2.png" class="d_2">
                    </a>
                    <div class="btn fr mL20">
                        <img src="/images/ho_tel_1.png" alt="" class="d_1"><img src="/images/ho_tel_2.png" alt="" class="d_2">
                    </div>
                </div>
            </div>
            <div class="nav_box fr">
                <ul id="nav" class="nav clearfix">
                    <li class="nLi  @if( $nav == 1 ) on @endif">
                        <h3><a href="/">首页<span>home</span></a></h3>
                    </li>
                    <li class="nLi @if( $nav == 2 ) on @endif">
                        <h3><a href="/about">关于<span>about</span></a></h3>
                        <ul class="sub">
                            @foreach( session('header_nav')[2]->sons as $leader1 )
                                <li><a href="{{ $leader1->link  }}"> {{  mb_substr($leader1->title,2,20,'utf8' ) }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nLi  @if( $nav == 3 ) on @endif">
                        <h3><a href="/technology">技术<span>technology</span></a></h3>
                        <ul class="sub">
                            @foreach( session('header_nav')[3]->sons as $leader1 )
                                <li><a href="{{ $leader1->link  }}"> {{  mb_substr($leader1->title,2,20,'utf8' ) }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nLi  @if( $nav == 4 ) on @endif">
                        <h3><a href="/case">案例<span>case</span></a></h3>
                    </li>
                    <li class="nLi  @if( $nav == 5 ) on @endif">
                        <h3><a href="/news" >新闻<span>news</span></a></h3>
                        <ul class="sub">
                            @foreach( session('header_nav')[5]->sons as $leader1 )
                                <li><a href="{{ $leader1->link  }}"> {{  mb_substr($leader1->title,2,20,'utf8' ) }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nLi  @if( $nav == 6 ) on @endif">
                        <h3><a href="/contact">联系<span>contact</span></a></h3>
                    </li>
                </ul>
                <script id="jsID" type="text/javascript">
                    jQuery("#nav").slide({
                        type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
                        titCell:".nLi", //鼠标触发对象
                        targetCell:".sub", //titCell里面包含的要显示/消失的对象
                        effect:"slideDown", //targetCell下拉效果
                        delayTime:300 , //效果时间
                        triggerTime:0, //鼠标延迟触发时间（默认150）
                        returnDefault:true //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
                    });
                </script>
            </div>
            <a href="/" class="logo fl">&nbsp;</a>
        </div>
    </div>
    <span class="bk80">&nbsp;</span>

@yield('content')

    <div class="contactout">
        <div class="w960 clearfix">
            <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
            <div class="map"><div style="width:480px;height:180px;" id="dituContent">&nbsp;</div></div>
        </div>
    </div>
    <!-- footer -->
    <div class="footer">
        <span class="bk30">&nbsp;</span>
        <div class="w1160 clearfix">
            <div class="ewm fr">
                <img src="{{ session('setting')['wx_map']  }}">
                <p>扫一扫，关注我们</p>
            </div>
            <div class="txt fl">
                <p class=" clearfix"><img src="/images/fot_1.png" class="imggocircle"><a href="tencent://message/?uin={{ session('setting')['qq']  }}&amp;Menu=yes">业务咨询：{{ session('setting')['qq']  }}【点击咨询】</a> <a href="tencent://message/?uin={{ session('setting')['qq']  }}&amp;Menu=yes">技术服务：{{ session('setting')['qq']  }}【点击咨询】</a></p>
                <p class=" clearfix"><img src="/images/fot_2.png" class="imggocircle">服务热线：{{ session('setting')['phone']  }}</p>
                <p class=" clearfix"><img src="/images/fot_3.png" class="imggocircle">邮箱：{{ session('setting')['email']  }}</p>
                <p class=" clearfix"><img src="/images/fot_4.png" class="imggocircle">公司地址：{{ session('setting')['bases']  }}</p>
            </div>
        </div>
        <span class="bk30">&nbsp;</span>
        <div class="bot">
            <div class="w1160 clearfix">
                <div class="fot_link_bg">&nbsp;</div>
                <div class="link clearfix">
                    <span class="fl mR10">友情链接 </span>
                    <div class="fl">
                        @foreach( session('links') as $link )
                        <a href="{{ $link->link }}" target="_blank">{{$link->title}}</a>
                        @endforeach
                    </div>
                </div>
                <div class="copy">CopyRight ◎ 2017 {{ session('setting')['web_name']  }} All Right Reserved&nbsp;&nbsp;&nbsp;&nbsp;蜀ICP备12345678号</div>
            </div>
        </div>
    </div>
    <!-- 侧边 -->
    <div class="float_onlie">
        <a class="on_1" href="tencent://message/?uin={{ session('setting')['qq']  }}&amp;Menu=yes">&nbsp;</a>
        <a class="on_2 ph" href=""><em><img src="/images/phone.jpg"></em></a>
        <a class="on_3 add" href=""><em><img src="/images/address.jpg"></em></a>
        <a class="on_4 ewm" href=""><em><img src="{{ session('setting')['wx_map']  }}"></em></a>
        <a class="on_5" href="" onclick="javascript:scroll(0,0)">&nbsp;</a>
    </div>
</div>
<script type="text/javascript" src="/js/skrollr.min.js"></script>
<script>skrollr.init();</script>
<!--  -->
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
    }

    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(106.117375,30.843297);//定义一个中心点坐标
        map.centerAndZoom(point,13);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }

    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }

    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
        var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
        map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
        var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
        map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
        var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
        map.addControl(ctrl_sca);
    }


    initMap();//创建和初始化地图
</script>
<!--  -->
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
</body>
</html>