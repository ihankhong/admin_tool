<!-- START HEADER -->
<div class="header">
    <!-- START MOBILE SIDEBAR TOGGLE -->
    <a href="#" class="btn-link toggle-sidebar d-lg-none pg pg-menu" data-toggle="sidebar"></a>
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
                    @include('layout/header/notification')
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
                <a href="{{ route('logout') }}" class="clearfix bg-master-lighter dropdown-item" onclick="event.preventDefault();$('#logout-form').submit();"><span class="pull-left">Logout</span><span class="pull-right"><i class="pg-power"></i></span></a>
                {!! Form::open(['route' => 'logout', 'id' => 'logout-form', 'class' => 'hidden']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        <!-- END User Info-->
        <a href="#" class="header-icon pg pg-alt_menu btn-link m-l-10 sm-no-margin d-inline-block" data-toggle="quickview" data-toggle-element="#quickview"></a>
    </div>
</div>
<!-- END HEADER -->