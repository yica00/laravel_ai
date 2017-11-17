<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>依美医疗美容</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <!-- base -->
  
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script src="js/TouchSlide.1.1.js"></script>
  <script src="js/touchslider.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <!-- animate -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/htmleaf-demo.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link href="css/base.css" rel="stylesheet" type="text/css"> 
  <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="/js/respond.min.js"></script> 
  <script src="/js/html5shiv.min.js"></script>    
  <![endif]-->
  <script src="js/font.js"></script>
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
  <a href="index.html" class="col-xs-1"><span class="back">&nbsp;</span></a>
  <a class="col-xs-10 ui-title tit" id="popmenu">在线地图</a>
  <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
</div>
<div class="cd-bouncy-nav-modal">
  <nav>
    <ul class="cd-bouncy-nav">
      <li><a href="index.html">首页</a></li>
      <li><a href="item.html">项目</a></li>
      <li><a href="case.html">案例</a></li>
      <li><a href="team.html">专家</a></li>
      <li><a href="equip.html">设备</a></li>
      <li><a href="news.html">动态</a></li>
      <li><a href="brand.html">品牌</a></li>
      <li><a href="contact.html">联系</a></li>
    </ul>
  </nav>
  <a href="#0" class="cd-close">关闭</a>
</div>
<!-- start -->
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<div style="width:100%;height:30rem;" id="dituContent"></div>
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
        var point = new BMap.Point(106.117231,30.843297);//定义一个中心点坐标
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
      var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:0});
      map.addControl(ctrl_ove);
            //向地图中添加比例尺控件
      var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
      map.addControl(ctrl_sca);
        }
    
    
    initMap();//创建和初始化地图
</script>
<!-- end -->
<!-- 3 -->
<div class="appoint_out" id="apply_on">
  <span class="bk60">&nbsp;</span>
  <div class="ho_tit_all">
    <a href="order.html">
      <h2>预/约/通/道</h2>
    </a>
  </div>
  <span class="bk40">&nbsp;</span>
  <form class="on_form_2" action="" method="post">
    <p><input type="text" value="" name="" id="" class="input" placeholder="请输入您的电话"></p>
    <p><input type="text" value="" name="" id="" class="input" placeholder="请输入您的姓名"></p>
    <p><input type="text" value="" name="" id="" class="input" placeholder="请输入您的预约时间"></p>
    <p>
      <select id="" name=""> 
        <option value="0" selected="selected">请选择您要预约的项目</option>
        <option value="1">高贵飘逸眼</option> 
        <option value="2">恒久时尚鼻</option> 
        <option value="3">明快U型轮廓</option> 
        <option value="4">魅力喜悦肌</option> 
        <option value="5">秀美天鹅颈</option> 
        <option value="6">笔直迷人背</option>  
        <option value="7">丝滑质感肤</option>  
      </select>
    </p>
    <p><textarea name="content" class="textarea" id="" value="" placeholder="如何您还有其他问题，可以在这里给我们留言，我们会尽快联系您！"></textarea></p> 
    <p class="submit_but"><button type="submit">点击这里提交报名</button></p>
  </form>
</div>
<!-- 4 -->
<span class="bk40">&nbsp;</span>
<div class="ho_btn_call">
  <span><img src="images/btn_call.svg"></span>美丽热线：0817-0987246
</div>
<span class="bk40">&nbsp;</span>
<!-- footer -->
<div class="footer">
  <span class="bk40">&nbsp;</span>
  <div class="swiper-container-4">
      <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="item_in.html">
              <span class="pic"><img src="images/btn_1_1.svg"></span>
              <h2>高贵飘逸眼</h2>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="item_in.html">
              <span class="pic"><img src="images/btn_1_2.svg"></span>
              <h2>恒久时尚鼻</h2>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="item_in.html">
              <span class="pic"><img src="images/btn_1_3.svg"></span>
              <h2>明快U型轮廓</h2>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="item_in.html">
              <span class="pic"><img src="images/btn_1_4.svg"></span>
              <h2>魅力喜悦肌</h2>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="item_in.html">
              <span class="pic"><img src="images/btn_1_5.svg"></span>
              <h2>秀美天鹅颈</h2>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="item_in.html">
              <span class="pic"><img src="images/btn_1_6.svg"></span>
              <h2>笔直迷人背</h2>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="item_in.html">
              <span class="pic"><img src="images/btn_1_7.svg"></span>
              <h2>丝滑质感肤</h2>
            </a>
          </div>
      </div>
  </div>
  <span class="bk50">&nbsp;</span>
  <div class="ewm">
    <img src="images/ewm.jpg">
    <p>扫描二维码关注我们</p>
  </div>
  <span class="bk20">&nbsp;</span>
  <h2 class="call"><span><img src="images/hot_btn.png"></span>0817-7100000</h2>
  <span class="bk20">&nbsp;</span>
  <div class="bot">
    <p>来院地址：南充市顺庆区文化路234号(北湖公园对面)</p>
    <p>版权所有 © 依美医疗美容机构 Copyright Yimei All Rights Reserved </p>
    <p>技术支持 ：<a href="http://www.scnuohang.com/" target="_blank">诺航科技</a></p>
  </div>
</div>
<span class="bk80">&nbsp;</span>
<div class="fixed_order"><a href="#apply_on">免费预约依美整形美容&gt;&gt;</a></div>

<a class="to-top clearfix"><img src="images/to-top.svg" class="fr"></a>
<script src="js/jquery.toTop.min.js"></script>
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
<script src="js/swiper.min.js"></script>
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