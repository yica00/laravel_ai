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
    <!--[if lt IE 9]><!-->
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>
    <!--[endif]-->
    <!-- 先后 -->
</head>
<body>
<!-- header -->
<div class="header">
    <div class="w1160 clearfix">
        <div class="w960 fr">
            <div class="top clearfix">
                <div class="call fr"><p>24小时免费咨询热线</p><h2>{{ session('setting')['fix_phone']  }}</h2></div>
                <form class="search fr">
                    <span class="default">瓷砖型号</span>
                    <input type="" class="inp_1" id="" placeholder="">
                    <button type="submit" class="inp_2"><img src="/images/btn_sear.svg"></button>
                </form>
            </div>
            <div class="nav_box">
                <ul id="nav" class="nav clearfix">
                    @foreach( session('header_nav') as $navs )
                        <li class="nLi @if( session('urls') == $navs->link )on @endif">
                            <h3><a href="{{$navs->link}}">{{$navs->title}}</a></h3>
                            @if( $navs->articles )
                                <ul class="sub">
                                    @foreach( $navs->articles as $arti )
                                        <li><a href="@if( $arti->link ){{$arti->link}}@else{{$navs->link}}/category/{{$arti->id}}@endif">{{$arti->title}}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
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
        <a href="/" class="logo fl">&nbsp;</a>
    </div>
</div>

@yield('content')

<!-- footer -->
<div class="footer">
    <div class="w1160 clearfix">
        <ul class="top clearfix">
            <li>
                <img src="/images/ho_call.png" alt="" />
                <p class="one">{{ session('setting')['fix_phone']  }}</p>
            </li>
            <li>
                <img src="/images/ho_phone.png" alt="" />
                <p>{{ session('setting')['phone']  }}</p>
            </li>
            <li>
                <img src="/images/ho_qq.png" alt="" />
                <p class="one">{{ session('setting')['qq']  }}</p>
            </li>
            <li>
                <img src="/images/ho_add.png" alt="" />
                <p>{{ mb_substr(session('setting')['bases'],0,10 ) }}<br/>{{ mb_substr(session('setting')['bases'],10,30 ) }} </p>
            </li>
        </ul>
        <div style="width:100%;height:160px;" id="dituContent"></div>
        <div class="bot clearfix">
            <span class="ewm fl"><img src="{{ session('setting')['wx_map']  }}"></span>
            <ul class="txt fl">
                <li>座机：{{ session('setting')['fix_phone']  }}</li>
                <li>电话：{{ session('setting')['phone']  }}</li>
                <li>Q Q：{{ session('setting')['qq']  }}</li>
                <li>地址：{{ session('setting')['bases']  }}</li>
            </ul>
        </div>
        <div class="link clearfix">
            <span class="fl mR10">友情链接 </span>
            <div class="fl">
                <a href="" target="_blank">成都谐和动物医院</a><a href="" target="_blank">成都谐和动物医院</a><a href="" target="_blank">成都谐和动物医院</a><a href="" target="_blank">成都谐和动物医院</a><a href="" target="_blank">成都谐和动物医院</a><a href="" target="_blank">成都谐和动物医院</a><a href="" target="_blank">成都谐和动物医院</a><a href="" target="_blank">成都谐和动物医院</a><a href="" target="_blank">成都谐和动物医院</a><a href="" target="_blank">成都谐和动物医院</a><a href="" target="_blank">成都谐和动物医院</a><a href="" target="_blank">成都谐和动物医院</a><a href="" target="_blank">成都谐和动物医院</a><a href="" target="_blank">成都谐和动物医院</a>
            </div>
        </div>
    </div>
    <div class="rights">
        <div class="w1160 clearfix">
            CopyRight © 2017  &nbsp;&nbsp;&nbsp;&nbsp;All Rights Reserved.&nbsp;&nbsp;&nbsp;&nbsp;蜀ICP备8888888号&nbsp;&nbsp;&nbsp;&nbsp;技术支持：<a href="http://www.scnuohang.com/" target="_blank">诺航科技</a>
        </div>
    </div>
    <div style="display: none">{{ session('setting')['web_name']  }}</div>
</div>
<!-- 侧边 -->
<div class="float_onlie">
    <a class="on_1" href="tencent://message/?uin={{ session('setting')['qq']  }}&amp;Menu=yes">&nbsp;</a>
    <a class="on_2 ph" href=""><em>电话：{{ session('setting')['fix_phone']  }}<br/>手机：{{ session('setting')['phone']  }}</em></a>
    <a class="on_3 add" href=""><em>{{ mb_substr(session('setting')['bases'],0,10 ) }}<br/>{{ mb_substr(session('setting')['bases'],10,30 ) }}</em></a>
    <a class="on_4 ewm" href=""><em><img src="{{ session('setting')['wx_map']  }}"></em></a>
    <a class="on_5" href="" onclick="javascript:scroll(0,0)">&nbsp;</a>
</div>
@if( \Illuminate\Support\Facades\Request::path() != "contact" )
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
@endif
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }

    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(106.125747,30.835855);//定义一个中心点坐标
        map.centerAndZoom(point,15);//设定地图的中心点和坐标并将地图显示在地图容器中
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

    //标注点数组
    var markerArr = [{title:"{{ session('setting')['web_name']  }}",content:"地址：{{ session('setting')['bases']  }}",point:"106.123555|30.835359",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
    ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
            var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
            var iw = createInfoWindow(i);
            var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
            marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                borderColor:"#808080",
                color:"#333",
                cursor:"pointer"
            });

            (function(){
                var index = i;
                var _iw = createInfoWindow(i);
                var _marker = marker;
                _marker.addEventListener("click",function(){
                    this.openInfoWindow(_iw);
                });
                _iw.addEventListener("open",function(){
                    _marker.getLabel().hide();
                })
                _iw.addEventListener("close",function(){
                    _marker.getLabel().show();
                })
                label.addEventListener("click",function(){
                    _marker.openInfoWindow(_iw);
                })
                if(!!json.isOpen){
                    label.hide();
                    _marker.openInfoWindow(_iw);
                }
            })()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }

    initMap();//创建和初始化地图
</script>
</body>
</html>