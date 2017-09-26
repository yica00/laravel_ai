@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
    <div class="in_tit_all">
      <p>------&nbsp;&nbsp;contact us&nbsp;&nbsp;------</p>
      <h2><span>联</span><span>系</span><span>我</span><span>们</span></h2>
    </div>
  </div>
</div>
<!-- start -->
<!--  -->
<div class="wap_box">
  <span class="bk40">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div style="width:100%;height:400px;" id="dituContent-2"></div>
    <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
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
              var map = new BMap.Map("dituContent-2");//在百度地图容器中创建一个地图
              var point = new BMap.Point(106.079989,30.760791);//定义一个中心点坐标
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
                var markerArr = [{title:"皇室御品",content:"座机：{{ session('setting')['fix_phone']  }}<br/>电话：{{ session('setting')['phone']  }}<br/>地址：{{ session('setting')['bases']  }}",point:"106.079989|30.760791",isOpen:1,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
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
    <span class="bk20">&nbsp;</span>
    <div class="contact_way">
      <dl>
        <dt>座机</dt>
        <dd>{{ session('setting')['fix_phone']  }}</dd>
      </dl>
      <dl>
        <dt>手机</dt>
        <dd>{{ session('setting')['phone']  }}</dd>
      </dl>
      <dl>
        <dt>Q Q</dt>
        <dd>{{ session('setting')['qq']  }}</dd>
      </dl>
      <dl>
        <dt>地址</dt>
        <dd>{{ session('setting')['bases']  }}</dd>
      </dl>
    </div>
  </div>  
</div>
<span class="bk50">&nbsp;</span>
<!-- end -->
<!-- footer -->
@endsection