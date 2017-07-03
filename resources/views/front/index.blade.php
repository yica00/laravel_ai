@extends('front.base')
@section('content')
  <!-- banner -->
  <div class="banner_box">
      <div class="DB_tab25">
        <ul class="DB_bgSet">
            <li style="background:url(images/bn_1_bg.jpg);"></li>
            <li style="background:url(images/bn_2_bg.jpg);"></li>
            <li style="background:url(images/bn_3_bg.jpg);"></li>
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
  @endsection