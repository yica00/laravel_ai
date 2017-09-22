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

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/base.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/js/jquery.SuperSlide.2.1.1.source.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/js/respond.min.js"></script>
    <script src="/js/html5shiv.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- header -->
<div class="header">
    <div class="w1160 clearfix">
        <a href="/" class="logo"><img src="/images/logo.png"><i></i></a>
    </div>
    <div class="nav-box">
        <div class="w1160 clearfix">
            <ul id="nav" class="nav clearfix">
                @foreach( session('header_nav') as $navs )
                    <li class="nLi @if( session('urls') == $navs->link )on @endif">
                        <h3><a href="{{$navs->link}}">{{$navs->title}}<span>{{$navs->introduce}}</span></a></h3>
                        @if( $navs->articles )
                            <ul class="sub">
                                @foreach( $navs->articles as $arti )
                                    <li>
                                        <a href="@if( $arti->link ){{$arti->link}}@else{{$navs->link}}/category/{{$arti->id}}@endif">{{$arti->title}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
            <script id="jsID" type="text/javascript">
                jQuery("#nav").slide({
                    type: "menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
                    titCell: ".nLi", //鼠标触发对象
                    targetCell: ".sub", //titCell里面包含的要显示/消失的对象
                    effect: "slideDown", //targetCell下拉效果
                    delayTime: 300, //效果时间
                    triggerTime: 0, //鼠标延迟触发时间（默认150）
                    returnDefault: true //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
                });
            </script>
        </div>
    </div>
</div>

@yield('content')

<!-- footer -->
<div class="footer">
    <div class="w1160 clearfix">
        <ul class="top clearfix">
            <li>
                <img src="/images/ho_call.png" alt="">
                <p class="one">{{ session('setting')['fix_phone']  }}</p>
            </li>
            <li>
                <img src="/images/ho_phone.png" alt="">
                <p class="one">{{ session('setting')['phone']  }}</p>
            </li>
            <li>
                <img src="/images/ho_qq.png" alt="">
                <p class="one">{{ session('setting')['qq']  }}</p>
            </li>
            <li>
                <img src="/images/ho_add.png" alt="">
                <p>{{ session('setting')['bases']  }}</p>
            </li>
        </ul>
        <div style="width:100%;height:200px;" id="dituContent"></div>
        @if( session('urls') != "/contact"  )
            <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
        @endif
        <script type="text/javascript">
            //创建和初始化地图函数：
            function initMap() {
                createMap();//创建地图
                setMapEvent();//设置地图事件
                addMapControl();//向地图添加控件
                addMarker();//向地图中添加marker
            }

            //创建地图函数：
            function createMap() {
                var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
                var point = new BMap.Point(106.120177, 30.841374);//定义一个中心点坐标
                map.centerAndZoom(point, 15);//设定地图的中心点和坐标并将地图显示在地图容器中
                window.map = map;//将map变量存储在全局
            }

            //地图事件设置函数：
            function setMapEvent() {
                map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
                map.enableScrollWheelZoom();//启用地图滚轮放大缩小
                map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
                map.enableKeyboard();//启用键盘上下左右键移动地图
            }

            //地图控件添加函数：
            function addMapControl() {
                //向地图中添加缩放控件
                var ctrl_nav = new BMap.NavigationControl({
                    anchor: BMAP_ANCHOR_TOP_LEFT,
                    type: BMAP_NAVIGATION_CONTROL_LARGE
                });
                map.addControl(ctrl_nav);
                //向地图中添加缩略图控件
                var ctrl_ove = new BMap.OverviewMapControl({anchor: BMAP_ANCHOR_BOTTOM_RIGHT, isOpen: 0});
                map.addControl(ctrl_ove);
                //向地图中添加比例尺控件
                var ctrl_sca = new BMap.ScaleControl({anchor: BMAP_ANCHOR_BOTTOM_LEFT});
                map.addControl(ctrl_sca);
            }

            //标注点数组
            var markerArr = [{
                title: "南充皇室御品石材",
                content: "电话：{{ session('setting')['fix_phone']  }}<br/>地址：{{ session('setting')['bases']  }}",
                point: "106.121794|30.838832",
                isOpen: 0,
                icon: {w: 21, h: 21, l: 0, t: 0, x: 6, lb: 5}
            }
            ];
            //创建marker
            function addMarker() {
                for (var i = 0; i < markerArr.length; i++) {
                    var json = markerArr[i];
                    var p0 = json.point.split("|")[0];
                    var p1 = json.point.split("|")[1];
                    var point = new BMap.Point(p0, p1);
                    var iconImg = createIcon(json.icon);
                    var marker = new BMap.Marker(point, {icon: iconImg});
                    var iw = createInfoWindow(i);
                    var label = new BMap.Label(json.title, {"offset": new BMap.Size(json.icon.lb - json.icon.x + 10, -20)});
                    marker.setLabel(label);
                    map.addOverlay(marker);
                    label.setStyle({
                        borderColor: "#808080",
                        color: "#333",
                        cursor: "pointer"
                    });

                    (function () {
                        var index = i;
                        var _iw = createInfoWindow(i);
                        var _marker = marker;
                        _marker.addEventListener("click", function () {
                            this.openInfoWindow(_iw);
                        });
                        _iw.addEventListener("open", function () {
                            _marker.getLabel().hide();
                        })
                        _iw.addEventListener("close", function () {
                            _marker.getLabel().show();
                        })
                        label.addEventListener("click", function () {
                            _marker.openInfoWindow(_iw);
                        })
                        if (!!json.isOpen) {
                            label.hide();
                            _marker.openInfoWindow(_iw);
                        }
                    })()
                }
            }
            //创建InfoWindow
            function createInfoWindow(i) {
                var json = markerArr[i];
                var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>" + json.content + "</div>");
                return iw;
            }
            //创建一个Icon
            function createIcon(json) {
                var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w, json.h), {
                    imageOffset: new BMap.Size(-json.l, -json.t),
                    infoWindowOffset: new BMap.Size(json.lb + 5, 1),
                    offset: new BMap.Size(json.x, json.h)
                })
                return icon;
            }

            initMap();//创建和初始化地图
        </script>
        <div class="bot clearfix">
            <span class="ewm fl"><img src="{{ session('setting')['wx_map']  }}"></span>
            <ul class="txt fl">
                <li>座机：{{ session('setting')['fix_phone']  }}</li>
                <li>电话：{{ session('setting')['phone']  }}</li>
                <li>Q Q：{{ session('setting')['qq']  }}</li>
                <li>地址：{{ session('setting')['bases']  }}</li>
            </ul>
        </div>
        <span class="bk20">&nbsp;</span>
        <div class="link clearfix">
            <ul class="list fr">
                @foreach( session('links') as $link )
                    <li><a href="{{$link->link}}" target="_blank">{{$link->title}}</a></li>
                @endforeach
            </ul>
            <span class="tit fl">友情链接</span>
        </div>
    </div>
    <div class="rights">
        <div class="w1160 clearfix">
            CopyRight © 2017 皇室御品 &nbsp;&nbsp;&nbsp;&nbsp;All Rights Reserved.&nbsp;&nbsp;&nbsp;&nbsp;{{ session('setting')['icp']  }}&nbsp;&nbsp;&nbsp;&nbsp;技术支持：<a
                    href="http://www.scnuohang.com">诺航科技</a>
        </div>
    </div>
</div>
<!-- 侧边 -->
<div class="float_onlie">
    <a class="on_1" href="tencent://message/?uin={{ session('setting')['qq']  }}&amp;Menu=yes">&nbsp;</a>
    <a class="on_2 ph" href=""><em>电话：{{ session('setting')['fix_phone']  }}<br/>手机：{{ session('setting')['phone']  }}
        </em></a>
    <a class="on_3 add" href=""><em>{{ session('setting')['bases']  }}</em></a>
    <a class="on_4 ewm" href=""><em><img src="{{ session('setting')['wx_map']  }}"></em></a>
    <a class="on_5" href="" onclick="javascript:scroll(0,0)">&nbsp;</a>
</div>
<span class="bk100">&nbsp;</span>
<span class="bk20">&nbsp;</span>
<!-- quoted -->
@if( session('urls') != "" && session('urls') != "/budge" )
    <div class="quoted fixed-bot">
        <div class="w1160 clearfix">
            <div class="txt-2 fr">
                <h2>免费电话报价</h2>
                <p>{{ session('setting')['fix_phone']  }}</p>
            </div>
            <div class="txt-1 fl">
                <h2>皇室石材要花多少钱</h2>
                <p>8s填写表单获取精准报价</p>
            </div>
            <div class="form-1 fl">
                <form class="quo-form-1 clearfix" action="/front/message" method="post">
                    {{  csrf_field() }}
                    {{--@if (count($errors) > 0)--}}
                        {{--<div style="color: red">--}}
                            {{--<ul>--}}
                                {{--@if( is_object($errors) )--}}
                                    {{--@foreach ($errors->all() as $error)--}}
                                        {{--<li>{{ $error }}</li>--}}
                                    {{--@endforeach--}}
                                {{--@else--}}
                                    {{--{{ $errors }}--}}
                                {{--@endif--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--@endif--}}
                    <input type="submit" class="btn_2 fr" id="submit" placeholder="获取报价" value="获取报价">
                    <div class="w200 fl mR10">
                        <label><input class="btn_1" type="text" name="name" id="name" placeholder="姓名"></label>
                        <label><input class="btn_1" type="text" name="product" id="phone" placeholder="产品"></label>
                    </div>
                    <div class="w200 fl">
                        <label><input class="btn_1" type="text" name="phone" placeholder="电话"></label>
                        <label><input class="btn_1" type="text" name="amout" placeholder="数量"></label>
                    </div>
                </form>
            </div>


            <script>
                $("#submit").click(function () {
                    var name = $('#name').val();
                    var phone = $('#phone').val();
                    if (name == "" || phone == "" ) {
                        alert("请先输入姓名,电话后报价");
                        return false;
                    }
                    $.ajax({
                        url: '/front/message',
                        type: 'POST',
                        data: $('#forms').serialize(),
                        dataType: 'JSON',
                        success: function (data) {
                           alert(JSON.stringify(data));
//                          $(".writeinfo").append(data.msg);
                        }
                    });
                });
            </script>
        </div>
    </div>
@endif
</body>
</html>