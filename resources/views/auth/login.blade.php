<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
    <link rel="stylesheet" href="{{ mix('css/pages.css') }}" class="main-stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="fixed-header">
    <div class="login-wrapper">
        <!-- START Login Background Pic Wrapper-->
        <div class="bg-pic">
            <!-- START Background Pic-->
            <img src="{{ asset('images/bg.jpg') }}" data-src="{{ asset('images/bg.jpg') }}" data-src-retina="{{ asset('images/bg.jpg') }}" alt="" class="lazy">
            <!-- END Background Pic-->
            <!-- START Background Caption-->
            <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
                <h2 class="semi-bold text-white">Pages make it easy to enjoy what matters the most in the life</h2>
                <p class="small">images Displayed are solely for representation purposes only, All work copyright of respective owner, otherwise © 2013-2014 REVOX.</p>
            </div>
            <!-- END Background Caption-->
        </div>
        <!-- END Login Background Pic Wrapper-->
        <!-- START Login Right Container-->
        <div class="login-container bg-white">
            <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
                <img src="{{ asset('images/logo_2x.png') }}" alt="logo" data-src="{{ asset('images/logo_2x.png') }}" data-src-retina="{{ asset('images/logo_2x.png') }}" width="78" height="22">
                <p class="p-t-35">Sign into your pages account</p>
                <!-- START Login Form -->
                <form id="form-login" class="p-t-15" role="form" action="index.html">
                    <!-- START Form Control-->
                    <div class="form-group form-group-default">
                        <label>Login</label>
                        <div class="controls">
                            <input type="text" name="username" placeholder="User Name" class="form-control" required>
                        </div>
                    </div>
                    <!-- END Form Control-->
                    <!-- START Form Control-->
                    <div class="form-group form-group-default">
                        <label>Password</label>
                        <div class="controls">
                            <input type="password" class="form-control" name="password" placeholder="Credentials" required>
                        </div>
                    </div>
                    <!-- START Form Control-->
                    <div class="row">
                        <div class="col-md-6 no-padding sm-p-l-10">
                            <div class="checkbox ">
                                <input type="checkbox" value="1" id="checkbox1">
                                <label for="checkbox1">Keep Me Signed in</label>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-end">
                            <a href="#" class="text-info small">Help? Contact Support</a>
                        </div>
                    </div>
                    <!-- END Form Control-->
                    <button class="btn btn-primary btn-cons m-t-10" type="submit">Sign in</button>
                </form>
                <!--END Login Form-->
                <div class="pull-bottom sm-pull-bottom">
                    <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
                        <div class="col-sm-3 col-md-2 no-padding">
                            <img alt="" class="m-t-5" data-src="{{ asset('images/pages_icon.png') }}" data-src-retina="{{ asset('images/pages_icon_2x.png') }}" height="60" src="{{ asset('images/pages_icon.png') }}" width="60">
                        </div>
                        <div class="col-sm-9 no-padding m-t-10">
                            <p>
                                <small>Create a pages account. If you have a facebook account, log into it for this process. Sign in with <a href="#" class="text-info">Facebook</a> or <a href="#" class="text-info">Google</a></small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Login Right Container-->
    </div>

    <!-- BEGIN VENDOR JS -->
    <script type="text/javascript" src="{{ mix('js/modernizr.custom.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/jquery.ioslist.min.js') }}"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script type="text/javascript" src="{{ mix('js/pages.js') }}"></script>
    <!-- END CORE TEMPLATE JS -->
</body>
</html>