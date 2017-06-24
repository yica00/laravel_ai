<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<!-- saved from url=(0024)http://www.clearedu.net/ -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>四川诺航科技有限公司</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <!-- 适应手机 -->
    <meta name="viewport" content="width=1160px;">
    <link href="css/base.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.source.js"></script>

    <!--[if IE]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <!-- 焦点图 -->
    <script type="text/javascript" src="js/jquery.DB_tabMotionBanner.min.js"></script>
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
                        <a href="#"  class="tc"><img src="images/ho_ch_1.png" alt=""></a>
                    </div>
                    <div id="gray">&nbsp;</div>
                    <div class="popup" id="popup">
                        <div class="top_nav" id='top_nav'>
                            <div align="center">免费策划<a class="guanbi"></a></div>
                        </div>
                        <div class="min">
                            <form method="POST" name="form_login" target="_top" class="tc_login">
                                <p class="p1 clearfix"><span>联系人姓名</span><input type="text" name="name" id="name" required="required" placeholder="请填写真实姓名" autocomplete="off" ></p>
                                <p class="p1 clearfix"><span>联系人手机</span><input type="text" name="call" id="call" required="required" placeholder="请填写真实手机" autocomplete="off" ></p>
                                <p class="p1 clearfix"><span>公司所在地</span><select id="s_province" name="s_province" class="mR10"></select>  <select id="s_city" name="s_city" ></select> </p>
                                <script class="resources library" src="js/area.js" type="text/javascript"></script>
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
                                <p class="p1 clearfix"><span>公司名称</span><input type="text" name="add" id="add" required="required" placeholder="" autocomplete="off" ></p>
                                <p class="p1 clearfix"><span>座机</span><input type="text" name="ph" id="ph" required="required" placeholder="" autocomplete="off" ></p>
                                <div  class="btnch">
                                    <input type="submit" class="button" title="Sign In" value="立即策划">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--  -->
                    <div class="btn btn_3 fr mL20">
                        <img src="images/ho_wx_1.png" alt="" class="d_1"><img src="images/ho_wx_2.png" class="d_2"><img src="images/ho_wx_3.png" class="d_3">
                    </div>
                    <a href="tencent://message/?uin={$qq[1]}&amp;Menu=yes" class="btn fr  mL20">
                        <img src="images/ho_qq_1.png" alt="" class="d_1"><img src="images/ho_qq_2.png" class="d_2">
                    </a>
                    <div class="btn fr mL20">
                        <img src="images/ho_tel_1.png" alt="" class="d_1"><img src="images/ho_tel_2.png" alt="" class="d_2">
                    </div>
                </div>
            </div>
            <div class="nav_box fr">
                <ul id="nav" class="nav clearfix">
                    <li class="nLi on">
                        <h3><a href="index.html">首页<span>home</span></a></h3>
                    </li>
                    <li class="nLi">
                        <h3><a href="about.html">关于<span>about</span></a></h3>
                        <ul class="sub">
                            <li><a href="about.html#abt_company">公司简介</a></li>
                            <li><a href="about.html#abt_culture">企业文化</a></li>
                            <li><a href="about.html#abt_team">诺航团队</a></li>
                            <li><a href="about.html#abt_partner">合作伙伴</a></li>
                        </ul>
                    </li>
                    <li class="nLi">
                        <h3><a href="technology.html">技术<span>technology</span></a></h3>
                        <ul class="sub">
                            <li><a href="technology.html">定制建站</a></li>
                            <li><a href="technology.html">移动端开发</a></li>
                            <li><a href="technology.html">网络整合营销</a></li>
                            <li><a href="technology.html">网络基础服务</a></li>
                        </ul>
                    </li>
                    <li class="nLi">
                        <h3><a href="case.html">案例<span>case</span></a></h3>
                    </li>
                    <li class="nLi">
                        <h3><a href="news.html">新闻<span>news</span</a></h3>
                        <ul class="sub">
                            <li><a href="news.html">公司资讯</a></li>
                            <li><a href="news.html">行业媒体</a></li>
                        </ul>
                    </li>
                    <li class="nLi">
                        <h3><a href="contact.html">联系<span>contact</span</a></h3>
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
            <a href="index.html" class="logo fl">&nbsp;</a>
        </div>
    </div>
    <span class="bk80">&nbsp;</span>
    <!-- banner -->
    <div class="banner_box">
        <div class="DB_tab25">
            <ul class="DB_bgSet">
                {{--<li style="background:url(images/bn_1_bg.jpg);"></li>--}}
                {{--<li style="background:url(images/bn_2_bg.jpg);"></li>--}}
                {{--<li style="background:url(images/bn_3_bg.jpg);"></li>--}}

                <li style="background:url( {{ $seting['img1'] }} );"></li>
                <li style="background:url({{ $seting['img2'] }});"></li>
                <li style="background:url({{ $seting['img3'] }});"></li>

            </ul>
            <ul class="DB_imgSet">
                <li onclick="javascript:window.location.href='#';">
                    <img class="DB_1_1" src="images/stuimg1_1.png" alt="" />
                    <img class="DB_1_2" src="images/stuimg1_2.png" alt="" />
                    <img class="DB_1_3" src="images/stuimg1_3.png" alt="" />
                </li>
                <li onclick="javascript:window.location.href='#';">
                    <img class="DB_2_1" src="images/stuimg2_1.png" alt="" />
                    <img class="DB_2_2" src="images/stuimg2_2.png" alt="" />
                    <img class="DB_2_3" src="images/stuimg2_3.png" alt="" />
                </li>
                <li onclick="javascript:window.location.href='#';">
                    <img class="DB_3_1" src="images/stuimg3_1.png" alt="" />
                    <img class="DB_3_2" src="images/stuimg3_2.png" alt="" />
                    <img class="DB_3_3" src="images/stuimg3_3.png" alt="" />
                </li>
            </ul>
            <div class="DB_menuWrap">
                <div class="DB_next">
                    <img src="images/nextArrow.png" alt="NEXT" />
                </div>
                <div class="DB_prev">
                    <img src="images/prevArrow.png" alt="PREV" />
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('.DB_tab25').DB_tabMotionBanner({
            key: 'b28551',
            autoRollingTime: 6000,
            bgSpeed: 500,
            motion: {
                DB_1_1: { left: -50, opacity: 0, speed: 1000, delay: 500 },
                DB_1_2: { left: -50, opacity: 0, speed: 1000, delay: 1000 },
                DB_1_3: { left: 100, opacity: 0, speed: 1000, delay: 1500 },
                DB_2_1: { top: 50, opacity: 0, speed: 1000, delay: 500 },
                DB_2_2: { top: 50, opacity: 0, speed: 1000, delay: 1000 },
                DB_2_3: { top: 100, opacity: 0, speed: 1000, delay: 1500 },
                DB_3_1: { left: -50, opacity: 0, speed: 1000, delay: 500 },
                DB_3_2: { top: 50, opacity: 0, speed: 1000, delay: 1000 },
                DB_3_3: { top: 0, opacity: 0, speed: 1000, delay: 1500 },
                end: null
            }
        })
    </script>
    <!-- skillout -->
    <div class="skillout">
        <div class="w1160 clearfix">
            <span class="bk60">&nbsp;</span>
            <div class="ho_tit_all">
                <p>One-stop enterprise Internet planners</p>
                <h2>一站式企业互联网策划商</h2>
                <h3>建站、营销、电商、协同、管理，专业产品助您轻松实现智能运营</h3>
            </div>
            <span class="bk30">&nbsp;</span>
            <ul class="list clearfix">
                <li class="li_1" data-400-center-top="transform: scale(0.8); opacity: 0" data-400-center-center="transform: scale(1); opacity: 1">
                    <a href="technology.html">
                        <span class="icon"><img src="images/ho_skill_1.png"></span>
                        <div class="bot">
                            <h2>定制建站</h2>
                            <p class="nr">诺航网络设计师团队为您量身<br/>定制企业官网，让视觉力量助力企业的<br/>影响力</p>
                            <p class="xl"><span>企业网站定制</span><span>平台网站定制</span><span>商城网站定制</span><span>软件开发</span></p>
                        </div>
                    </a>
                </li>
                <li class="li_2" data-300-center-top="transform: scale(0.8); opacity: 0" data-300-center-center="transform: scale(1); opacity: 1">
                    <a href="technology.html">
                        <span class="icon"><img src="images/ho_skill_2.png"></span>
                        <div class="bot">
                            <h2>移动端开发</h2>
                            <p class="nr">拥抱移动互联网，开发移动端应用，<br/>将用户和企业进行移动连接</p>
                            <p class="xl"><span>手机网站建设</span><span>微信官网建设</span><span>APP定制开发</span><span>小程序开发</span></p>
                        </div>
                    </a>
                </li>
                <li class="li_3" data-200-center-top="transform: scale(0.8); opacity: 0" data-200-center-center="transform: scale(1); opacity: 1">
                    <a href="technology.html">
                        <span class="icon"><img src="images/ho_skill_3.png"></span>
                        <div class="bot">
                            <h2>网络整合营销</h2>
                            <p class="nr">锁定企业的目标客户群体，对其<br/>进行前期的数据分析，整合更直接有效的<br/>网络推广方式</p>
                            <p class="xl"><span>微信代运营</span><span>搜索引擎SEO</span><span>网络公关</span><span>口碑营销策划</span></p>
                        </div>
                    </a>
                </li>
                <li class="li_4" data-100-center-top="transform: scale(0.8); opacity: 0" data-100-center-center="transform: scale(1); opacity: 1">
                    <a href="technology.html">
                        <span class="icon"><img src="images/ho_skill_4.png"></span>
                        <div class="bot">
                            <h2>网络基础服务</h2>
                            <p class="nr">帮助客户选择适配域名，开通快速、<br/>安全的网络空间以及网站<br/>日常维护</p>
                            <p class="xl"><span>域名注册</span><span>后台培训</span><span>日常维护</span><span>网站空间</span></p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="gap" style="background:url(images/palmtrees.jpg); "></div>
    <!-- caseout -->
    <div class="caseout">
        <span class="bk80">&nbsp;</span>
        <ul class="list clearfix">
            <!--  data-150-bottom-center="transform: rotateY(-90deg); opacity: 0" data-150-center-center="transform: rotate(0); opacity: 1" class="skrollable skrollable-between" -->
            <li><a href="case_in.html"><img src="images/case_1.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
            <li><a href="case_in.html"><img src="images/case_2.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
            <li><a href="case_in.html"><img src="images/case_3.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
            <li><a href="case_in.html"><img src="images/case_4.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
            <li><a href="case_in.html"><img src="images/case_5.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
            <li><a href="case_in.html"><img src="images/case_6.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
            <li><a href="case_in.html"><img src="images/case_7.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
            <li><a href="case_in.html"><img src="images/case_8.jpg" alt="" /><span>林芝华庭房地产<br><img src="images/link.png" class="link"></span></a></li>
        </ul>
    </div>
    <!-- teamout -->
    <div class="teamout">
        <div class="w1160 clearfix">
            <span class="bk60">&nbsp;</span>
            <div class="ho_tit_all">
                <p>Northeast sichuan famous Internet planning</p>
                <h2>川东北地区知名互联网策划商</h2>
                <h3>创独一无二的设计，造国际品质的工程，行无微不至的服务</h3>
            </div>
            <span class="bk30">&nbsp;</span>
            <div class="txt">诺航科技有限公司成立于<span>2017年5月</span>，专注于企业电子商务的深入服务，并与纵多国内知名网络服务商形成紧密合作，<br/>截至目前，我们为知名企业定制<span>个性化互联网营策划方案</span>，企业品牌营销得到了显著的提升。<br/>我们公司的定位：“<span>专业的企业互联网策划商</span>”，我们的经营理念：“<span>客户的成功才是我们的成功</span>”。<br/>我们在不断适应和挖掘企业的商务需求，在稳定老市场和老客户的基础上，不断发展，形成多元化的<span>业务运作体系</span>。
            </div>
            <span class="bk60">&nbsp;</span>
            <!-- 相册 -->
            <div id="slideRealBox" class="slideRealBox">
                <div class="picScroll-leftdiy hd">
                    <div class="inhd clearfix">
                        <a class="prev" href="javascript:void(0)"></a>
                        <a class="next" href="javascript:void(0)"></a>
                    </div>
                    <div class="inbd">
                        <ul class="picList">
                            <li  data-100-bottom-center="transform: rotate(-90deg); opacity: 0" data-100-center-center="transform: rotate(0); opacity: 1"><img src="images/cp_1.jpg"/></li>
                            <li  data-100-bottom-center="transform: rotate(-90deg); opacity: 0" data-100-center-center="transform: rotate(0); opacity: 1"><img src="images/cp_2.jpg"/></li>
                            <li  data-100-bottom-center="transform: rotate(-90deg); opacity: 0" data-100-center-center="transform: rotate(0); opacity: 1"><img src="images/cp_3.jpg"/></li>
                            <li  data-100-bottom-center="transform: rotate(-90deg); opacity: 0" data-100-center-center="transform: rotate(0); opacity: 1"><img src="images/cp_4.jpg"/></li>
                            <li  data-100-bottom-center="transform: rotate(-90deg); opacity: 0" data-100-center-center="transform: rotate(0); opacity: 1"><img src="images/cp_5.jpg"/></li>
                        </ul>
                    </div>
                </div>
                <!-- 大图 -->
                <div class="bd" data-100-bottom-top="transform: translateY(200px); opacity: 0" data-center-top="transform: translateY(0px); opacity: 1" style="transform: translateY(0px); opacity: 1;">
                    <!-- data-100-bottom-center="transform: rotateY(-90deg); opacity: 0" data-100-center-center="transform: rotate(0); opacity: 1" -->
                    <ul>
                        <li class="clearfix">
                            <img src="images/cp_1.jpg" class="pic fl">
                            <div class="intxt fr">
                                <img src="images/name_gzl.png">
                                <div class="t1">
                                    <h2>项目经验</h2>
                                    <p><a href="case_in.html">大蓉和</a><a href="case_in.html">快乐宝贝</a><a href="case_in.html">大融城</a><a href="case_in.html">名典</a></p>
                                </div>
                                <span class="bk20">&nbsp;</span>
                                <div class="t1">
                                    <h2>个人简介</h2>
                                    <p>这里是个人简介，这里是个人简介，这里是个人简介，这里是个人这里是个人简介，这里是个人简介，这里是个人简介，这里是个人这里是个人简介简介简介</p>
                                </div>
                            </div>
                            <span class="year">总经理<br/>5年</span>
                        </li>
                        <li class="clearfix">
                            <img src="images/cp_2.jpg" class="pic fl">
                            <div class="intxt fr">
                                <img src="images/name_gzl.png">
                                <div class="t1">
                                    <h2>项目经验</h2>
                                    <p><a href="case_in.html">大蓉和</a><a href="case_in.html">快乐宝贝</a><a href="case_in.html">大融城</a><a href="case_in.html">名典</a></p>
                                </div>
                                <span class="bk20">&nbsp;</span>
                                <div class="t1">
                                    <h2>个人简介</h2>
                                    <p>这里是个人简介，这里是个人简介，这里是个人简介，这里是个人这里是个人简介，这里是个人简介，这里是个人简介，这里是个人这里是个人简介简介简介</p>
                                </div>
                            </div>
                            <span class="year">总经理<br/>5年</span>
                        </li>
                        <li class="clearfix">
                            <img src="images/cp_3.jpg" class="pic fl">
                            <div class="intxt fr">
                                <img src="images/name_gzl.png">
                                <div class="t1">
                                    <h2>项目经验</h2>
                                    <p><a href="case_in.html">大蓉和</a><a href="case_in.html">快乐宝贝</a><a href="case_in.html">大融城</a><a href="case_in.html">名典</a></p>
                                </div>
                                <span class="bk20">&nbsp;</span>
                                <div class="t1">
                                    <h2>个人简介</h2>
                                    <p>这里是个人简介，这里是个人简介，这里是个人简介，这里是个人这里是个人简介，这里是个人简介，这里是个人简介，这里是个人这里是个人简介简介简介</p>
                                </div>
                            </div>
                            <span class="year">总经理<br/>5年</span>
                        </li>
                        <li class="clearfix">
                            <img src="images/cp_4.jpg" class="pic fl">
                            <div class="intxt fr">
                                <img src="images/name_gzl.png">
                                <div class="t1">
                                    <h2>项目经验</h2>
                                    <p><a href="case_in.html">大蓉和</a><a href="case_in.html">快乐宝贝</a><a href="case_in.html">大融城</a><a href="case_in.html">名典</a></p>
                                </div>
                                <span class="bk20">&nbsp;</span>
                                <div class="t1">
                                    <h2>个人简介</h2>
                                    <p>这里是个人简介，这里是个人简介，这里是个人简介，这里是个人这里是个人简介，这里是个人简介，这里是个人简介，这里是个人这里是个人简介简介简介</p>
                                </div>
                            </div>
                            <span class="year">总经理<br/>5年</span>
                        </li>
                        <li class="clearfix">
                            <img src="images/cp_5.jpg" class="pic fl">
                            <div class="intxt fr">
                                <img src="images/name_gzl.png">
                                <div class="t1">
                                    <h2>项目经验</h2>
                                    <p><a href="case_in.html">大蓉和</a><a href="case_in.html">快乐宝贝</a><a href="case_in.html">大融城</a><a href="case_in.html">名典</a></p>
                                </div>
                                <span class="bk20">&nbsp;</span>
                                <div class="t1">
                                    <h2>个人简介</h2>
                                    <p>这里是个人简介，这里是个人简介，这里是个人简介，这里是个人这里是个人简介，这里是个人简介，这里是个人简介，这里是个人这里是个人简介简介简介</p>
                                </div>
                            </div>
                            <span class="year">总经理<br/>5年</span>
                        </li>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">jQuery(".picScroll-leftdiy").slide({titCell:".inhd ul",mainCell:".inbd ul",autoPage:false,effect:"left",vis:4,trigger:"click"});
            </script>
            <script type="text/javascript">jQuery(".slideRealBox").slide({mainCell:".bd ul",autoPlay:false});</script>
        </div>
    </div>
    <div class="gap" style="background-image:url(images/bay.jpg); "></div>
    <span class="bk60">&nbsp;</span>
    <!-- processout -->
    <div class="processout">
        <div class="w1160 clearfix">
            <span class="bk30">&nbsp;</span>
            <div class="ho_tit_all">
                <p>Site delivery process</p>
                <h2>项目交付流程</h2>
                <h3>优化业务流程、提高工作效率，快速、高质量交付项目，提供超预期的服务</h3>
            </div>
            <span class="bk50">&nbsp;</span>
            <ul class="list clearfix">
                <li  data-100-bottom-top="transform: translateX(-400px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1" >
                    <img src="images/pro_1.png" alt="" class="imggocircle">
                    <h2>需求沟通</h2>
                    <p>倾听客户需求，提供专业建议，确定设计风格</p>
                </li>
                <li  data-100-bottom-top="transform: translateX(-200px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1">
                    <img src="images/pro_2.png" alt="" class="imggocircle">
                    <h2>策划方案</h2>
                    <p>为您的企业定制个性化互联网策划书</p>
                </li>
                <li data-100-bottom-top="transform: translateY(200px); opacity: 0" data-center-top="transform: translateY(0px); opacity: 1">
                    <img src="images/pro_3.png" alt="" >
                    <h2>前端制作</h2>
                    <p>CSS、JS、HTML5实现页面的展示动态</p>
                </li>
                <li  data-100-bottom-top="transform: translateX(200px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1">
                    <img src="images/pro_4.png" alt="" class="imggocircle">
                    <h2>程序开发</h2>
                    <p>开发网站后台管理系统</p>
                </li>
                <li data-100-bottom-top="transform: translateX(400px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1" >
                    <img src="images/pro_5.png" alt="" class="imggocircle">
                    <h2>验收上线</h2>
                    <p>填充网站内容，确认上传，交付客户收付尾款服务</p>
                </li>
            </ul>
        </div>
    </div>
    <!-- clientout -->
    <div class="clientout">
        <div class="w1160 clearfix">
            <span class="bk60">&nbsp;</span>
            <div class="ho_tit_all">
                <p>Customer satisfaction is our only aim</p>
                <h2>客户的满意是我们唯一的宗旨</h2>
                <h3>我们将于携手更多优质伙伴 提供更加贴心的服务</h3>
            </div>
            <span class="bk50">&nbsp;</span>
            <div class="list clearfix" data-100-bottom-top="transform: translateX(-200px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1" >
                <span><img src="images/hzs_1.jpg"></span>
                <span><img src="images/hzs_2.jpg"></span>
                <span><img src="images/hzs_3.jpg"></span>
                <span><img src="images/hzs_4.jpg"></span>
                <span><img src="images/hzs_5.jpg"></span>
            </div>
            <span class="bk20">&nbsp;</span>
            <div class="list clearfix" data-100-bottom-top="transform: translateX(200px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1">
                <span><img src="images/hzs_5.jpg"></span>
                <span><img src="images/hzs_3.jpg"></span>
                <span><img src="images/hzs_4.jpg"></span>
                <span><img src="images/hzs_1.jpg"></span>
                <span><img src="images/hzs_2.jpg"></span>
            </div>
        </div>
    </div>
    <span class="bk50">&nbsp;</span>
    <!-- contactout -->
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
                <img src="images/ewmlogo.jpg">
                <p>扫一扫，关注我们</p>
            </div>
            <div class="txt fl">
                <p class=" clearfix"><img src="images/fot_1.png" class="imggocircle"><a href="tencent://message/?uin={$qq[1]}&amp;Menu=yes">业务咨询：625144908【点击咨询】</a> <a href="tencent://message/?uin={$qq[1]}&amp;Menu=yes">技术服务：625144908【点击咨询】</a></p>
                <p class=" clearfix"><img src="images/fot_2.png" class="imggocircle">服务热线：158 8176 0037</p>
                <p class=" clearfix"><img src="images/fot_3.png" class="imggocircle">邮箱：lebja@126.com</p>
                <p class=" clearfix"><img src="images/fot_4.png" class="imggocircle">公司地址：南充市嘉陵区火花路</p>
            </div>
        </div>
        <span class="bk30">&nbsp;</span>
        <div class="bot">
            <div class="w1160 clearfix">
                <div class="fot_link_bg">&nbsp;</div>
                <div class="link clearfix">
                    <span class="fl mR10">友情链接 </span>
                    <div class="fl">
                        <a href="" target="_blank">蘑菇云科技有限公司</a><a href="" target="_blank">蘑菇云科技有限公司</a><a href="" target="_blank">蘑菇云科技有限公司</a><a href="" target="_blank">蘑菇云科技有限公司</a><a href="" target="_blank">蘑菇云科技有限公司</a><a href="" target="_blank">蘑菇云科技有限公司</a><a href="" target="_blank">蘑菇云科技有限公司</a><a href="" target="_blank">蘑菇云科技有限公司</a><a href="" target="_blank">蘑菇云科技有限公司</a><a href="" target="_blank">蘑菇云科技有限公司</a><a href="" target="_blank">蘑菇云科技有限公司</a><a href="" target="_blank">蘑菇云科技有限公司</a><a href="" target="_blank">蘑菇云科技有限公司</a><a href="" target="_blank">蘑菇云科技有限公司</a>
                    </div>
                </div>
                <div class="copy">CopyRight ◎ 2017 南充诺航科技有限公司 All Right Reserved&nbsp;&nbsp;&nbsp;&nbsp;蜀ICP备12345678号</div>
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
</div>
<script type="text/javascript" src="js/skrollr.min.js"></script>
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