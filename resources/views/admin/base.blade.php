<!doctype html>
<html lang="en">

<head>
    <title>{{ session('setting')['web_name']  }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/vendor/linearicons/style.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="/assets/css/main.css">
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
{{--<link rel="stylesheet" href="/assets/css/demo.css">--}}
<!-- GOOGLE FONTS -->
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicon.png">
    <style>
        .tablePanel2 tr:hover{
            background: greenyellow;
        }
        .tablePanel2 tr{
            border-bottom:1px solid #BBB;height: 40px;
        }
    </style>
</head>

<body>
<!-- WRAPPER -->
<div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="brand">
            <a href="/"><img src="/assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
        </div>
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
            </div>
            <div id="navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="/admin/logout"><i class="lnr lnr-exit"></i> <span>退出登录</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <li><a href="/admin" class="active"><i class="lnr lnr-home"></i> <span>后台首页</span></a></li>
                    <li><a href="/admin/article" ><i class="lnr lnr-inbox"></i> <span>内容管理</span></a></li>
                    <li><a href="/admin/team" class=""><i class="lnr lnr-user"></i> <span>团队管理</span></a></li>
                    <li><a href="/admin/car" class=""><i class="lnr lnr-car"></i> <span>车型管理</span></a></li>
                    <li><a href="/admin/setting" class=""><i class="lnr lnr-cog"></i> <span>网站配置</span></a></li>
                    <li><a href="/admin/up_password" class=""><i class="lnr lnr-sun"></i> <span>修改密码</span></a></li>
                    {{--<li>--}}
                    {{--<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>--}}
                    {{--<div id="subPages" class="collapse ">--}}
                    {{--<ul class="nav">--}}
                    {{--<li><a href="page-profile.html" class="">Profile</a></li>--}}
                    {{--<li><a href="page-login.html" class="">Login</a></li>--}}
                    {{--<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                    {{--</li>--}}
                </ul>
            </nav>
        </div>
    </div>
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
    {{--<div class="main-content">--}}
    <div class="container-fluid">

    @yield('content')

    </div>
    {{--</div>--}}
    <!-- END MAIN CONTENT -->
    </div>
    <!-- END MAIN -->
    <div class="clearfix" ></div>
    <footer>
        <div class="container-fluid" >
            <p class="copyright">&copy; 2017 <a href="#" target="_blank">Theme I Need</a>. All Rights <a href="http://www.scnuohang.com/" target="_blank" >诺航科技</a>.  </p>
        </div>
    </footer>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->

</body>
</html>