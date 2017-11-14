<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>美丽俏佳人</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- base -->

    <script type="text/javascript" src="/js/wap/jquery-1.9.1.min.js"></script>
    <script src="/js/wap/TouchSlide.1.1.js"></script>
    <script src="/js/wap/touchslider.js"></script>
    <script src="/js/wap/bootstrap.min.js"></script>
    <script src="/js/wap/main.js"></script>
    <!-- animate -->
    <link href="/css/wap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/wap/htmleaf-demo.css">
    <link rel="stylesheet" href="/css/wap/swiper.min.css">
    <link href="/css/wap/base.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/js/wap/jquery.touchSwipe.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/js/respond.min.js"></script>
    <script src="/js/html5shiv.min.js"></script>
    <![endif]-->
    <script src="/js/wap/font.js"></script>
    <script>
        var _hmt = _hmt || [];
    </script>
    <style type="text/css">
        html, body {position: relative;height: 100%;overflow: hidden;width: 100%;max-width: 640px;min-width: 320px;margin: 0 auto;padding: 0;}
        .swiper-container {width: 100%;height: 100%;max-width: 640px;min-width: 320px;}
        .swiper-slide {
            background: #fff;
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;}
        .swiper-slide  img{width: 100%;}
        .banner_box .swiper-pagination{bottom:80px;}
        .swiper-pagination-bullet {
            width: .5rem;
            height: .5rem;
            display: inline-block;
            border-radius: 100%;
            background: transparent;
            border: .08rem solid #fff;
        }
        .swiper-pagination-bullet-active {
            opacity: 1;
            background: #fff;
        }
    </style>
</head>
<body >

<!-- banner -->
<div class="swiper-container banner_box">
    <div class="swiper-wrapper">
        @foreach( $article->articles as $item )
            <div class="swiper-slide"><img src="{{$item->thumbnail}}"></div>
        @endforeach
    </div>
    <!-- Add Pagination -->
    <div class="swiper-scrollbar"></div>
</div>
<!-- <a class="to-top clearfix"><img src="images/to-top.svg" class="fr"></a>
<script src="/js/wap/jquery.toTop.min.js"></script>
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
 -->

<script src="/js/wap/swiper.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        scrollbar: '.swiper-scrollbar',
        scrollbarHide: true,
        slidesPerView: 'auto',
        centeredSlides: true,
        spaceBetween: 30,
        grabCursor: true
    });
</script>
</body>
</html>