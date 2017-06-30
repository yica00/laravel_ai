<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<!-- saved from url=(0024)http://www.clearedu.net/ -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>{{ session('setting')['web_name']  }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <!-- 适应手机 -->
    <meta name="viewport" content="width=1160px;">
    <link href="/css/base.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/js/jquery.SuperSlide.2.1.1.source.js"></script>

    <!--[if lt IE 9]><!-->
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>
    <!--[endif]-->
    <!-- 先后 -->
</head>
<body>
<!-- nav -->
<div class="nav_box">
    <div class="w1160 clearfix">
        <ul id="nav" class="nav clearfix">
            <li class="nLi on">
                <h3><a href="/">网站首页<span>home</span></a></h3>
            </li>
            <li class="nLi">
                <h3><a href="/about">关于联手<span>about</span></a></h3>
                <ul class="sub">
                    @foreach( session('header_nav')[2]->sons as $leader1 )
                        <li><a href="{{ $leader1->link  }}"> {{  mb_substr($leader1->title,2,20,'utf8' ) }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="nLi">
                <h3><a href="/product">产品中心<span>product</span></a></h3>
                <ul class="sub">
                    @foreach( session('header_nav')[3]->sons as $leader1 )
                        <li><a href="/product/category/{{ $leader1->id  }}"> {{  mb_substr($leader1->title,2,20,'utf8' ) }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="nLi">
                <h3><a href="/case">案例中心<span>case</span></a></h3>
            </li>
            <li class="nLi logo"><a href="/">&nbsp;</a></li>
            <li class="nLi">
                <h3><a href="news">新闻中心<span>news</span></a></h3>
                <ul class="sub">
                    @foreach( session('header_nav')[5]->sons as $leader1 )
                        <li><a href="{{ $leader1->link }}"> {{  mb_substr($leader1->title,2,20,'utf8' ) }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="nLi">
                <h3><a href="/service">服务中心<span>service</span></a></h3>
                <ul class="sub">
                    @foreach( session('header_nav')[6]->sons as $leader1 )
                        <li><a href="{{ $leader1->link }}"> {{  mb_substr($leader1->title,2,20,'utf8' ) }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="nLi">
                <h3><a href="/recruit">招贤纳士<span>recruitment</span></a></h3>
            </li>
            <li class="nLi">
                <h3><a href="/contact">联系我们<span>contact</span></a></h3>
                <ul class="sub">
                    @foreach( session('header_nav')[8]->sons as $leader1 )
                        <li><a href="{{ $leader1->link }}"> {{  mb_substr($leader1->title,2,20,'utf8' ) }}</a></li>
                    @endforeach
                </ul>
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
</div>

@yield('content')

<div class="index_list">
    <div class="w1160 clearfix">
        <ul class="list clearfix">
            <li>
                <img src="/images/ho_btn_1.png" alt="" />
                <p>免费测量尺寸<br/>送货安装</p>
            </li>
            <li>
                <img src="/images/ho_btn_2.png" alt="" />
                <p>一年内保修<br/>终身维护</p>
            </li>
            <li>
                <img src="/images/ho_btn_3.png" alt="" />
                <p>全城惠价<br/>联手倾情力荐</p>
            </li>
            <li>
                <img src="/images/ho_btn_4.png" alt="" />
                <p>闭口合同一口价<br/>杜绝一切增项</p>
            </li>
            <li>
                <img src="/images/ho_btn_5.png" alt="" />
                <p>施工专业规范<br/>质量有保证</p>
            </li>
            <li>
                <img src="/images/ho_btn_6.png" alt="" />
                <p>大事小事全权负责<br/>问题处理及时</p>
            </li>
        </ul>
    </div>
    <span class="bk30">&nbsp;</span>
</div>
<div class="footer">
    <div class="w1160 clearfix">
        <ul class="top clearfix">
            <li>
                <img src="/images/ho_call.png" alt="" />
                <p class="one">0817-3631155</p>
            </li>
            <li>
                <img src="/images/ho_phone.png" alt="" />
                <p>152-2812-5515<br/>133-4076-5110 </p>
            </li>
            <li>
                <img src="/images/ho_qq.png" alt="" />
                <p class="one">2875170198</p>
            </li>
            <li>
                <img src="/images/ho_add.png" alt="" />
                <p>潆华工业园区BD-C<br/>南充恩佩瑞机电有限公司内 </p>
            </li>
        </ul>
        <img src="/images/cont_img.jpg" alt="" />
        <div class="bot clearfix">
            <span class="ewm fl"><img src="/images/erwm.png"></span>
            <ul class="txt fl">
                <li>联系人：{{ session('setting')['contact_name']  }}</li>
                <li>邮箱：{{ session('setting')['email']  }}</li>
                <li>电话：{{ session('setting')['contacts']  }}</li>
                <li>座机：{{ session('setting')['fix_phone']  }}</li>
            </ul>
            <ul class="txt fl">
                <li>传真：{{ session('setting')['fix_phone']  }}</li>
                <li>邮编：637000  </li>
                <li>Q Q：{{ session('setting')['qq']  }}</li>
                <li>地址：{{ session('setting')['bases']  }}</li>
            </ul>
        </div>
    </div>
    <div class="rights">
        <div class="w1160 clearfix">
            CopyRight © 2017   {{ session('setting')['web_name']  }} &nbsp;&nbsp;&nbsp;&nbsp;All Rights Reserved.&nbsp;&nbsp;&nbsp;&nbsp;蜀ICP备8888888号&nbsp;&nbsp;&nbsp;&nbsp;技术支持：<a href="">诺航科技</a>
        </div>
    </div>
</div>


<!-- 侧边 -->
<div class="float_onlie">
    <a class="on_1" href="tencent://message/?uin={{ session('setting')['qq']  }}&amp;Menu=yes">&nbsp;</a>
    <a class="on_2 ph" href=""><em><img src="/images/phone.jpg"></em></a>
    <a class="on_3 add" href=""><em><img src="/images/address.jpg"></em></a>
    <a class="on_4 ewm" href=""><em><img src="/images/erwm.png"></em></a>
    <a class="on_5" href="" onclick="javascript:scroll(0,0)">&nbsp;</a>
</div>
</body>
</html>