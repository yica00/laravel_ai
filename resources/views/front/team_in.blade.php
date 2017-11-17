@extends('front.base')
@section('content')
<div class="warp_box">
  <div class="warp_bot">
    <div class="brd_tit_all">
      <span class="bk100">&nbsp;</span>
      <h2>专家</h2>
      <p>--- experts ---</p>
    </div>  
      <!-- start -->
      <!-- 1简介 -->
      <div class="w1280 clearfix">
        <span class="bk80">&nbsp;</span>
        <div class="tea_dis_all clearfix">
          <div class="txt fr">
            <h2 class="tit">徐海<span>Xu Hai</span></h2>
            <div class="p1">
              <p class="b">南充医疗美容医院院长</p>
              <p>中国医疗美容整形协会会员、国家认证整形外科副主任、香港依美医疗美容集团总裁、“恒久美美雕”医疗美容系列项目创始人</p>
            </div>
            <div class="p2">
              <h3><span>简介</span></h3>
              <p>徐海教授医科大学毕业后一直从事临床医学工作，先后在医院的皮肤科与烧伤科担任医师，他从事的医学工作一直与人的形象和美有关。徐海教授是一个完美主义者,在他的临床实践中，他感觉到无论他多么的努力，也很难把一个皮肤破损的病人修饰成心中理想的形象，为此他非常痛苦，最终他毅然下决心放弃了医院的临床工作，走向了他心中的理想，创造完美形象的医疗美容之路。<a href="#tea_about">查看更多&gt;&gt;</a></p>
            </div>
            <div class="p2">
              <h3><span>擅长项目</span></h3>
              <p>全身各部位的烧、烫伤瘢痕整形；畸形纠正、容貌恢复；严重烧伤后功能重建;各种外伤所致的疤痕整形及仪表恢复等。</p>
            </div>
          </div>
          <div class="pic fl">
            <img src="images/tea_1.jpg">
          </div>
        </div>
        <div  id="tea_about">
          <span class="bk30">&nbsp;</span>
          <div class="tea_dis_box">
            <h2 class="tit">简介</h2>
            <div class="txt">
              <p>徐海教授医科大学毕业后一直从事临床医学工作，先后在医院的皮肤科与烧伤科担任医师，他从事的医学工作一直与人的形象和美有关。徐海教授是一个完美主义者,在他的临床实践中，他感觉到无论他多么的努力，也很难把一个皮肤破损的病人修饰成心中理想的形象，为此他非常痛苦，最终他毅然下决心放弃了医院的临床工作，走向了他心中的理想，创造完美形象的医疗美容之路。</p>
              <p>徐海教授医科大学毕业后一直从事临床医学工作，先后在医院的皮肤科与烧伤科担任医师，他从事的医学工作一直与人的形象和美有关。徐海教授是一个完美主义者,在他的临床实践中，他感觉到无论他多么的努力，也很难把一个皮肤破损的病人修饰成心中理想的形象，为此他非常痛苦，最终他毅然下决心放弃了医院的临床工作，走向了他心中的理想，创造完美形象的医疗美容之路。</p>
              <p>徐海教授医科大学毕业后一直从事临床医学工作，先后在医院的皮肤科与烧伤科担任医师，他从事的医学工作一直与人的形象和美有关。徐海教授是一个完美主义者,在他的临床实践中，他感觉到无论他多么的努力，也很难把一个皮肤破损的病人修饰成心中理想的形象，为此他非常痛苦，最终他毅然下决心放弃了医院的临床工作，走向了他心中的理想，创造完美形象的医疗美容之路。</p>
            </div>
          </div>
        </div>
        <span class="bk30">&nbsp;</span>
        <div class="tea_bt_all">手术照片</div>
        <span class="bk30">&nbsp;</span>
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen">
        <script type="text/javascript" src="js/jquery.fancybox-1.3.4.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
               
              $("a[rel=images_group]").fancybox({
                'transitionIn':'none',
                'transitionOut':'none',
                'titlePosition':'over',
                'titleFormat':function(title, currentArray, currentIndex, currentOpts) {
                  return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
                }
              });
            });
        </script>
        <div class="tea_img_all clearfix">
          <div class="clearfix">
            <a class="w500 fl mR20" rel="images_group" href="images/sh1.jpg">
              <img src="images/sh1.jpg">
            </a>
            <a class="w500 fl mR20" rel="images_group" href="images/sh2.jpg">
              <img src="images/sh2.jpg">
            </a>
            <a class="w240 fl" rel="images_group" href="images/sh3.jpg">
              <img src="images/sh3.jpg">
            </a>
          </div>
          <span class="bk20">&nbsp;</span>
          <div class="clearfix">
            <a class="w350 fl mR20" rel="images_group" href="images/sh4.jpg">
              <img src="images/sh4.jpg">
            </a>
            <a class="w390 fl mR20" rel="images_group" href="images/sh5.jpg">
              <img src="images/sh5.jpg">
            </a>
            <a class="w500 fl" rel="images_group" href="images/sh6.jpg">
              <img src="images/sh6.jpg">
            </a>
          </div>
        </div>
      </div>
      <!-- end -->
      <span class="bk80">&nbsp;</span>
      <span class="bk100">&nbsp;</span>
  </div>
</div>
@endsection