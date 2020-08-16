<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta name="description" content="bootstrap material admin template" />
    <meta name="author" content="" />

    <title>BODC CYBER APPS | IMPUTER</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" href="../../assets/mmenu/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="../../assets/mmenu/assets/images/favicon.ico">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset("global/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("global/css/bootstrap-extend.min.css")}}">
    <link rel="stylesheet" href="{{asset("mmenu/assets/css/site.min.css")}}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset("global/vendor/animsition/animsition.css")}}" />
    <link rel="stylesheet" href="{{asset("global/vendor/asscrollable/asScrollable.css")}}" />
    <link rel="stylesheet" href="{{asset("global/vendor/switchery/switchery.css")}}" />
    <link rel="stylesheet" href="{{asset("global/vendor/intro-js/introjs.css")}}" />
    <link rel="stylesheet" href="{{asset("global/vendor/slidepanel/slidePanel.css")}}" />
    <link rel="stylesheet" href="{{asset("global/vendor/jquery-mmenu/jquery-mmenu.css")}}" />
    <link rel="stylesheet" href="{{asset("global/vendor/flag-icon-css/flag-icon.css")}}" />
    <link rel="stylesheet" href="{{asset("global/vendor/waves/waves.css")}}" />
    <link rel="stylesheet" href="{{asset("global/vendor/datatables.net-bs4/dataTables.bootstrap4.css")}}">
    <link rel="stylesheet"
        href="{{asset("global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css")}}">
    <link rel="stylesheet"
        href="{{asset("global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css")}}">
    <link rel="stylesheet"
        href="{{asset("global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css")}}">
    <link rel="stylesheet"
        href="{{asset("global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css")}}">
    <link rel="stylesheet"
        href="{{asset("global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css")}}">
    <link rel="stylesheet"
        href="{{asset("global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css")}}">
    <link rel="stylesheet" href="{{asset("mmenu/assets/examples/css/tables/datatable.css")}}">


    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset("global/fonts/font-awesome/font-awesome.css")}}">
    <link rel="stylesheet" href="{{asset("global/fonts/material-design/material-design.min.css")}}">
    <link rel="stylesheet" href="{{asset("global/fonts/brand-icons/brand-icons.min.css")}}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!-- Scripts -->
    <script src="{{asset("global/vendor/breakpoints/breakpoints.js")}}"></script>
    <script>
        Breakpoints();

    </script>
</head>

<body class="animsition site-navbar-small dashboard">
    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
        <div class="navbar-header">
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
                <img class="navbar-brand-logo" src="{{asset("mmenu/assets/images/logo.png")}}" title="Remark" />
                <span class="navbar-brand-text hidden-xs-down">BODC APPS</span>
            </div>
        </div>

        <div class="navbar-container container-fluid">
            <!-- Navbar Collapse -->
            <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
                <!-- Navbar Toolbar -->
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
                <!-- End Navbar Toolbar -->
                <!-- Navbar Toolbar Right -->
                <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                    <li class="nav-item dropdown">
                        <a href="{{ route('dashboard-validator') }}"
                            class="nav-link waves-effect waves-light waves-round">
                            <i class="icon md-arrow-left" style="font-size: 20px;">&nbsp;Back</i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                            data-animation="scale-up" role="button">
                            <span class="avatar avatar-online">
                                <img src="{{asset("global/portraits/5.jpg")}}" alt="..." />
                                <i></i>
                            </span>
                        </a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i
                                    class="icon md-account" aria-hidden="true"></i> {{ auth()->user()->name }}</a>
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i
                                    class="icon md-accounts-list" aria-hidden="true"></i>
                                {{ auth()->user()->username }}</a>
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i
                                    class="icon md-calendar" aria-hidden="true"></i>
                                {{  now()->toDateString('YYYY-mm-dd') }}</a>
                            <a class="dropdown-item" href="{{ route('web.logout') }}" role="menuitem"><i
                                    class="icon md-power" aria-hidden="true"></i> Logout</a>
                        </div>
                    </li>
                </ul>
                <!-- End Navbar Toolbar Right -->
            </div>
            <!-- End Navbar Collapse -->
        </div>
    </nav>
    <div class="site-menubar">
        <ul class="site-menu">
            <li class="site-menu-item active">
                <a class="animsition-link" href="index.html">
                    <i class="site-menu-icon icon md-home" style="font-size: 20px" aria-hidden="true"></i>
                    <span class="site-menu-title">All Data Report</span>
                </a>
            </li>
            <li class="site-menu-item has-sub">
                <a href="{{ route('daily-report-validator.index')}}">
                    <i class="site-menu-icon icon md-chart" style="font-size: 20px" aria-hidden="true"></i>
                    <span class="site-menu-title">Daily Report</span>
                </a>
            </li>
            <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                    <i class="site-menu-icon icon md-time" style="font-size: 20px" aria-hidden="true"></i>
                    <span class="site-menu-title">Hourly Report</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Page -->
    <div class="page">
        <div class="page-content container-fluid">
            <div class="row" data-plugin="matchHeight" data-by-row="true">
                <div class="col-xl-12 col-md-12 text-left mb-15">
                    <h2 style="color: #000000; margin-left: 65px;"><b>DAILY REPORT (TIMESHEET)</b></h2>
                </div>
            </div>
            <div class="container">
                <p style="color: #000000; margin-left: 45px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Nemo
                    accusamus corporis sequi in reiciendis minus
                    doloribus harum quisquam deleniti libero velit, facere fugit at sunt nesciunt earum placeat quo rem!
                </p>
            </div>
            <div class="page-content">
                <!-- Panel Basic -->
                <div class="panel" style="margin-left: 30px;">
                    <header class="panel-heading text-center">
                        <div class="panel-actions"></div>
                        <h1 class="panel-title"
                            style="background:#0267ca; color: #fff; font-size: large; text-align: left;">Unit
                            Status</h1>
                    </header>
                    <div class="panel-body mt-10">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{$message}}</p>
                        </div>
                        @endif
                        <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                            <thead>
                                <tr>
                                    <th>Unit</th>
                                    <th>Proses</th>
                                    <th>Aktivitas</th>
                                    <th>Loading Point</th>
                                    <th>Dumping Area</th>
                                    <th>Total Ritasi</th>
                                    <th>Status</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{csrf_field()}}
                                @foreach ($activities as $activity)
                                <tr>
                                    <td>{{ $activity->no_unit }}</td>
                                    <td>{{ $activity->id_proses }}</td>
                                    <td>{{ $activity->id_aktifitas }}</td>
                                    <td>{{ $activity->loading_point }}</td>
                                    <td>{{ $activity->dumping_area }}</td>
                                    <td>{{ $activity->total_ritasi }}</td>
                                    <td>{{ $activity->status }}</td>
                                    <td>
                                        <a href="{{ route('daily-report.update', $activity->no_unit) }}"
                                            class="button mr-10" data-id="{{$activity->no_unit}}">
                                            <i class="icon md-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End Panel Basic -->
            </div>
        </div>
    </div>
    <!-- End Page -->
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
    <script src="{{asset("global/vendor/datatables.net/jquery.dataTables.js")}}"></script>
    <script src="{{asset("global/vendor/datatables.net-bs4/dataTables.bootstrap4.js")}}"></script>
    <script src="{{asset("global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js")}}"></script>
    <script src="{{asset("global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js")}}"></script>
    <script src="{{asset("global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js")}}"></script>
    <script src="{{asset("global/vendor/datatables.net-scroller/dataTables.scroller.js")}}"></script>
    <script src="{{asset("global/vendor/datatables.net-responsive/dataTables.responsive.js")}}"></script>
    <script src="{{asset("global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js")}}"></script>
    <script src="{{asset("global/vendor/datatables.net-buttons/dataTables.buttons.js")}}"></script>
    <script src="{{asset("global/vendor/datatables.net-buttons/buttons.html5.js")}}"></script>
    <script src="{{asset("global/vendor/datatables.net-buttons/buttons.flash.js")}}"></script>
    <script src="{{asset("global/vendor/datatables.net-buttons/buttons.print.js")}}"></script>
    <script src="{{asset("global/vendor/datatables.net-buttons/buttons.colVis.js")}}"></script>
    <script src="{{asset("global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js")}}"></script>
    <script src="{{asset("global/vendor/asrange/jquery-asRange.min.js")}}"></script>
    <script src="{{asset("global/vendor/bootbox/bootbox.js")}}"></script>

    <!-- Scripts -->
    <script src="{{asset("global/js/Component.js")}}"></script>
    <script src="{{asset("global/js/Plugin.js")}}"></script>
    <script src="{{asset("global/js/Base.js")}}"></script>
    <script src="{{asset("global/js/Config.js")}}"></script>

    <script src="{{asset("mmenu/assets/js/Section/Menubar.js")}}"></script>
    <script src="{{asset("mmenu/assets/js/Section/Sidebar.js")}}"></script>
    <script src="{{asset("mmenu/assets/js/Section/PageAside.js")}}"></script>
    <script src="{{asset("mmenu/assets/js/Section/GridMenu.js")}}"></script>

    <!-- Config -->
    <script src="{{asset("global/js/config/colors.js")}}"></script>
    <script src="{{asset("mmenu/assets/js/config/tour.js")}}"></script>
    <!-- Page -->
    <script src="{{asset("mmenu/assets/js/Site.js")}}"></script>
    <script src="{{asset("global/js/Plugin/asscrollable.js")}}"></script>
    <script src="{{asset("global/js/Plugin/slidepanel.js")}}"></script>
    <script src="{{asset("global/js/Plugin/switchery.js")}}"></script>
    <script src="{{asset("global/js/Plugin/datatables.js")}}"></script>

    <script src="{{asset("mmenu/assets/examples/js/tables/datatable.js")}}"></script>
    <script src="{{asset("mmenu/assets/examples/js/uikit/icon.js")}}"></script>
</body>

</html>
