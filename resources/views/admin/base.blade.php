<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>诺航后台管理</title>

    <link href="http://7xtfzn.com1.z0.glb.clouddn.com/Fontawesom/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://7xtfzn.com1.z0.glb.clouddn.com/Fontawesom/css/font-awesome-ie7.min.css" rel="stylesheet">
    <link href="http://cdn.bootcss.com/animate.css/3.5.2/animate.min.css" rel="stylesheet">
    <link href="{{ asset('akl/UI/Aikla/css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script type="text/javascript" src="{{ asset('akl/jQuery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('akl/Layer/layer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('akl/UI/Aikla/js/plugin.js') }}"></script>
    <script type="text/javascript" src="{{ asset('akl/UI/Aikla/js/base.js') }}"></script>
</head>
<body id="admin">
<div class="full-view">
    <div id="top-bar" class="main-view">

        <a href="/" clss="fl logo" style="display: inline-block;float:left;" >
{{--            <img src={{ session()->get('doain')->logo }} style="width: 200px;height: 59px;" />--}}
        </a>

        <ul class="fl menu">
            <li>
                <a class="fstMenu" href="/admin/head_img"><i class="fa fa-file-text-o"></i> 导航图</a>
            </li>
            <li>
                <a class="fstMenu" href="/admin/product"><i class="fa fa-user"></i> 业务范围</a>
            </li>
            {{--<li>--}}
                {{--<a class="fstMenu" href="/goods"><i class="fa fa-check-square-o"></i> 商品管理</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a class="fstMenu" href="/scalp_order"><i class="fa fa-check-square-o"></i> 刷单记录</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a class="fstMenu" href="/evaluate"><i class="fa fa-check-square-o"></i> 评价管理</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a class="fstMenu" href="/area"><i class="fa fa-check-square-o"></i> 省市地区</a>--}}
            {{--</li>--}}
            {{--@if(Auth::user()->partid==1)--}}
                {{--<li>--}}
                    {{--<a class="fstMenu" href="/Admin/Nav"><i class="fa fa-bars"></i> 导航管理</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a class="fstMenu" href="/Admin/Department"><i class="fa fa-bars"></i> 子站管理</a>--}}
                {{--</li>--}}
            {{--@endif--}}
            {{--<li>--}}
                {{--<a class="fstMenu" href="/Admin/Composition"><i class="fa fa-check-square-o"></i> 菜单</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a class="fstMenu" href="/Admin/Design"><i class="fa fa-check-square-o"></i> 菜单</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a class="fstMenu" href="/Admin/Tool"><i class="fa fa-check-square-o"></i> 菜单</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a class="fstMenu" href="/Admin/Style"><i class="fa fa-check-square-o"></i> 菜单</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a class="fstMenu" href="/Admin/config/config"><i class="fa fa-check-square-o"></i> 菜单</a>--}}
            {{--</li>--}}

        </ul>
        <a class="login-out" href="/admin/logout"><i class="fa fa-sign-out"></i> 退出登陆</a>
{{--        <a class="login-out" >{{ Auth::user()->name }}</a>--}}
    </div>
    <div id="left-bar" class="left-view">
        <ul class="nav">
            <li >
                <a class="menu" href="/admin/head_img">
                    <i class="fa fa-file-text-o"></i>
                    <span>导航图</span>
                </a>
            </li>
            <li>
                <a class="menu" href="/admin/product" style="margin-top: 10px">
                    <i class="fa fa-user"></i>
                    <span>业务范围</span>
                </a>
            </li>
            {{--<li>--}}
                {{--<a class="menu" href="/goods" style="margin-top: 10px">--}}
                    {{--<i class="fa fa-check-square-o"></i>--}}
                    {{--<span>商品</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a class="menu" href="/scalp_order" style="margin-top: 10px">--}}
                    {{--<i class="fa fa-check-square-o"></i>--}}
                    {{--<span>刷单</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a class="menu" href="/evaluate" style="margin-top: 10px">--}}
                    {{--<i class="fa fa-check-square-o"></i>--}}
                    {{--<span>评价</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a class="menu" href="/area" style="margin-top: 10px">--}}
                    {{--<i class="fa fa-check-square-o"></i>--}}
                    {{--<span>地区</span>--}}
                {{--</a>--}}
            {{--</li>--}}

            {{--@if(Auth::user()->partid==1)--}}
                {{--<li>--}}
                    {{--<a class="menu" href="/Admin/Nav">--}}
                        {{--<i class="fa fa-bars"></i>--}}
                        {{--<span>导航</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a class="menu" href="/Admin/Department">--}}
                        {{--<i class="fa fa-bars"></i>--}}
                        {{--<span>子站</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--@endif--}}
            {{--<li>--}}
                {{--<a class="menu" href="/Admin/Composition">--}}
                    {{--<i class="fa fa-check-square-o"></i>--}}
                    {{--<span>菜单</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a class="menu" href="/Admin/Design">--}}
                    {{--<i class="fa fa-check-square-o"></i>--}}
                    {{--<span>菜单</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a class="menu" href="/Admin/config/config">--}}
                    {{--<i class="fa fa-check-square-o"></i>--}}
                    {{--<span>菜单</span>--}}
                {{--</a>--}}
            {{--</li>--}}
        </ul>
    </div>
    <div id="right-bar" class="clear">
        <div class="main">
            @yield('content')
        </div>
    </div>
</div>
<div style="position: absolute;left: 45%;margin-top: 30%">
    <h1>诺航网络科技有限公司</h1>
</div>
</body>
</html>