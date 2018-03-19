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
    <link rel="stylesheet" href="{{ mix('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ mix('css/pages.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('style')
</head>
<body class="fixed-header">
    <!-- BEGIN SIDEBAR -->
    @include('layout/sidebar')
    <!-- END SIDEBAR -->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container">
        <!-- START PAGE HEADER WRAPPER -->
        @include('layout/header')
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
                            @yield('breadcrumb')
                            <!-- END BREADCRUMB -->
                        </div>
                    </div>
                </div>
                <!-- END JUMBOTRON -->
                <!-- START CONTAINER FLUID -->
                <div class="container-fluid container-fixed-lg">
                    <!-- BEGIN PlACE PAGE CONTENT HERE -->
                    @yield('content')
                    <!-- END PLACE PAGE CONTENT HERE -->
                </div>
                <!-- END CONTAINER FLUID -->
            </div>
            <!-- END PAGE CONTENT -->
            <!-- START FOOTER -->
            @include('layout/footer')
            <!-- END FOOTER -->
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    <!--START QUICKVIEW -->
    @include('layout/quickview')
    <!-- END QUICKVIEW-->
    <!-- START OVERLAY SEARCH -->
    @include('layout/search')
    <!-- END OVERLAY SEARCH -->

    <!-- BEGIN VENDOR JS -->
    <script type="text/javascript" src="{{ mix('js/modernizr.custom.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/jquery.ioslist.min.js') }}"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script type="text/javascript" src="{{ mix('js/pages.js') }}"></script>
    <!-- END CORE TEMPLATE JS -->
@yield('script')
</body>
</html>