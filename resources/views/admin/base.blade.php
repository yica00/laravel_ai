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

    <!-- GOOGLE FONTS -->
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicon.png">
    <script src="/assets/scripts/klorofil-common.js"></script>
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
            <a href="/">sbTeam~</a>
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
                    {{--<li><a href="/admin/article" ><i class="lnr lnr-inbox"></i> <span>内容管理</span></a></li>--}}
                    <li>
                        <a href="#subPages2"  data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>客户管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPages2" class="collapse" >
                            <ul class="nav" >
                                <li><a href="/admin/customer" class="">客户列表</a></li>
                                <li><a href="/admin/customer/create" class="">新增客户</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#subPages3"   data-toggle="collapse" class="collapsed"><i class="lnr lnr-list"></i> <span>等级&类别</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        <div id="subPages3" class="collapse" >
                            <ul class="nav" >
                                <li><a href="/admin/category" class="">类别</a></li>
                                <li><a href="/admin/level" class="">等级</a></li>
                            </ul>
                        </div>
                    </li>
                    {{--<li><a href="/admin/order_list" class=""><i class="lnr lnr-cart"></i> <span>订单管理</span></a></li>--}}
                    {{--<li><a href="/admin/team" class=""><i class="lnr lnr-users"></i> <span>专家团队</span></a></li>--}}
                    {{--<li><a href="/admin/rcase" class=""><i class="lnr lnr-users"></i> <span>案例管理</span></a></li>--}}
                    {{--<li><a href="/admin/car" class=""><i class="lnr lnr-car"></i> <span>车型管理</span></a></li>--}}
                    {{--<li><a href="/admin/message" class=""><i class="lnr lnr-bubble"></i> <span>报价管理</span></a></li>--}}
                    {{--<li><a href="/admin/report" class=""><i class="lnr lnr-bubble"></i> <span>报告管理</span></a></li>--}}
                    {{--<li><a href="/admin/message" class=""><i class="lnr lnr-bubble"></i> <span>预约管理</span></a></li>--}}
                    {{--<li><a href="/admin/setting" class=""><i class="lnr lnr-cog"></i> <span>网站配置</span></a></li>--}}
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
            <p class="copyright">&copy; 2017  All Rights <a href="/" target="_blank" >sbTeam~</a>.  </p>
        </div>
    </footer>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->

</body>
</html>