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
                    <li><a href="about">品牌介绍</a></li>
                    <li><a href="about">企业文化</a></li>
                    <li><a href="about">发展历程</a></li>
                    <li><a href="about">组织架构</a></li>
                    <li><a href="about">领导致辞</a></li>
                    <li><a href="show">风采展示</a></li>
                </ul>
            </li>
            <li class="nLi">
                <h3><a href="/product">产品中心<span>product</span></a></h3>
                <ul class="sub">
                    <li><a href="product">沙发</a></li>
                    <li><a href="product">酒柜</a></li>
                    <li><a href="product">衣柜</a></li>
                    <li><a href="product">床</a></li>
                    <li><a href="product">桌椅</a></li>
                    <li><a href="product">鞋柜</a></li>
                    <li><a href="product">橱柜</a></li>
                    <li><a href="product">书柜</a></li>
                    <li><a href="product">茶几</a></li>
                    <li><a href="product">电视柜</a></li>
                    <li><a href="product">梳妆台</a></li>
                    <li><a href="product">窗帘</a></li>
                </ul>
            </li>
            <li class="nLi">
                <h3><a href="/case">案例中心<span>case</span></a></h3>
            </li>
            <li class="nLi logo"><a href="index">&nbsp;</a></li>
            <li class="nLi">
                <h3><a href="news">新闻中心<span>news</span></a></h3>
                <ul class="sub">
                    <li><a href="news">公司新闻</a></li>
                    <li><a href="news">行业动态</a></li>
                </ul>
            </li>
            <li class="nLi">
                <h3><a href="/service">服务中心<span>service</span></a></h3>
                <ul class="sub">
                    <li><a href="service">服务流程</a></li>
                    <li><a href="service">承诺保障</a></li>
                    <li><a href="site">安装现场</a></li>
                </ul>
            </li>
            <li class="nLi">
                <h3><a href="/recruit">招贤纳士<span>recruitment</span></a></h3>
            </li>
            <li class="nLi">
                <h3><a href="/contact">联系我们<span>contact</span></a></h3>
                <ul class="sub">
                    <li><a href="/contact">在线留言</a></li>
                    <li><a href="/way">联系方式</a></li>
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

<div class="siteout">
    <span class="bk50">&nbsp;</span>
    <div class="w1160 clearfix">
        <h2 class="ho_tit_all"><a href="site"><img src="images/ho_tit_4.png"></a></h2>
        <span class="bk30">&nbsp;</span>
        <div class="picScroll-leftsite">
            <div class="hd">&nbsp;</div>
            <div class="bd">
                <ul class="picList">
                    <li>
                        <a href="news_in">
                            <span class="pic"><img src="images/cp_5.jpg" alt="" /></span>
                            <div class="top">
                                <h2>保利东滨</h2>
                                <h3>地址：青华路153号</h3>
                                <p class="bot">安装：<em>1户</em></p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="news_in">
                            <span class="pic"><img src="images/cp_6.jpg" alt="" /></span>
                            <div class="top">
                                <h2>保利东滨</h2>
                                <h3>地址：青华路153号</h3>
                                <p class="bot">安装：<em>1户</em></p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="news_in">
                            <span class="pic"><img src="images/cp_7.jpg" alt="" /></span>
                            <div class="top">
                                <h2>保利东滨</h2>
                                <h3>地址：青华路153号</h3>
                                <p class="bot">安装：<em>1户</em></p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="news_in">
                            <span class="pic"><img src="images/cp_8.jpg" alt="" /></span>
                            <div class="top">
                                <h2>保利东滨</h2>
                                <h3>地址：青华路153号</h3>
                                <p class="bot">安装：<em>1户</em></p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="news_in">
                            <span class="pic"><img src="images/cp_9.jpg" alt="" /></span>
                            <div class="top">
                                <h2>保利东滨</h2>
                                <h3>地址：青华路153号</h3>
                                <p class="bot">安装：<em>1户</em></p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="news_in">
                            <span class="pic"><img src="images/cp_10.jpg" alt="" /></span>
                            <div class="top">
                                <h2>保利东滨</h2>
                                <h3>地址：青华路153号</h3>
                                <p class="bot">安装：<em>1户</em></p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".picScroll-leftsite").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:4,trigger:"click"});
        </script>
    </div>
    <span class="bk60">&nbsp;</span>
</div>
<div class="index_list">
    <div class="w1160 clearfix">
        <ul class="list clearfix">
            <li>
                <img src="images/ho_btn_1.png" alt="" />
                <p>免费测量尺寸<br/>送货安装</p>
            </li>
            <li>
                <img src="images/ho_btn_2.png" alt="" />
                <p>一年内保修<br/>终身维护</p>
            </li>
            <li>
                <img src="images/ho_btn_3.png" alt="" />
                <p>全城惠价<br/>联手倾情力荐</p>
            </li>
            <li>
                <img src="images/ho_btn_4.png" alt="" />
                <p>闭口合同一口价<br/>杜绝一切增项</p>
            </li>
            <li>
                <img src="images/ho_btn_5.png" alt="" />
                <p>施工专业规范<br/>质量有保证</p>
            </li>
            <li>
                <img src="images/ho_btn_6.png" alt="" />
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
                <img src="images/ho_call.png" alt="" />
                <p class="one">0817-3631155</p>
            </li>
            <li>
                <img src="images/ho_phone.png" alt="" />
                <p>152-2812-5515<br/>133-4076-5110 </p>
            </li>
            <li>
                <img src="images/ho_qq.png" alt="" />
                <p class="one">2875170198</p>
            </li>
            <li>
                <img src="images/ho_add.png" alt="" />
                <p>潆华工业园区BD-C<br/>南充恩佩瑞机电有限公司内 </p>
            </li>
        </ul>
        <img src="images/cont_img.jpg" alt="" />
        <div class="bot clearfix">
            <span class="ewm fl"><img src="images/erwm.png"></span>
            <ul class="txt fl">
                <li>联系人：赵清春  </li>
                <li>邮箱：2875170198@qq.com  </li>
                <li>电话：152-2812-5515或133-4076-5110</li>
                <li>座机：0817-3631155   </li>
            </ul>
            <ul class="txt fl">
                <li>传真：0817-3631155   </li>
                <li>邮编：637000  </li>
                <li>Q Q：2875170198  </li>
                <li>地址：顺庆区潆华工业园区BD-C南充恩佩瑞机电有限公司内 </li>
            </ul>
        </div>
    </div>
    <div class="rights">
        <div class="w1160 clearfix">
            CopyRight © 2017   顺庆区联手家具经营部 &nbsp;&nbsp;&nbsp;&nbsp;All Rights Reserved.&nbsp;&nbsp;&nbsp;&nbsp;蜀ICP备8888888号&nbsp;&nbsp;&nbsp;&nbsp;技术支持：<a href="">诺航科技</a>
        </div>
    </div>
</div>


<!-- 侧边 -->
<div class="float_onlie">
    <a class="on_1" href="tencent://message/?uin={$qq[1]}&amp;Menu=yes">&nbsp;</a>
    <a class="on_2 ph" href=""><em><img src="images/phone.jpg"></em></a>
    <a class="on_3 add" href=""><em><img src="images/address.jpg"></em></a>
    <a class="on_4 ewm" href=""><em><img src="images/erwm.png"></em></a>
    <a class="on_5" href="" onclick="javascript:scroll(0,0)">&nbsp;</a>
</div>
</body>
</html>