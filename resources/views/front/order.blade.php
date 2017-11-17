@extends('front.base')
@section('content')
<div class="warp_box">
  <div class="warp_bot">
    <div class="brd_tit_all">
      <span class="bk100">&nbsp;</span>
      <h2>在线预约</h2>
      <p>--- Online booking  ---</p>
    </div>  
      <!-- start -->
      <div class="w1280 clearfix">        
        <div class="txt_model_3" id="order">
          <span class="bk80">&nbsp;</span>
          <form class="on_form_2" action="/front/message" method="post">
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
            <p><input type="date" value="" name="time" id="" class="input" placeholder="请输入您的预约时间"></p>
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
            <p><button type="submit" class="submit_but">确认提交</button></p>
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
        <div id="contact">
          <span class="bk80">&nbsp;</span>
          <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
          <div style="width:100%;height:300px;" id="dituContent"></div>
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
                  var point = new BMap.Point({{ explode( ',',session('setting')['bases_xy'] )[0] }},{{ explode( ',',session('setting')['bases_xy'] )[1] }});//定义一个中心点坐标
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
              var markerArr = [{title:"依美医疗美容",content:"咨询热线&nbsp;/&nbsp;{{ session('setting')['fix_phone']  }}<br/>地址&nbsp;/&nbsp;{{ session('setting')['bases']  }}<br/>QQ在线咨询&nbsp;/&nbsp;{{ session('setting')['qq']  }}",point:"{{ explode( ',',session('setting')['bases_xy'] )[0] }}|{{ explode( ',',session('setting')['bases_xy'] )[1] }}",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
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
          <span class="bk50">&nbsp;</span>
          <ul class="cont_list_all clearfix">
            <li class="wow zoomIn" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0; animation-name: zoomIn;">
              <img src="images/con_1_1.png" alt="" />
              <h2>咨询热线</h2>
              <p>{{ session('setting')['fix_phone']  }}</p>
            </li>
            <li  class="wow zoomIn" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0; animation-name: zoomIn;">
              <img src="images/con_1_2.png" alt="" />
              <h2>门诊时间（无假日医院）</h2>
              <p>08:00-21:00</p>
            </li>
            <li   class="wow zoomIn" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: zoomIn;">
              <img src="images/con_1_3.png" alt="" />
              <h2>医院地址</h2>
              <p>{{ session('setting')['bases']  }}</p>
            </li>
          </ul>
        </div>
      </div>
      <!-- end -->
      <span class="bk80">&nbsp;</span>
      <span class="bk100">&nbsp;</span>
  </div>
</div>
@endsection