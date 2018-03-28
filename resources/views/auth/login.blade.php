@extends('auth.app')

@section('content')
    <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
        <img src="{{ asset('images/logo_2x.png') }}" class="img-fluid" alt="logo" data-src="{{ asset('images/logo_2x.png') }}" data-src-retina="{{ asset('images/logo_2x.png') }}" width="120">
        <p class="p-t-35">Sign into your pages account</p>
        <!-- START Login Form -->
        {!! Form::open(['class' => 'p-t-15', 'id' => 'form-login', 'role' => 'form']) !!}
            <!-- START Form Control-->
            <div class="form-group form-group-default">
                {!! Form::label('username', null, ['class' => 'control-label']) !!}
                {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'User Name', 'required' => 'required']) !!}
            </div>
            <!-- END Form Control-->
            <!-- START Form Control-->
            <div class="form-group form-group-default">
                {!! Form::label('password', null, ['class' => 'control-label']) !!}
                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Credentials', 'required' => 'required']) !!}
            </div>
            <!-- END Form Control-->
            <div class="row">
                <div class="col-md-6 no-padding sm-p-l-10">
                    <div class="form-group">
                        <div class="checkbox">
                            {!! Form::checkbox('remember', 1, null, ['id' => 'remember']) !!}
                            {!! Form::label('remember', 'Remember Me', ['class' => 'control-label']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-end">
                    <div class="form-group">
                        <a href="{{ route('password.request') }}" class="btn btn-link text-info small">Forgot Your Password?</a>
                    </div>
                </div>
            </div>
            <div class="btns">
                <button class="btn btn-primary btn-cons btn-block m-t-10" type="submit">Sign in</button>
                <p>沒有帳號?<a href="#">註冊會員</a></p>
            </div>

        {!! Form::close() !!}
        <!--END Login Form-->
        {{-- START Login Errors --}}
        @if (count($errors) > 0)
            <div class="alert alert-danger m-t-20">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- END Login Errors --}}
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
    $('#form-login').validate()
})
</script>
@endsection
