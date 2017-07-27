@extends('front.base')
@section('content')
<div class="in_tit_all">
  <p>yangshi nasitis</p>
  <h2><span>杨</span><span>氏</span><span>鼻</span><span>炎</span></h2>
</div>
<!-- aboutout -->
<div class="aboutin com_style">
  <div class="w1160 clearfix">
    <div class="txt">
      <h2 class="about_tit">医院简介</h2>
      <p>成都华西医院（华西医院）锦江春色来天地玉垒浮云变古今在历史文化名城成都市锦江万里桥头有<br/>一座闻名遐迩的医学城她就是四川大学华西临床医学院/华西医院。<br/>成都华西医院追溯历史起源于由美国英国加拿大等国的基督教会年在成都创建的仁济存仁医院<br/>年华西协合大学建立医科将其作为教学医院年抗战爆发中央大学金陵大学金陵女子文理学院燕京大学齐鲁大学内迁<br/>成都与华西协合大学联合办学办医是时华西坝大师云集名家汇萃盛况空前年月组建“华大中大齐大三大学联合医院”<br/>年华西协合大学新医院在现址建成简称大学医院或华西医院</p>
      <p>成都华西医院（华西医院）锦江春色来天地玉垒浮云变古今在历史文化名城成都市锦江万里桥头有<br/>一座闻名遐迩的医学城她就是四川大学华西临床医学院/华西医院。<br/>成都华西医院追溯历史起源于由美国英国加拿大等国的基督教会年在成都创建的仁济存仁医院<br/>年华西协合大学建立医科将其作为教学医院年抗战爆发中央大学金陵大学金陵女子文理学院燕京大学齐鲁大学内迁<br/>成都与华西协合大学联合办学办医是时华西坝大师云集名家汇萃盛况空前年月组建“华大中大齐大三大学联合医院”<br/>年华西协合大学新医院在现址建成简称大学医院或华西医院</p>
    </div>
  </div>
  <link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />
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
  <div class="bg_e8f2ff">
    <div class="w1160 clearfix">
      <span class="bk50">&nbsp;</span>
      <h2 class="about_tit">医院环境</h2>
      <div class="img ">
        <a rel="images_group" href="images/news_1.jpg"><img src="images/news_1.jpg" alt="" /></a>
        <a rel="images_group" href="images/news_2.jpg"><img src="images/news_2.jpg" alt="" /></a>
        <a rel="images_group" href="images/news_3.jpg"><img src="images/news_3.jpg" alt="" /></a>
        <a rel="images_group" href="images/news_4.jpg"><img src="images/news_4.jpg" alt="" /></a>
        <a rel="images_group" href="images/news_5.jpg"><img src="images/news_5.jpg" alt="" /></a>
        <a rel="images_group" href="images/news_1.jpg"><img src="images/news_1.jpg" alt="" /></a>
      </div>
      <span class="60">&nbsp;</span>
    </div>
  </div>
</div>
<!-- footer -->
@endsection