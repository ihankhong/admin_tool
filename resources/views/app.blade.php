<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Tool</title>

    <link rel="apple-touch-icon" href="{{ asset('image/app_icon/60.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('image/app_icon/76.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('image/ap_icon/120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('image/app_icon/152.png') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">

    <meta content="" name="description" />
    <meta content="" name="author" />

    <script type="text/javascript" src="{{ mix('js/manifest.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/vendor.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ mix('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/pages.css') }}">
</head>
<body class="fixed-header">
    <!-- BEGIN SIDEBAR -->
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
        <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
        <div class="sidebar-overlay-slide from-top" id="appMenu">

        </div>
        <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
        <!-- BEGIN SIDEBAR MENU HEADER-->
        <div class="sidebar-header">
            <img src="{{ asset('image/logo_white.png') }}" alt="logo" class="brand" data-src="{{ asset('image/logo_white.png') }}" data-src-retina="{{ asset('image/logo_white_2x.png') }}" width="78" height="22">
            <div class="sidebar-header-controls">
                <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i></button>
                <button type="button" class="btn btn-link hidden-sm-down" data-toggle-pin="sidebar"><i class="fa fs-12"></i></button>
            </div>
        </div>
        <!-- END SIDEBAR MENU HEADER-->
        <!-- START SIDEBAR MENU -->
        <div class="sidebar-menu">
            <!-- BEGIN SIDEBAR MENU ITEMS-->
            <ul class="menu-items">
                <li class="m-t-30">
                    <a href="#" class="detailed">
                        <span class="title">Page 1</span>
                        <span class="details">234 notifications</span>
                    </a>
                    <span class="icon-thumbnail "><i class="pg-mail"></i></span>
                </li>
                <li class="">
                    <a href="#"><span class="title">Page 2</span></a>
                    <span class="icon-thumbnail "><i class="pg-social"></i></span>
                </li>
                <li class="">
                    <a href="javascript:;"><span class="title">Page 3</span><span class=" arrow"></span></a>
                    <span class="icon-thumbnail"><i class="pg-grid"></i></span>
                    <ul class="sub-menu">
                        <li class="">
                            <a href="#">Sub Page 1</a>
                            <span class="icon-thumbnail">sp</span>
                        </li>
                        <li class="">
                            <a href="#">Sub Page 2</a>
                            <span class="icon-thumbnail">sp</span>
                        </li>
                        <li class="">
                            <a href="#">Sub Page 3</a>
                            <span class="icon-thumbnail">sp</span>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBPANEL -->
    <!-- END SIDEBAR -->
fas：<i class="fas fa-address-book"></i><br>
fab：<i class="fab fa-facebook-f"></i><br>
far：<i class="far fa-address-book"></i>
</body>
</html>