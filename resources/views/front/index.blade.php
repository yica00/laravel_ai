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
  <meta name="viewport" content="width=1280px">
  <link href="css/base.css" rel="stylesheet" type="text/css"> 
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
  <script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.source.js"></script>
  <!--[if lt IE 9]><!-->
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
  <!--[endif]-->
  <!-- 先后 -->
  <script language="JavaScript">
     function ok(){
        window.parent.parent.location.href='/home';
     }
     window.setTimeout("ok();",3000);
     
     function countDown(secs){
           jump.innerText=secs;
           if(--secs>0)
              setTimeout( "countDown(" +secs+ ")" ,1000);
        }
        countDown(1);
  </script>
</head>
<body>
<div id="loading">
  <div id="loading-center">
    <img src="images/logo_guide.png" class="home_logo" id="object_one">
  </div>
</div>

</body>
</html>