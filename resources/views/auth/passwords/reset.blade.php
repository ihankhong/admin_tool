@extends('auth.app')

@section('content')
    <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
        <img src="{{ asset('images/logo_2x.png') }}" class="img-fluid" alt="logo" data-src="{{ asset('images/logo_2x.png') }}" data-src-retina="{{ asset('images/logo_2x.png') }}" width="120">
        <p class="p-t-35">Reset Password</p>
        <!-- START Reset Password Form -->
        {!! Form::open(['route' => 'password.request', 'class' => 'p-t-15', 'id' => 'form-resetPassword', 'role' => 'form']) !!}
            {!! Form::hidden('token', $token) !!}
            <!-- START Form Control-->
            <div class="form-group form-group-default{{ $errors->has('email') ? ' has-error' : '' }}">
                {!! Form::label('email', 'E-Mail Address', ['class' => 'control-label']) !!}
                {!! Form::email('email', $email or old('email'), ['class' => 'form-control', 'placeholder' => 'E-Mail', 'required' => 'required', 'autofocus' => 'autofocus']) !!}
                {!! $errors->first('email', '<p class="help">:message</p>') !!}
            </div>
            <!-- END Form Control-->
            <!-- START Form Control-->
            <div class="form-group form-group-default{{ $errors->has('password') ? ' has-error' : '' }}">
                {!! Form::label('password', null, ['class' => 'control-label']) !!}
                <p class="help">請輸入長度 6~30 的任意字元。</p>
                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required']) !!}
                {!! $errors->first('password', '<p class="help">:message</p>') !!}
            </div>
            <!-- END Form Control-->
            <!-- START Form Control-->
            <div class="form-group form-group-default{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                {!! Form::label('password_confirmation', 'Confirm Password', ['class' => 'control-label']) !!}
                <p class="help">請確認您的密碼。</p>
                {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm', 'required' => 'required']) !!}
                {!! $errors->first('password_confirmation', '<p class="help">:message</p>') !!}
            </div>
            <!-- END Form Control-->
            <button class="btn btn-primary btn-cons m-t-10" type="submit">Reset Password</button>
        {!! Form::close() !!}
        <!--END Reset Password Form-->
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
@endsection

@section('script')
<script>
$(function() {
    $('#form-resetPassword').validate()
})
</script>
@endsection