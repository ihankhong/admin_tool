<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link rel="apple-touch-icon" href="{{ asset('images/app_icon/60.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/app_icon/76.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/ap_icon/120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/app_icon/152.png') }}">
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
            <img src="{{ asset('images/logo_white.png') }}" alt="logo" class="brand" data-src="{{ asset('images/logo_white.png') }}" data-src-retina="{{ asset('images/logo_white_2x.png') }}" width="78" height="22">
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
    <!-- START PAGE-CONTAINER -->
    <div class="page-container">
        <!-- START PAGE HEADER WRAPPER -->
        <!-- START HEADER -->
        <div class="header">
            <!-- START MOBILE SIDEBAR TOGGLE -->
            <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu" data-toggle="sidebar"></a>
            <!-- END MOBILE SIDEBAR TOGGLE -->
            <div class="">
                <div class="brand inline">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" data-src="{{ asset('images/logo.png') }}" data-src-retina="{{ asset('images/logo_2x.png') }}" width="78" height="22">
                </div>
                <!-- START NOTIFICATION LIST -->
                <ul class="hidden-md-down notification-list no-margin hidden-sm-down b-grey b-l b-r no-style p-l-30 p-r-20">
                    <li class="p-r-10 inline">
                        <div class="dropdown">
                            <a href="javascript:;" id="notification-center" class="header-icon pg pg-world" data-toggle="dropdown"><span class="bubble"></span></a>
                            <!-- START Notification Dropdown -->
                            <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
                                <!-- START Notification -->
                                <div class="notification-panel">
                                    <!-- START Notification Body-->
                                    <div class="notification-body scrollable">
                                        <!-- START Notification Item-->
                                        <div class="notification-item unread clearfix">
                                            <!-- START Notification Item-->
                                            <div class="heading open">
                                                <a href="#" class="text-complete pull-left"><i class="pg-map fs-16 m-r-10"></i><span class="bold">Carrot Design</span><span class="fs-12 m-l-10">David Nester</span></a>
                                                <div class="pull-right">
                                                    <div class="thumbnail-wrapper d16 circular inline m-t-15 m-r-10 toggle-more-details">
                                                        <div><i class="fa fa-angle-left"></i></div>
                                                    </div>
                                                    <span class=" time">few sec ago</span>
                                                </div>
                                                <div class="more-details">
                                                    <div class="more-details-inner">
                                                        <h5 class="semi-bold fs-16">“Apple’s Motivation - Innovation <br>distinguishes between <br>A leader and a follower.”</h5>
                                                        <p class="small hint-text">Commented on john Smiths wall.<br> via pages framework.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END Notification Item-->
                                            <!-- START Notification Item Right Side-->
                                            <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                                                <a href="#" class="mark"></a>
                                            </div>
                                            <!-- END Notification Item Right Side-->
                                        </div>
                                        <!-- START Notification Body-->
                                        <!-- START Notification Item-->
                                        <div class="notification-item clearfix">
                                            <div class="heading">
                                                <a href="#" class="text-danger pull-left"><i class="fas fa-exclamation-triangle m-r-10"></i><span class="bold">98% Server Load</span><span class="fs-12 m-l-10">Take Action</span></a>
                                                <span class="pull-right time">2 mins ago</span>
                                            </div>
                                            <!-- START Notification Item Right Side-->
                                            <div class="option">
                                                <a href="#" class="mark"></a>
                                            </div>
                                            <!-- END Notification Item Right Side-->
                                        </div>
                                        <!-- END Notification Item-->
                                        <!-- START Notification Item-->
                                        <div class="notification-item clearfix">
                                            <div class="heading">
                                                <a href="#" class="text-warning-dark pull-left"><i class="fas fa-exclamation-triangle m-r-10"></i><span class="bold">Warning Notification</span><span class="fs-12 m-l-10">Buy Now</span></a>
                                                <span class="pull-right time">yesterday</span>
                                            </div>
                                            <!-- START Notification Item Right Side-->
                                            <div class="option">
                                                <a href="#" class="mark"></a>
                                            </div>
                                            <!-- END Notification Item Right Side-->
                                        </div>
                                        <!-- END Notification Item-->
                                        <!-- START Notification Item-->
                                        <div class="notification-item unread clearfix">
                                            <div class="heading">
                                                <div class="thumbnail-wrapper d24 circular b-white m-r-5 b-a b-white m-t-10 m-r-10">
                                                    <img width="30" height="30" data-src-retina="{{ asset('images/profiles/1x.jpg') }}" data-src="{{ asset('images/profiles/1.jpg') }}" alt="" src="{{ asset('images/profiles/1.jpg') }}">
                                                </div>
                                                <a href="#" class="text-complete pull-left"><span class="bold">Revox Design Labs</span><span class="fs-12 m-l-10">Owners</span></a>
                                                <span class="pull-right time">11:00pm</span>
                                            </div>
                                            <!-- START Notification Item Right Side-->
                                            <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                                                <a href="#" class="mark"></a>
                                            </div>
                                            <!-- END Notification Item Right Side-->
                                        </div>
                                        <!-- END Notification Item-->
                                    </div>
                                    <!-- END Notification Body-->
                                    <!-- START Notification Footer-->
                                    <div class="notification-footer text-center">
                                        <a href="#" class="">Read all notifications</a>
                                        <a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#"><i class="pg-refresh_new"></i></a>
                                    </div>
                                    <!-- END Notification Footer-->
                                </div>
                                <!-- END Notification -->
                            </div>
                            <!-- END Notification Dropdown -->
                        </div>
                    </li>
                    <li class="p-r-10 inline">
                        <a href="#" class="header-icon pg pg-link"></a>
                    </li>
                    <li class="p-r-10 inline">
                        <a href="#" class="header-icon pg pg-thumbs"></a>
                    </li>
                </ul>
                <!-- END NOTIFICATIONS LIST -->
                <a href="#" class="search-link hidden-md-down" data-toggle="search"><i class="pg-search"></i>Type anywhere to <span class="bold">search</span></a>
            </div>
            <div class="d-flex align-items-center">
                <!-- START User Info-->
                <div class="pull-left p-r-10 fs-14 font-heading hidden-md-down">
                    <span class="semi-bold">David</span> <span class="text-master">Nest</span>
                </div>
                <div class="dropdown pull-right hidden-md-down">
                    <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="thumbnail-wrapper d32 circular inline"><img src="{{ asset('images/profiles/avatar.jpg') }}" alt="" data-src="{{ asset('images/profiles/avatar.jpg') }}" data-src-retina="{{ asset('images/profiles/avatar_small2x.jpg') }}" width="32" height="32"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                        <a href="#" class="dropdown-item"><i class="pg-settings_small"></i> Settings</a>
                        <a href="#" class="dropdown-item"><i class="pg-outdent"></i> Feedback</a>
                        <a href="#" class="dropdown-item"><i class="pg-signals"></i> Help</a>
                        <a href="#" class="clearfix bg-master-lighter dropdown-item"><span class="pull-left">Logout</span><span class="pull-right"><i class="pg-power"></i></span></a>
                    </div>
                </div>
                <!-- END User Info-->
                <a href="#" class="header-icon pg pg-alt_menu btn-link m-l-10 sm-no-margin d-inline-block" data-toggle="quickview" data-toggle-element="#quickview"></a>
            </div>
        </div>
        <!-- END HEADER -->
        <!-- END PAGE HEADER WRAPPER -->
        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper">
            <!-- START PAGE CONTENT -->
            <div class="content">
                <!-- START JUMBOTRON -->
                <div class="jumbotron" data-pages="parallax">
                    <div class=" container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
                        <div class="inner">
                            <!-- START BREADCRUMB -->
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Barebone</a></li>
                                <li class="breadcrumb-item active">Layout</li>
                            </ol>
                            <!-- END BREADCRUMB -->
                        </div>
                    </div>
                </div>
                <!-- END JUMBOTRON -->
                <!-- START CONTAINER FLUID -->
                <div class="container-fluid container-fixed-lg">
                    <!-- BEGIN PlACE PAGE CONTENT HERE -->
                    <!-- END PLACE PAGE CONTENT HERE -->
                </div>
                <!-- END CONTAINER FLUID -->
            </div>
            <!-- END PAGE CONTENT -->
            <!-- START FOOTER -->
            <div class="container-fluid container-fixed-lg footer">
                <div class="copyright sm-text-center">
                    <p class="small no-margin pull-left sm-pull-reset">
                        <span class="hint-text">Copyright © 2014</span>
                        <span class="font-montserrat">REVOX</span>.
                        <span class="hint-text">All rights reserved.</span>
                        <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a>
                        </span>
                    </p>
                    <p class="small no-margin pull-right sm-pull-reset">
                         <a href="#">Hand-crafted</a>
                        <span class="hint-text">&amp; Made with Love ®</span>
                    </p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->

    <script type="text/javascript" src="{{ mix('js/modernizr.custom.js') }}"></script>
    <!-- BEGIN CORE TEMPLATE JS -->
    <script type="text/javascript" src="{{ mix('js/pages.js') }}"></script>
    <!-- END CORE TEMPLATE JS -->
</body>
</html>