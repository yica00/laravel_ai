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
  <meta name="viewport" content="width=1280px;">
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
<div class="heder_banner">
  <!-- banner -->
  <div id="slideBox" class="slideBox">
    <div class="hd">&nbsp;</div>
      <div class="bd">
        <ul>
          @foreach( $sliders as $slider )
          <li><a href="" style="background:url({{$slider->thumbnail}}) center no-repeat;">&nbsp;</a></li>
          @endforeach
        </ul>
      </div>
      <a class="prev" href="javascript:void(0)"></a>
      <a class="next" href="javascript:void(0)"></a>
    </div>
    <script type="text/javascript">jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});</script>
  <!-- header -->
  <div class="header">
    <div class="w1160 clearfix">
      <!-- nav -->
      <div class="nav_box fr">
        <ul id="nav" class="nav clearfix">
          @foreach( session('header_nav') as $navs )
            <li class="nLi @if( session('urls') == $navs->link )on @endif">
              <h3><a href="{{$navs->link}}">{{$navs->title}}<span>{{$navs->introduce}}</span></a></h3>
              @if( count($navs->articles)>0 )
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
</div>
<!-- promise -->
<div class="promise_out">
  <div class="w1160 clearfix">
    <ul class="clearfix">
      <li>
        <img src="images/pro_1.png" alt="" />
        <p>预算准确</p>
      </li>
      <li>
        <img src="images/pro_2.png" alt="" />
        <p>价格实惠</p>
      </li>
      <li>
        <img src="images/pro_3.png" alt="" />
        <p>家装省心</p>
      </li>
      <li>
        <img src="images/pro_4.png" alt="" />
        <p>材料环保</p>
      </li>
      <li>
        <img src="images/pro_5.png" alt="" />
        <p>协调性强</p>
      </li>
      <li>
        <img src="images/pro_6.png" alt="" />
        <p>品质更高</p>
      </li>
    </ul>
  </div>
</div>
<!-- price -->
<div class="price_out">
  <div class="w1160 clearfix">
    <span class="bk50">&nbsp;</span>
    <div class="tit">
      <h2>免费获取设计报价方案</h2>
      <p>装修第一步，算一算我家装修一共需要花多少钱</p>
    </div>
    <span class="bk40">&nbsp;</span>
    <div class="clearfix">
      <div class="w450 mR50 fr">
        <form class="on_form" action="/front/message" method="post">
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
          <p><input type="text" value="" name="xiaoqu" id="phone" class="input" placeholder="请输入您的小区"></p>
          <p><input type="text" value="" name="budge" id="phone" class="input" placeholder="请输入您的预算"></p>
          <p><input type="text" value="" name="area" id="phone" class="input" placeholder="请输入您的建筑面积"></p>
          <p>
            <select id="" name="style">
              <option value="0" selected="selected">请选择您的装修风格</option>
              @foreach( $articles as $article )
                <option value="{{$article->title}}">{{$article->title}}</option>
              @endforeach
            </select>
          </p>

          <button type="submit" class="submit_but">&nbsp;</button>
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
      <div class="w570 mL50 fl">
        <div class="txtScroll-top">
          <div class="hd">&nbsp;</div>
          <div class="bd">
            <ul class="infoList">
              @foreach( $messages as $message )
                <li><span class="p_1">{{$message->phone}}</span><span class="p_2">{{$message->name}}</span><span class="p_3">已申请报价</span><span class="p_4">{{ \Carbon\Carbon::now('PRC')->diffInDays($message->created_at) }}天前</span></li>
              @endforeach
            </ul>
          </div>
        </div>
        <script type="text/javascript">
        jQuery(".txtScroll-top").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"top",autoPlay:true,vis:7});
        </script>
        <div class="txt">
          <h2>已有<span>110</span>户业主申请报价</h2>
          <p>我们承诺您的信息将被严格保密</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- case_out -->
<div class="case_out">
  <div class="w1160 clearfix">
    <span class="bk50">&nbsp;</span>
    <div class="ho_tit_all">
      <a href="/case">
        <h2>装修案例</h2>
        <p>优选当下主流设计风格，超10万张装修设计图片供您赏析</p>
      </a>
    </div>
    <span class="bk40">&nbsp;</span>
    <div class="top clearfix">
      <div class="w570 fr">
        <div class="clearfix">
          <a href="case_in.html" class="cp_all cp_2 fr">
            <img src="images/cp_6.jpg">
            <span class="mask">&nbsp;</span>
            <span class="line">&nbsp;</span>
            <span class="name">田园风格94平方米三房两厅两卫</span>
          </a>
          <a href="case_in.html" class="cp_all cp_2 fl">
            <img src="images/cp_7.jpg">
            <span class="mask">&nbsp;</span>
            <span class="line">&nbsp;</span>
            <span class="name">田园风格94平方米三房两厅两卫</span>
          </a>
        </div>
        <span class="bk10">&nbsp;</span>
        <div class="clearfix">
          <a href="case_in.html" class="cp_all cp_2 fr">
            <img src="images/cp_2.jpg">
            <span class="mask">&nbsp;</span>
            <span class="line">&nbsp;</span>
            <span class="name">田园风格94平方米三房两厅两卫</span>
          </a>
          <a href="case_in.html" class="cp_all cp_2 fl">
            <img src="images/cp_3.jpg">
            <span class="mask">&nbsp;</span>
            <span class="line">&nbsp;</span>
            <span class="name">田园风格94平方米三房两厅两卫</span>
          </a>
        </div>
      </div>
      <!-- banner -->
      <div id="slideBoxcp" class="slideBoxcp fl">
        <div class="hd">&nbsp;</div>
        <div class="bd">
          <ul>
            <li>
              <a href="case_in.html" class="cp_all cp_3">
                <img src="images/cp_4.jpg">
                <span class="mask">&nbsp;</span>
                <span class="line">&nbsp;</span>
                <span class="name">田园风格94平方米三房两厅两卫</span>
              </a>
            </li>
            <li>
              <a href="case_in.html" class="cp_all cp_3">
                <img src="images/cp_5.jpg">
                <span class="mask">&nbsp;</span>
                <span class="line">&nbsp;</span>
                <span class="name">田园风格94平方米三房两厅两卫</span>
              </a>
            </li>
            <li>
              <a href="case_in.html" class="cp_all cp_3">
                <img src="images/cp_6.jpg">
                <span class="mask">&nbsp;</span>
                <span class="line">&nbsp;</span>
                <span class="name">田园风格94平方米三房两厅两卫</span>
              </a>
            </li>
            <li>
              <a href="case_in.html" class="cp_all cp_3">
                <img src="images/cp_7.jpg">
                <span class="mask">&nbsp;</span>
                <span class="line">&nbsp;</span>
                <span class="name">田园风格94平方米三房两厅两卫</span>
              </a>
            </li>
            <li>
              <a href="case_in.html" class="cp_all cp_3">
                <img src="images/cp_8.jpg">
                <span class="mask">&nbsp;</span>
                <span class="line">&nbsp;</span>
                <span class="name">田园风格94平方米三房两厅两卫</span>
              </a>
            </li>
            <li>
              <a href="case_in.html" class="cp_all cp_3">
                <img src="images/cp_9.jpg">
                <span class="mask">&nbsp;</span>
                <span class="line">&nbsp;</span>
                <span class="name">田园风格94平方米三房两厅两卫</span>
              </a>
            </li>
          </ul>
        </div>
        <a class="prev" href="javascript:void(0)"></a>
        <a class="next" href="javascript:void(0)"></a>
      </div>
      <script type="text/javascript">jQuery(".slideBoxcp").slide({mainCell:".bd ul",autoPlay:true});</script>
    </div>
    <span class="bk10">&nbsp;</span>
    <ul class="list clearfix">
        <li><a href="case.html"><img src="images/cp_l1.jpg" alt="" /><span>客厅</span></a></li>
        <li><a href="case.html"><img src="images/cp_l2.jpg" alt="" /><span>卧室</span></a></li>
        <li><a href="case.html"><img src="images/cp_l3.jpg" alt="" /><span>餐厅</span></a></li>
        <li><a href="case.html"><img src="images/cp_l4.jpg" alt="" /><span>厨房</span></a></li>
        <li><a href="case.html"><img src="images/cp_l5.jpg" alt="" /><span>卫生间</span></a></li>
        <li><a href="case.html"><img src="images/cp_l6.jpg" alt="" /><span>阳台</span></a></li>
        <li><a href="case.html"><img src="images/cp_l7.jpg" alt="" /><span>儿童房</span></a></li>
        <li><a href="case.html"><img src="images/cp_l8.jpg" alt="" /><span>更多</span></a></li>
    </ul>
  </div>
</div>
<!-- team_out -->
<div class="team_out">
  <div class="w1160 clearfix">
    <span class="bk50">&nbsp;</span>
    <div class="ho_tit_all">
      <a href="team.html">
        <h2>设计团队</h2>
        <p>130位平均7年以上设计经验资深设计师为您服务</p>
      </a>
    </div>
    <span class="bk40">&nbsp;</span>
    <div class="picScroll-leftsys">
      <div class="hd">
        <a class="next"></a>
        <a class="prev"></a>
      </div>
      <div class="bd">
        <ul class="picList">
          <li>
            <a href="team_in.html">
              <span class="pic"><img src="images/sj_1.jpg" alt="" /></span>
              <span class="ewm"><img src="images/sj_ewm.jpg" alt="" /></span>
              <div class="txt">
                <h2>邵来明</h2>
                <span>查看详情</span>
              </div>
            </a>
          </li>
          <li>
            <a href="team_in.html">
              <span class="pic"><img src="images/sj_2.jpg" alt="" /></span>
              <span class="ewm"><img src="images/sj_ewm.jpg" alt="" /></span>
              <div class="txt">
                <h2>邵来明</h2>
                <span>查看详情</span>
              </div>
            </a>
          </li>
          <li>
            <a href="team_in.html">
              <span class="pic"><img src="images/sj_3.jpg" alt="" /></span>
              <span class="ewm"><img src="images/sj_ewm.jpg" alt="" /></span>
              <div class="txt">
                <h2>邵来明</h2>
                <span>查看详情</span>
              </div>
            </a>
          </li>
          <li>
            <a href="team_in.html">
              <span class="pic"><img src="images/sj_4.jpg" alt="" /></span>
              <span class="ewm"><img src="images/sj_ewm.jpg" alt="" /></span>
              <div class="txt">
                <h2>邵来明</h2>
                <span>查看详情</span>
              </div>
            </a>
          </li>
          <li>
            <a href="team_in.html">
              <span class="pic"><img src="images/sj_5.jpg" alt="" /></span>
              <span class="ewm"><img src="images/sj_ewm.jpg" alt="" /></span>
              <div class="txt">
                <h2>邵来明</h2>
                <span>查看详情</span>
              </div>
            </a>
          </li>
          <li>
            <a href="team_in.html">
              <span class="pic"><img src="images/sj_6.jpg" alt="" /></span>
              <span class="ewm"><img src="images/sj_ewm.jpg" alt="" /></span>
              <div class="txt">
                <h2>邵来明</h2>
                <span>查看详情</span>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <script type="text/javascript">
    jQuery(".picScroll-leftsys").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:4,trigger:"click"});
    </script>
    <span class="bk50">&nbsp;</span>
  </div>
</div>
<!-- quality_out -->
<div class="quality_out">
  <div class="top">
    <div class="w1160 clearfix">
      <div class="ho_tit_all">
        <a href="quality.html">
          <h2>品质工程</h2>
          <p>看不见的品质和看不见的细节，我们都同样用心</p>
        </a>
      </div>
    </div>
  </div>
  <span class="bk50">&nbsp;</span>
  <div class="w1160 clearfix">
    <div id="demo1" class="picBtnTop">
      <div class="hd">
        <ul>
          <li><a href="quality.html">品质家装</a></li>
          <li><a href="quality.html">施工保障</a></li>
          <li><a href="quality.html">环保体系</a></li>
          <li><a href="quality.html">顶级工艺</a></li>
          <li><a href="quality.html">环保材料</a></li>
        </ul>
      </div>
      <div class="bd">
        <ul>
          <li><a href="quality.html"><img src="images/quilty_1.png" /></a></li>
          <li><a href="quality.html"><img src="images/quilty_2.png" /></a></li>
          <li><a href="quality.html"><img src="images/quilty_3.png" /></a></li>
          <li><a href="quality.html"><img src="images/quilty_4.png" /></a></li>
          <li><a href="quality.html"><img src="images/quilty_5.png" /></a></li>
        </ul>
      </div>
    </div>
    <script type="text/javascript">
    //唯一不同：jQuery("#demo1")
    jQuery("#demo1").slide({ mainCell:".bd ul",effect:"top",autoPlay:true,triggerTime:0 });</script>
  </div>
  <span class="bk70">&nbsp;</span>
</div>
<!-- project_out -->
<div class="project_out">
  <div class="w1160 clearfix">
    <span class="bk50">&nbsp;</span>
    <div class="ho_tit_all">
      <a href="project.html">
        <h2>在建工程</h2>
        <p>直击交换空间一线工地，装修细节一目了然</p>
      </a>
    </div>
    <span class="bk40">&nbsp;</span>
    <div class="clearfix">
      <div class="list fr">
        <ul class="clearfix">
          <li><a href="project_in.html"><img src="images/gz_1.jpg" /><div class="txt">楼盘：锦东庭园  92㎡ 美式、乡村</div></a></li>
          <li><a href="project_in.html"><img src="images/gz_2.jpg" /><div class="txt">楼盘：锦东庭园  92㎡ 美式、乡村</div></a></li>
          <li><a href="project_in.html"><img src="images/gz_3.jpg" /><div class="txt">楼盘：锦东庭园  92㎡ 美式、乡村</div></a></li>
          <li><a href="project_in.html"><img src="images/gz_4.jpg" /><div class="txt">楼盘：锦东庭园  92㎡ 美式、乡村</div></a></li>
          <li><a href="project_in.html"><img src="images/gz_5.jpg" /><div class="txt">楼盘：锦东庭园  92㎡ 美式、乡村</div></a></li>
          <li><a href="project_in.html"><img src="images/gz_6.jpg" /><div class="txt">楼盘：锦东庭园  92㎡ 美式、乡村</div></a></li>
        </ul>
      </div>
      <div class="workers fl">
        <div id="slideBox_work" class="slideBox_work">
          <div class="hd">
            <ul><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li></ul>
          </div>
          <div class="bd">
            <ul>
              <li><a href="worker_in.html"><img src="images/wor_1.jpg" /><div class="txt">姓名：<span>赵长亮</span>   |   工作年限：<span>16年</span></div></a></li>
              <li><a href="worker_in.html"><img src="images/wor_2.jpg" /><div class="txt">姓名：<span>赵长亮</span>   |   工作年限：<span>16年</span></div></a></li>
              <li><a href="worker_in.html"><img src="images/wor_1.jpg" /><div class="txt">姓名：<span>赵长亮</span>   |   工作年限：<span>16年</span></div></a></li>
              <li><a href="worker_in.html"><img src="images/wor_2.jpg" /><div class="txt">姓名：<span>赵长亮</span>   |   工作年限：<span>16年</span></div></a></li>
              <li><a href="worker_in.html"><img src="images/wor_1.jpg" /><div class="txt">姓名：<span>赵长亮</span>   |   工作年限：<span>16年</span></div></a></li>
            </ul>
          </div>
        </div>
        <script type="text/javascript">jQuery(".slideBox_work").slide({mainCell:".bd ul",autoPlay:true});</script>
      </div>
    </div>
  </div>
</div>
<!-- guide_out -->
<div class="guide_out">
  <div class="w1160 clearfix">
    <span class="bk50">&nbsp;</span>
    <div class="ho_tit_all">
      <a href="guide.html">
        <h2>装修攻略</h2>
        <p>家庭装修全攻略，交换空间就是您的家装百科全书</p>
      </a>
    </div>
    <span class="bk40">&nbsp;</span>
    <div class="clearfix">
      <div class="picScroll-leftgui fr">
        <div class="hd">
          <a class="next"></a>
          <a class="prev"></a>
        </div>
        <div class="bd">
          <ul class="picList">
            <li>
              <a href="guide_in.html">
                <span class="pic"><img src="images/cp_1.jpg" alt="" /></span>
                <span class="mask_black">&nbsp;</span>
                    <p>客厅装修你还在吊顶吗？真的是落伍土气的真的是落伍土气的</p>
              </a>
            </li>
            <li>
              <a href="guide_in.html">
                <span class="pic"><img src="images/cp_2.jpg" alt="" /></span>
                <span class="mask_black">&nbsp;</span>
                    <p>客厅装修你还在吊顶吗？真的是落伍土气的真的是落伍土气的</p>
              </a>
            </li>
            <li>
              <a href="guide_in.html">
                <span class="pic"><img src="images/cp_3.jpg" alt="" /></span>
                <span class="mask_black">&nbsp;</span>
                    <p>客厅装修你还在吊顶吗？真的是落伍土气的真的是落伍土气的</p>
              </a>
            </li>
            <li>
              <a href="guide_in.html">
                <span class="pic"><img src="images/cp_1.jpg" alt="" /></span>
                <span class="mask_black">&nbsp;</span>
                    <p>客厅装修你还在吊顶吗？真的是落伍土气的真的是落伍土气的</p>
              </a>
            </li>
            <li>
              <a href="guide_in.html">
                <span class="pic"><img src="images/cp_2.jpg" alt="" /></span>
                <span class="mask_black">&nbsp;</span>
                    <p>客厅装修你还在吊顶吗？真的是落伍土气的真的是落伍土气的</p>
              </a>
            </li>
            <li>
              <a href="guide_in.html">
                <span class="pic"><img src="images/cp_3.jpg" alt="" /></span>
                <span class="mask_black">&nbsp;</span>
                    <p>客厅装修你还在吊顶吗？真的是落伍土气的真的是落伍土气的</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <script type="text/javascript">
      jQuery(".picScroll-leftgui").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click"});
      </script>
      <a href="guide.html" class="guide_tit fl"><img src="images/guide_1.png"></a>
    </div>
     <span class="bk10">&nbsp;</span>
    <div class="clearfix">
      <div class="w980 fr">
        <div class="clearfix">
          <div class="guideout fl mR10">
            <span class="pic"><img src="images/guidea.jpg"></span>
            <span class="mask">&nbsp;</span>
            <div class="txt">
              <h2><a href="guide.html">设计知识</a></h2>
              <ul class="list">
                <li><a href="guide_in.html">如何确定装修风格和装修预和装修预和装修预和装修预算？</a></li>
                <li><a href="guide_in.html">装修效果图解析-如何装修儿童房？</a></li>
                <li><a href="guide_in.html">装修房子时这些问题千万不要忽略</a></li>
              </ul>
            </div>
          </div>
          <div class="guideout fl mR10">
            <span class="pic"><img src="images/guideb.jpg"></span>
            <span class="mask">&nbsp;</span>
            <div class="txt">
              <h2><a href="guide.html">材料知识</a></h2>
              <ul class="list">
                <li><a href="guide_in.html">如何确定装修风格和装修预和装修预和装修预和装修预算？</a></li>
                <li><a href="guide_in.html">装修效果图解析-如何装修儿童房？</a></li>
                <li><a href="guide_in.html">装修房子时这些问题千万不要忽略</a></li>
              </ul>
            </div>
          </div>
          <div class="guideout fl">
            <span class="pic"><img src="images/guidec.jpg"></span>
            <span class="mask">&nbsp;</span>
            <div class="txt">
              <h2><a href="guide.html">装修风水</a></h2>
              <ul class="list">
                <li><a href="guide_in.html">如何确定装修风格和装修预和装修预和装修预和装修预算？</a></li>
                <li><a href="guide_in.html">装修效果图解析-如何装修儿童房？</a></li>
                <li><a href="guide_in.html">装修房子时这些问题千万不要忽略</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <a href="guide.html" class="guide_tit fl"><img src="images/guide_2.png"></a>
    </div>
  </div>
</div>
<!-- news_out -->
<div class="news_out">
  <div class="w1160 clearfix">
    <span class="bk60">&nbsp;</span>
    <div class="ho_tit_all">
      <a href="news.html">
        <h2>优惠活动</h2>
        <p>实时放送优惠活动，已钜惠 62769 人装修</p>
      </a>
    </div>
    <span class="bk40">&nbsp;</span>
    <div class="picScroll-left-hd">
      <div class="hd"><a class="next"></a>
          <a class="prev"></a></div>
      <div class="bd">
        <ul class="picList">
          <li>
            <a href="news_in.html">
              <span class="pic"><img src="images/cp_1.jpg"></span>
              <div class="txt">
                <h2>家庭装修报价你需要看些什么?</h2>
                <p>在日常的家居装修中，或者是正在准备打算在日常的家居装修中，或者是正在准备装修的业主朋友来说，家装装修报价</p>
                <span class="btn">more +</span>
              </div>
            </a>
          </li>
          <li>
            <a href="news_in.html">
              <span class="pic"><img src="images/cp_2.jpg"></span>
              <div class="txt">
                <h2>家庭装修报价你需要看些什么?</h2>
                <p>在日常的家居装修中，或者是正在准备打算装修的业主朋友来说，家装装修报价</p>
                <span class="btn">more +</span>
              </div>
            </a>
          </li>
          <li>
            <a href="news_in.html">
              <span class="pic"><img src="images/cp_3.jpg"></span>
              <div class="txt">
                <h2>家庭装修报价你需要看些什么?</h2>
                <p>在日常的家居装修中，或者是正在准备在日常的家居装修中，或者是正在准备打算装修的业主朋友来说，家装装修报价</p>
                <span class="btn">more +</span>
              </div>
            </a>
          </li>
          <li>
            <a href="news_in.html">
              <span class="pic"><img src="images/cp_4.jpg"></span>
              <div class="txt">
                <h2>家庭装修报价你需要看些什么?</h2>
                <p>在日常的家居装修中，或者是正在准备打算装修的业主朋友来说，家装装修报价</p>
                <span class="btn">more +</span>
              </div>
            </a>
          </li>
          <li>
            <a href="news_in.html">
              <span class="pic"><img src="images/cp_5.jpg"></span>
              <div class="txt">
                <h2>家庭装修报价你需要看些什么?</h2>
                <p>在日常的家居装修中，或者是正在准备打算装修的业主朋友来说，家装装修报价</p>
                <span class="btn">more +</span>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <script type="text/javascript">
    jQuery(".picScroll-left-hd").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click"});
    </script>
  </div>
</div>
<span class="bk40">&nbsp;</span>
<div class="footer">
  <div class="w1160 clearfix">
    <div class="clearfix">
      <div class="call fr">
        <h2>有任何建议或意见请联系我们 </h2>
        <p>{{ session('setting')['fix_phone']  }}</p>
      </div>
      <img src="/images/price_case.gif" class="fl">
    </div>
    <span class="bk20">&nbsp;</span>
    <div class="clearfix">
      <div class="ewm fr">
        <img src="/images/sj_ewm.jpg">
      </div>
      <div class="txt fl">
        <p>座机：{{ session('setting')['fix_phone']  }}</p>
        <P>电话：{{ session('setting')['phone']  }}</p>
        <P>Q Q：{{ session('setting')['qq']  }}</p>
        <P>地址：{{ session('setting')['bases']  }}</p>
      </div>
    </div>
    <span class="bk40">&nbsp;</span>
  </div>
  <div class="bot">
    <div class="w1160 clearfix">
      copyright 2017© 交换空间装饰  {{ session('setting')['icp']  }}  <span>技术支持：<a href="http://www.scnuohang.com/" target="_blank">诺航科技</a></span>
    </div>
  </div>
</div>
<!-- float -->
<div class="float_onlie">
  <a class="on_1" href="tencent://message/?uin={{ session('setting')['qq']  }}&amp;Menu=yes">&nbsp;</a>
  <a class="on_2 ph" href=""><em>电话：{{ session('setting')['fix_phone']  }}<br>手机：{{ session('setting')['phone']  }}</em></a>
  <a class="on_3 add" href=""><em>{{ session('setting')['bases']  }}</em></a>
  <a class="on_4 ewm" href=""><em><img src="{{ session('setting')['wx_map']  }}"></em></a>
  <a class="on_5" href="" onclick="javascript:scroll(0,0)">&nbsp;</a>
</div>
</body>
</html>