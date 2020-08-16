<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>BODC APPS</title>
    <link rel="apple-touch-icon" href="{{asset('mmenu/assets/images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("mmenu/assets/images/fav-icon.png")}}">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset("global/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("global/css/bootstrap-extend.min.css")}}">
    <link rel="stylesheet" href="{{asset("mmenu/assets/css/site.min.css")}}">
    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset("global/vendor/animsition/animsition.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/asscrollable/asScrollable.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/switchery/switchery.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/intro-js/introjs.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/slidepanel/slidePanel.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/jquery-mmenu/jquery-mmenu.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/waves/waves.css")}}">
    <link rel="stylesheet" href="{{asset("mmenu/assets/examples/css/dashboard/v1.css")}}">
    <link rel="stylesheet" href="{{asset("plugin/lightbox/dist/css/lightbox.min.css")}}">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset("global/fonts/material-design/material-design.min.css")}}">
    <link rel="stylesheet" href="{{asset("global/fonts/brand-icons/brand-icons.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/custom.css")}}">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    <!-- Scripts -->
    @yield('link')
    <script src="{{asset("global/vendor/breakpoints/breakpoints.js")}}"></script>
    <script>
        Breakpoints();
    </script>
</head>
<body class="animsition site-navbar-small dashboard">
<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    <div class="navbar-header" style="background-color: #e0e0e0;">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
                data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
                data-toggle="collapse">
            <i class="icon md-more" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
            <img class="navbar-brand-logo" src="{{asset("mmenu/assets/images/logo.png")}}" title="DEGADAI">
            <span class="navbar-brand-text hidden-xs-down" style="color: #242C43">DEGADAI</span>
        </div>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
                data-toggle="collapse">
            <span class="sr-only">Toggle Search</span>
            <i class="icon md-search" aria-hidden="true"></i>
        </button>
    </div>
    <div class="navbar-container container-fluid">
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <ul class="nav navbar-toolbar">
                <li class="nav-item hidden-float" id="toggleMenubar">
                    <a class="nav-link" data-toggle="menubar" href="#" role="button">
                        <i class="icon hamburger hamburger-arrow-left">
                            <span class="sr-only">Toggle menubar</span>
                            <span class="hamburger-bar"></span>
                        </i>
                    </a>
                </li>
                <li class="nav-item hidden-sm-down" id="toggleFullscreen">
                    <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                        <span class="sr-only">Toggle fullscreen</span>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link navbar-avatar account-button" data-toggle="dropdown" href="#"
                       aria-expanded="false"
                       data-animation="scale-up"
                       role="button">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->name }}} <b>({{$adminType}})</b> &nbsp;
                        <span class="avatar avatar-online">
                          <img src="{{asset("global/portraits/5.jpg")}}" alt="...">
                          <i></i>
                        </span>
                    </a>
                    <div class="dropdown-menu account-dropdown" role="menu">
                        <a class="dropdown-item" href="{{ route('web.logout') }}">
                            <i class="icon md-power" aria-hidden="true"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
            <form role="search">
                <div class="form-group">
                    <div class="input-search">
                        <i class="input-search-icon md-search" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="site-search" placeholder="Search...">
                        <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search"
                                data-toggle="collapse" aria-label="Close"></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</nav>
<div class="site-menubar" style="background-color: #242c43;">
    <ul class="site-menu">
        @foreach($adminAuthCode as $menu)
            @if($menu->menu_authorization_id == Config::get('constants')['MIX_DASHBOARD'])
                @if($menu->authorization_code != 0)
                    <li class="site-menu-item">
                        <a class="animsition-link" href="{{url('dashboard')}}" style="color: #ffffff">
                            <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Dashboard</span>
                        </a>
                    </li>
                @endif
            @endif
        @endforeach

        @if(Auth::user()->admin_type_id == '1' && $parents->admins > 0)
            <li class="site-menu-item {{ Request::is('admin', 'admin-type', 'admin-authorization') ? 'active' : '' }}">
                <a href="javascript:void(0)" style="color: #ffffff">
                    <i class="site-menu-icon md-account" aria-hidden="true"></i>
                    <span class="site-menu-title">Admins</span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_ADMIN'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('admin')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Admins</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_ADMIN_TYPE'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('admin-type')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Admin Types</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_ADMIN_AUTHORIZATION'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('admin-authorization')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Admin Authorization</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach
                </ul>
            </li>
        @endif

        @if($parents->frontliners > 0)
            <li class="site-menu-item {{ Request::is('fl-user','fl-schedule') ? 'active' : '' }}">
                <a href="javascript:void(0)" style="color: #ffffff">
                    <i class="site-menu-icon md-account" aria-hidden="true"></i>
                    <span class="site-menu-title">Front Liners</span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_APPOINTMENT'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('appointment')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Appointment</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_FL_USERS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('fl-user')}}" style="color: #ffffff">
                                        <span class="site-menu-title">FL Users</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_FL_SCHEDULES'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('fl-schedule')}}" style="color: #ffffff">
                                        <span class="site-menu-title">FL Schedules</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_ATTENDANCE'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('attendance')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Attendances</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach
                </ul>
            </li>
        @endif

        @foreach($adminAuthCode as $menu)
            @if($menu->menu_authorization_id == Config::get('constants')['MIX_HOME_BANNER'])
                @if($menu->authorization_code != 0)
                    <li class="site-menu-item">
                        <a class="animsition-link" href="{{url('home-banner')}}" style="color: #ffffff">
                            <i class="site-menu-icon md-home" aria-hidden="true"></i>
                            <span class="site-menu-title">Home Banners</span>
                        </a>
                    </li>
                @endif
            @endif
        @endforeach

        @foreach($adminAuthCode as $menu)
            @if($menu->menu_authorization_id == Config::get('constants')['MIX_COMPANY'])
                @if($menu->authorization_code != 0)
                    <li class="site-menu-item">
                        <a class="animsition-link" href="{{url('company')}}" style="color: #ffffff">
                            <i class="site-menu-icon md-city-alt" aria-hidden="true"></i>
                            <span class="site-menu-title">Companies</span>
                        </a>
                    </li>
                @endif
            @endif
        @endforeach

        @if($parents->partners > 0)
            <li class="site-menu-item {{ Request::is('partner', 'partner-stores', 'partner-admin', 'warehouse', 'partner-push-notification') ? 'active' : '' }}">
                <a href="javascript:void(0)" style="color: #ffffff">
                    <i class="site-menu-icon md-account" aria-hidden="true"></i>
                    <span class="site-menu-title">Partners</span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_PARTNERS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('partner')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Partners</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_PARTNER_STORES'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('partner-stores')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Partner Stores</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_PARTNER_ADMINS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('partner-admin')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Partner Admins</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_WAREHOUSE'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('warehouse')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Warehouse</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_PARTNER_PUSH_NOTIFICATION'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('partner-push-notification')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Partners Push Notifications</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach
                </ul>
            </li>
        @endif

        @if($parents->products > 0)
            <li class="site-menu-item {{ Request::is('products', 'partner-products', 'products-fields', 'category', 'sections', 'gold-price', 'product-brand', 'product-model', 'product-type', 'necessary-documents') ? 'active' : '' }}">
                <a href="javascript:void(0)" style="color: #ffffff">
                    <i class="site-menu-icon md-label" aria-hidden="true"></i>
                    <span class="site-menu-title">Products</span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_PRODUCTS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('products')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Products</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_PARTNER_PRODUCTS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('partner-products')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Partner Products</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_PRODUCT_FIELDS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('products-fields')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Product Fields</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_CATEGORY'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('category')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Category</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_SECTIONS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('sections')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Sections</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_GOLD_PRICE'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('gold-price')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Gold Price</span>
                                    </a>
                                <li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_PRODUCT_BRANDS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('product-brand')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Products Brands</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_PRODUCT_MODELS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('product-model')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Products Models</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_PRODUCT_TYPES'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('product-type')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Product Types</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_NECESSARY_DOCUMENTS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('necessary-documents')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Necessary Documents</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach
                </ul>
            </li>
        @endif

        @if($parents->customers > 0)
            <li class="site-menu-item {{ Request::is('customer', 'customer-otp', 'customer-login', 'customer-push-notification', 'customer-referal') ? 'active' : '' }}">
                <a href="javascript:void(0)" style="color: #ffffff">
                    <i class="site-menu-icon md-accounts" aria-hidden="true"></i>
                    <span class="site-menu-title">Customers</span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_CUSTOMERS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('customer')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Customers</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_CUSTOMER_OTPS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('customer-otp')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Customer Otps</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_CUSTOMER_LOGINS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('customer-login')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Customer Logins</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_CUSTOMER_NOTIFICATIONS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('customer-push-notification')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Customer Notifications</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_CUSTOMER_REFERALS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('customer-referal')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Customer Referals</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach
                </ul>
            </li>
        @endif

        @if($parents->reminders > 0)
            <li class="site-menu-item {{ Request::is('reminder', 'reminder-list-status') ? 'active' : '' }}">
                <a href="javascript:void(0)" style="color: #ffffff">
                    <i class="site-menu-icon md-notifications" aria-hidden="true"></i>
                    <span class="site-menu-title">Reminders</span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_REMINDERS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('reminder')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Reminders</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_REMINDER_LIST_STATUS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('reminder-list-status')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Reminder List Status</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach
                </ul>
            </li>
        @endif

        @if($parents->campaigns > 0)
            <li class="site-menu-item {{ Request::is('campaign', 'priority') ? 'active' : '' }}">
                <a href="javascript:void(0)" style="color: #ffffff">
                    <i class="site-menu-icon md-flag"></i>
                    <span class="site-menu-title">Campaigns</span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_CAMPAIGNS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('campaign')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Campaign</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_PRIORITY'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('priority')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Priority</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_PAYMENTS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('#')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Payment</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_USER_GROUP'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('#')}}" style="color: #ffffff">
                                        <span class="site-menu-title">User Group</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_ANALYTIC'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('#')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Analytic</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach
                </ul>
            </li>
        @endif

        @if($parents->payments > 0)
            <li class="site-menu-item {{ Request::is('payment-method', 'payment-instruction') ? 'active' : '' }}">
                <a href="javascript:void(0)" style="color: #ffffff">
                    <i class="site-menu-icon md-card" aria-hidden="true"></i>
                    <span class="site-menu-title">Payments</span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_PAYMENT_METHODS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('payment-method')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Payment Methods</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_PAYMENT_INSTRUCTIONS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('payment-instruction')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Payment Instructions</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach
                </ul>
            </li>
        @endif

        @if($parents->tenors > 0)
            <li class="site-menu-item {{ Request::is('tenor', 'tenor-product') ? 'active' : '' }}">
                <a href="javascript:void(0)" style="color: #ffffff">
                    <i class="site-menu-icon md-book" aria-hidden="true"></i>
                    <span class="site-menu-title">Tenors</span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_TENORS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('tenor')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Tenors</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach
                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_TENOR_PRODUCTS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('tenor-product')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Tenor Products</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach
                </ul>
            </li>
        @endif

        @if($parents->places > 0)
            <li class="site-menu-item {{ Request::is('province', 'city', 'region') ? 'active' : '' }}">
                <a href="javascript:void(0)" style="color: #ffffff">
                    <i class="site-menu-icon md-map" aria-hidden="true"></i>
                    <span class="site-menu-title">Places</span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_PROVINCES'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('province')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Provinces</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_CITIES'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('city')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Cities</span>
                                    </a>
                                </li>
                                @endif
                            @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_REGIONS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('region')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Regions</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach
                </ul>
            </li>
        @endif

        @if($parents->storages > 0)
            <li class="site-menu-item {{ Request::is('notification-storage', 'qr-code-storage') ? 'active' : '' }}">
                <a href="javascript:void(0)" style="color: #ffffff">
                    <i class="site-menu-icon md-storage" aria-hidden="true"></i>
                    <span class="site-menu-title">Storages</span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_NOTIFICATION_STORAGES'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('notification-storage')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Notification Storages</span>
                                    </a>
                                <li>
                            @endif
                        @endif
                    @endforeach
                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_QR_CODE_STORAGES'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('qr-code-storage')}}" style="color: #ffffff">
                                        <span class="site-menu-title">QR Code Storages</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach
                </ul>
            </li>
        @endif

        @if($parents->loan_transactions > 0)
            <li class="site-menu-item {{ Request::is('loan-transaction', 'loan-transaction-failed','items-in-sales','items-already-sold','completed-transaction','history-transaction') ? 'active' : '' }}">
                <a href="javascript:void(0)" style="color: #ffffff">
                    <i class="site-menu-icon md-balance-wallet" aria-hidden="true"></i>
                    <span class="site-menu-title">Transactions</span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_LOAN_TRANSACTIONS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('loan-transaction')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Loan Transactions</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_LOAN_TRANSACTIONS_FAILED'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('loan-transaction-failed')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Loan Transactions Failed</span>
                                    </a>
                                </li>
                                @endif
                            @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_ITEMS_IN_SALE'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('items-in-sales')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Items in Sale</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_ITEMS_ALREADY_SOLD'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('items-already-sold')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Items Already Sold</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_COMPLETED_TRANSACTIONS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a href="{{url('completed-transaction')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Completed Transaction</span>
                                    </a>
                                <li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_HISTORY_TRANSACTIONS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('history-transaction')}}" style="color: #ffffff">
                                        <span class="site-menu-title">History Transactions</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach
                </ul>
            </li>
        @endif

        @foreach($adminAuthCode as $menu)
            @if($menu->menu_authorization_id == Config::get('constants')['MIX_LOAN_TRANSACTIONS_APPROVAL'])
                @if($menu->authorization_code != 0)
                    <li class="site-menu-item">
                        <a href="{{url('loan-transaction-approval')}}" style="color: #ffffff">
                            <i class="site-menu-icon md-check-all"></i>
                            <span class="site-menu-title">Loan Transactions Approval</span>
                        </a>
                    <li>
                @endif
            @endif
        @endforeach

        @foreach($adminAuthCode as $menu)
            @if($menu->menu_authorization_id == Config::get('constants')['MIX_BANK_PAYMENTS_APPROVAL'])
                @if($menu->authorization_code != 0)
                    <li class="site-menu-item">
                        <a href="{{url('bank-payment-approval')}}" style="color: #ffffff">
                            <i class="site-menu-icon md-balance"></i>
                            <span class="site-menu-title">Bank Payments Approval</span>
                        </a>
                    <li>
                @endif
            @endif
        @endforeach

        @foreach($adminAuthCode as $menu)
            @if($menu->menu_authorization_id == Config::get('constants')['MIX_PAWN_BREAKERS_APPROVAL'])
                @if($menu->authorization_code != 0)
                    <li class="site-menu-item">
                        <a href="{{url('pawn-breaker-approval')}}" style="color: #ffffff">
                            <i class="site-menu-icon md-block"></i>
                            <span class="site-menu-title">Pawn Breakers Approval</span>
                        </a>
                    <li>
                @endif
            @endif
        @endforeach

        @foreach($adminAuthCode as $menu)
            @if($menu->menu_authorization_id == Config::get('constants')['MIX_PROOF_OF_PAYMENTS_APPROVAL'])
                @if($menu->authorization_code != 0)
                    <li class="site-menu-item">
                        <a href="{{url('payment-proof')}}" style="color: #ffffff">
                            <i class="site-menu-icon md-money-box"></i>
                            <span class="site-menu-title">Proof of Payments Approval</span>
                        </a>
                    <li>
                @endif
            @endif
        @endforeach

        @if($parents->rebooks > 0)
            <li class="site-menu-item {{ Request::is('rebook-approval', 'rebook-payment-approval') ? 'active' : '' }}">
                <a href="javascript:void(0)" style="color: #ffffff">
                    <i class="site-menu-icon md-notifications" aria-hidden="true"></i>
                    <span class="site-menu-title">Rebooks</span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_REBOOKS_APPROVAL'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('rebook-approval')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Rebooks Approval</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_REBOOK_PAYMENTS_APPROVAL'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{url('rebook-payment-approval')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Rebook Payments Approval</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach
                </ul>
            </li>
        @endif

        @foreach($adminAuthCode as $menu)
            @if($menu->menu_authorization_id == Config::get('constants')['MIX_REPRESENTATIVE_CUSTOMERS'])
                @if($menu->authorization_code != 0)
                    <li class="site-menu-item">
                        <a href="{{url('representative-customer')}}" style="color: #ffffff">
                            <i class="site-menu-icon md-assignment"></i>
                            <span class="site-menu-title">Representative Customers</span>
                        </a>
                    </li>
                @endif
            @endif
        @endforeach

        @if($parents->problem_feedbacks > 0)
            <li class="site-menu-item {{ Request::is('feedback', 'problem') ? 'active' : '' }}">
                <a href="javascript:void(0)" style="color: #ffffff">
                    <i class="site-menu-icon md-notifications" aria-hidden="true"></i>
                    <span class="site-menu-title">Problem and Feedback</span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_FEEDBACKS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a href="{{url('feedback')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Feedbacks</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach

                    @foreach($adminAuthCode as $menu)
                        @if($menu->menu_authorization_id == Config::get('constants')['MIX_PROBLEMS'])
                            @if($menu->authorization_code != 0)
                                <li class="site-menu-item">
                                    <a href="{{url('problem')}}" style="color: #ffffff">
                                        <span class="site-menu-title">Problems</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach
                </ul>
            </li>
        @endif

        @foreach($adminAuthCode as $menu)
            @if($menu->menu_authorization_id == Config::get('constants')['MIX_GLOBAL_SETTINGS'])
                @if($menu->authorization_code != 0)
                    <li class="site-menu-item">
                        <a href="{{url('global-setting')}}" style="color: #ffffff">
                            <i class="site-menu-icon md-globe"></i>
                            <span class="site-menu-title">Global Settings</span>
                        </a>
                    </li>
                @endif
            @endif
        @endforeach
    </ul>
</div>

<div class="page">
    @yield('content')
</div>

<footer class="site-footer" style="color: #242C43">
    <div class="site-footer-legal text-center">©
        <a class="text-center" style="color: #242C43" href="https://www.degadai.com/">PT.deGadai Solusi Utama</a>
    </div>
</footer>
<!-- Core  -->
<script src="{{asset("global/vendor/babel-external-helpers/babel-external-helpers.js")}}"></script>
<script src="{{asset("global/vendor/jquery/jquery.js")}}"></script>
<script src="{{asset("global/vendor/popper-js/umd/popper.min.js")}}"></script>
<script src="{{asset("global/vendor/bootstrap/bootstrap.js")}}"></script>
<script src="{{asset("global/vendor/animsition/animsition.js")}}"></script>
<script src="{{asset("global/vendor/mousewheel/jquery.mousewheel.js")}}"></script>
<script src="{{asset("global/vendor/asscrollbar/jquery-asScrollbar.js")}}"></script>
<script src="{{asset("global/vendor/asscrollable/jquery-asScrollable.js")}}"></script>
<script src="{{asset("global/vendor/waves/waves.js")}}"></script>
<!-- Plugins -->
<script src="{{asset("global/vendor/jquery-mmenu/jquery.mmenu.min.all.js")}}"></script>
<script src="{{asset("global/vendor/switchery/switchery.js")}}"></script>
<script src="{{asset("global/vendor/intro-js/intro.js")}}"></script>
<script src="{{asset("global/vendor/screenfull/screenfull.js")}}"></script>
<script src="{{asset("global/vendor/slidepanel/jquery-slidePanel.js")}}"></script>
<script src="{{asset("global/vendor/matchheight/jquery.matchHeight-min.js")}}"></script>
<script src="{{asset("global/vendor/peity/jquery.peity.min.js")}}"></script>
<script src="{{asset("global/js/Component.js")}}"></script>
<script src="{{asset("global/js/Plugin.js")}}"></script>
<script src="{{asset("global/js/Base.js")}}"></script>
<script src="{{asset("global/js/Config.js")}}"></script>
<script src="{{asset("mmenu/assets/js/Section/Menubar.js")}}"></script>
<script src="{{asset("mmenu/assets/js/Section/Sidebar.js")}}"></script>
<script src="{{asset("mmenu/assets/js/Section/PageAside.js")}}"></script>
<script src="{{asset("mmenu/assets/js/Section/GridMenu.js")}}"></script>
<script src="{{asset("global/js/config/colors.js")}}"></script>
<script src="{{asset("mmenu/assets/js/config/tour.js")}}"></script>
<script>Config.set('assets', '../assets');</script>
<script src="{{asset("mmenu/assets/js/Site.js")}}"></script>
<script src="{{asset("global/js/Plugin/asscrollable.js")}}"></script>
<script src="{{asset("global/js/Plugin/slidepanel.js")}}"></script>
<script src="{{asset("global/js/Plugin/switchery.js")}}"></script>
<script src="{{asset("global/js/Plugin/matchheight.js")}}"></script>
<script src="{{asset("global/js/Plugin/jvectormap.js")}}"></script>
<script src="{{asset("global/js/Plugin/peity.js")}}"></script>
<script src="{{asset("mmenu/assets/examples/js/dashboard/v1.js")}}"></script>

<script src="{{asset("plugin/lightbox/dist/js/lightbox.min.js")}}"></script>

<script type="text/javascript">
    $('.account-button').click(function () {
        if ($('.account-dropdown').hasClass('show')) {
            $('.account-dropdown').removeClass('show');
        } else {
            $('.account-dropdown').addClass('show');
        }
    });

    $(document).click(function () {
        $('.account-dropdown').removeClass('show');
    });
</script>
@yield('script')
</body>
</html>
