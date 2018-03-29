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
    <div class="register-container full-height sm-p-t-30">
        <div class="d-flex justify-content-center flex-column full-height">
            <img src="{{ asset('images/logo_2x.png') }}" class="img-fluid" alt="logo" data-src="{{ asset('images/logo_2x.png') }}" data-src-retina="{{ asset('images/logo_2x.png') }}" width="120">
            <h3>Pages makes it easy to enjoy what matters the most in your life</h3>
            <p>Create a pages account. If you have a facebook account, log into it for this process. Sign in with <a href="#" class="text-info">Facebook</a> or <a href="#" class="text-info">Google</a></p>
            {!! Form::open(['class' => 'p-t-15', 'id' => 'form-register', 'role' => 'form']) !!}
                <fieldset>
                    <legend class="section">基本設置</legend>
                    <div class="form-group form-group-default{{ $errors->has('nickname') ? ' has-error' : '' }}">
                        {!! Form::label('nickname', null, ['class' => 'control-label']) !!}
                        {!! Form::text('nickname', null, ['class' => 'form-control', 'placeholder' => '暱稱 or 真實姓名', 'required' => 'required']) !!}
                    </div>
                    {!! $errors->first('nickname', '<p class="error">:message</p>') !!}
                    <div class="form-group form-group-default{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email', null, ['class' => 'control-label']) !!}
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'E-Mail', 'required' => 'required']) !!}
                    </div>
                    {!! $errors->first('email', '<p class="error">:message</p>') !!}
                </fieldset>
                <fieldset>
                    <legend class="section">帳戶設置</legend>
                    <div class="form-group form-group-default{{ $errors->has('username') ? ' has-error' : '' }}">
                        {!! Form::label('username', null, ['class' => 'control-label']) !!}
                        {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'User Name', 'required' => 'required']) !!}
                    </div>
                    {!! $errors->first('username', '<p class="error">:message</p>') !!}
                    <div class="form-group form-group-default{{ $errors->has('password') ? ' has-error' : '' }}">
                        {!! Form::label('password', null, ['class' => 'control-label']) !!}
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '請輸入長度 6~30 的任意字元。', 'required' => 'required']) !!}
                    </div>
                    {!! $errors->first('password', '<p class="error">:message</p>') !!}
                    <div class="form-group form-group-default{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        {!! Form::label('password_confirmation', 'Confirm Password', ['class' => 'control-label']) !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => '請確認您的密碼。', 'required' => 'required']) !!}
                    </div>
                    {!! $errors->first('password_confirmation', '<p class="error">:message</p>') !!}
                </fieldset>
                <div class="row m-t-10">
                    <div class="col-lg-6">
                        <p><small>I agree to the <a href="#" class="text-info">Pages Terms</a> and <a href="#" class="text-info">Privacy</a>.</small></p>
                    </div>
                    <div class="col-lg-6 text-right">
                        <a href="#" class="text-info small">Help? Contact Support</a>
                    </div>
                </div>
                <button class="btn btn-primary btn-cons btn-block m-t-10" type="submit">Create a new account</button>
            {!! Form::close() !!}
            <form id="form-register" class="p-t-15" role="form" action="index.html">
        </div>
    </div>
    <div class=" full-width">
        <div class="register-container m-b-10 clearfix">
            <div class="m-b-30 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix d-flex-md-up">
                <div class="col-md-2 no-padding d-flex align-items-center">
                    <img alt="" class="" data-src="{{ asset('images/pages_icon.png') }}" data-src-retina="{{ asset('images/pages_icon_2x.png') }}" height="60" src="{{ asset('images/pages_icon.png') }}" width="60">
                </div>
                <div class="col-md-9 no-padding d-flex align-items-center">
                    <p class="hinted-text small inline sm-p-t-10 no-margin">No part of this website or any of its contents may be reproduced, copied, modified or adapted, without the prior written consent of the author, unless otherwise indicated for stand-alone materials.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN VENDOR JS -->
    <script type="text/javascript" src="{{ mix('js/modernizr.custom.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/jquery.ioslist.min.js') }}"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script type="text/javascript" src="{{ mix('js/pages.js') }}"></script>
    <!-- END CORE TEMPLATE JS -->

    <script>
    $(function()
    {
      $('#form-register').validate()
    })
    </script>
</body>
</html>