@extends('auth.app')

@section('content')
    <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
        <img src="{{ asset('images/logo_2x.png') }}" class="img-fluid" alt="logo" data-src="{{ asset('images/logo_2x.png') }}" data-src-retina="{{ asset('images/logo_2x.png') }}" width="120">
        <p class="p-t-35">Reset Password</p>
        <!-- START Forgot Password Form -->
        {!! Form::open(['route' => 'password.email', 'class' => 'p-t-15', 'id' => 'form-forgotPassword', 'role' => 'form']) !!}
            <!-- START Form Control-->
            <div class="form-group form-group-default">
                {!! Form::label('email', 'E-Mail Address', ['class' => 'control-label']) !!}
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'E-Mail', 'required' => 'required']) !!}
            </div>
            <!-- END Form Control-->
            <button class="btn btn-primary btn-cons m-t-10" type="submit">Send Password Reset Link</button>
        {!! Form::close() !!}
        <!-- END Forgot Password Form -->
        {{-- START Forgot Password Status --}}
        @if (session('status'))
            <div class="alert alert-success m-t-20">
                {{ session('status') }}
            </div>
        @endif
        {{-- END Forgot Password Status --}}
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
    $('#form-forgotPassword').validate()
})
</script>
@endsection
