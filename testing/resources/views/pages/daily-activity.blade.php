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
    <link rel="stylesheet" href="{{asset("global/vendor/flag-icon-css/flag-icon.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/waves/waves.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/select2/select2.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/bootstrap-select/bootstrap-select.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/icheck/icheck.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/switchery/switchery.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/asrange/asRange.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/ionrangeslider/ionrangeslider.min.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/asspinner/asSpinner.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/clockpicker/clockpicker.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/ascolorpicker/asColorPicker.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/bootstrap-touchspin/bootstrap-touchspin.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/jquery-labelauty/jquery-labelauty.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/bootstrap-datepicker/bootstrap-datepicker.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/bootstrap-maxlength/bootstrap-maxlength.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/timepicker/jquery-timepicker.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/jquery-strength/jquery-strength.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/multi-select/multi-select.css")}}">
    <link rel="stylesheet" href="{{asset("global/vendor/typeahead-js/typeahead.css")}}">
    <link rel="stylesheet" href="{{asset("mmenu/assets/examples/css/forms/advanced.css")}}">
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
    <link rel="stylesheet" href="{{asset("global/fonts/material-design/material-design.min.css")}}">
    <link rel="stylesheet" href="{{asset("global/fonts/brand-icons/brand-icons.min.css")}}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:700,400,500,700italic'>

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
                        <a href="{{ route('daily-report.index') }}"
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
                <a href="javascript:void(0)">
                    <i class="site-menu-icon icon md-chart" style="font-size: 20px" aria-hidden="true"></i>
                    <span class="site-menu-title">Unit Status</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Page -->
    <div class="page">
        <div class="page-content container-fluid">
            <div class="container">
                <div class="row">
                    <div class="card" style="color: #000000; margin-left: 50px; margin-top: 20px !important">
                        <div class="card-block">
                            <form action="" class="form-inline">
                                <div class="col-12 col-md-2 col-sm-12">
                                    <p style="color: #000000;">Nomor Unit
                                    </p>
                                </div>
                                <div class="col-12 col-md-10 col-sm-12">
                                    <input type="text" class="form-control" name="type_numberic"
                                        placeholder="Nomor Unit" value="{{ $units }}" style="margin-top: 10px;">
                                </div>
                                <div class="col-12 col-md-2 col-sm-12">
                                    <p style="color: #000000;">Nama Operator
                                    </p>
                                </div>
                                <div class="col-12 col-md-10 col-sm-12">
                                    <select data-plugin="selectpicker" style="width: 75%; margin-top: 10px;"
                                        name="id_operator">
                                        <option value="">Pilih</option>
                                        @foreach ($operators as $operator)
                                        <option value="{{ $operator->id }}">{{ $operator->first_name }}
                                            {{ $operator->last_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-md-2 col-sm-12">
                                    <p style="color: #000000;margin-top: 10px;">Kode Proses
                                    </p>
                                </div>
                                <div class="col-12 col-md-10 col-sm-12">
                                    <select class="proses" data-plugin="selectpicker"
                                        style="width: 75%; margin-top: 10px;" name="id_proses">
                                        <option value="">Pilih</option>
                                        @foreach ($prosess as $proses)
                                        <option value="{{ $proses->id }}">{{ $proses->kode }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-md-2 col-sm-12">
                                    <p style="color: #000000;margin-top: 10px;">Kode Material
                                    </p>
                                </div>
                                <div class="col-12 col-md-10 col-sm-12">
                                    <select class="material" data-plugin="selectpicker"
                                        style="width: 75%; margin-top: 10px;" name="id_material">
                                        <option value="">Pilih</option>
                                        @foreach ($materials as $material)
                                        <option value="{{ $material->id }}">{{ $material->kode }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-md-2 col-sm-12">
                                    <p style="color: #000000;margin-top: 10px;">Kode Aktivitas
                                    </p>
                                </div>
                                <div class="col-12 col-md-10 col-sm-12">
                                    <select class="aktivitas" data-plugin="selectpicker"
                                        style="width: 75%; margin-top: 10px;" name="id_aktifitas">
                                        <option value="">Pilih</option>
                                        @foreach ($aktifitas as $activity)
                                        <option value="{{ $activity->id }}">{{ $activity->kode }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-md-4 col-sm-12">
                                    <div class="row">
                                        <div class="col-12 col-md-4 col-sm-12">
                                            <p style="color: #000000;margin-top: 10px;">HM Awal
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-8 col-sm-12">
                                            <input name="hm_awal" type="text" class="form-control" name="type_numberic"
                                                placeholder="HM Awal" style="width: 75%; margin-top: 10px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-sm-12">
                                    <div class="row">
                                        <div class="col-12 col-md-4 col-sm-12">
                                            <p style="color: #000000;margin-top: 10px;">HM Akhir
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-8 col-sm-12">
                                            <input name="hm_akhir" type="text" class="form-control" name="type_numberic"
                                                placeholder="HM Akhir" style="width: 75%; margin-top: 10px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-sm-12">
                                    <div class="row">
                                        <div class="col-12 col-md-4 col-sm-12">
                                            <p style="color: #000000;margin-top: 10px;">Total HM
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-8 col-sm-12">
                                            <input name="total_hm" type="text" class="form-control" name="type_numberic"
                                                placeholder="Total HM" style="width: 75%; margin-top: 10px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-sm-12">
                                    <div class="row">
                                        <div class="col-12 col-md-4 col-sm-12">
                                            <p style="color: #000000;margin-top: 10px;">KM Awal
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-8 col-sm-12">
                                            <input name="km_awal" type="text" class="form-control" name="type_numberic"
                                                placeholder="KM Awal" style="width: 75%; margin-top: 10px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-sm-12">
                                    <div class="row">
                                        <div class="col-12 col-md-4 col-sm-12">
                                            <p style="color: #000000;margin-top: 10px;">KM Akhir
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-8 col-sm-12">
                                            <input name="km_akhir" type="text" class="form-control" name="type_numberic"
                                                placeholder="KM Akhir" style="width: 75%; margin-top: 10px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-sm-12">
                                    <div class="row">
                                        <div class="col-12 col-md-4 col-sm-12">
                                            <p style="color: #000000;margin-top: 10px;">Total KM
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-8 col-sm-12">
                                            <input name="total_km" type="text" class="form-control" name="type_numberic"
                                                placeholder="Total KM" style="width: 75%; margin-top: 10px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-sm-12">
                                    <div class="row">
                                        <div class="col-12 col-md-4 col-sm-12">
                                            <p style="color: #000000;margin-top: 10px;">Jam Awal
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-8 col-sm-12">
                                            <input name="jm_opt_awal" type="text" class="timepicker form-control"
                                                data-plugin="clockpicker" data-75%close="true"
                                                style="width: 75%; margin-top: 10px;" value="09:00">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-sm-12">
                                    <div class="row">
                                        <div class="col-12 col-md-4 col-sm-12">
                                            <p style="color: #000000;margin-top: 10px;">Jam Akhir
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-8 col-sm-12">
                                            <input name="jm_opt_akhir" type="text" class="timepicker form-control"
                                                data-plugin="clockpicker" data-75%close="true"
                                                style="width: 75%; margin-top: 10px;" value="09:00">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-sm-12">
                                    <div class="row">
                                        <div class="col-12 col-md-4 col-sm-12">
                                            <p style="color: #000000;margin-top: 10px;">Total Jam
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-8 col-sm-12">
                                            <input name="total_jm_opt" type="text" class="form-control"
                                                name="type_numberic" placeholder="Total Jam"
                                                style="width: 75%; margin-top: 10px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-2 col-sm-12">
                                    <p style="color: #000000;">Fuel
                                    </p>
                                </div>
                                <div class="col-12 col-md-10 col-sm-12">
                                    <input name="fuel" type="text" class="form-control" name="type_numberic"
                                        placeholder="Fuel" style="margin-top: 10px;">
                                </div>
                                <div class="col-12 col-md-2 col-sm-12">
                                    <p style="color: #000000;">Rata-rata
                                    </p>
                                </div>
                                <div class="col-12 col-md-10 col-sm-12">
                                    <input name="rata_rata" type="text" class="form-control" name="type_numberic"
                                        placeholder="Rata-rata" style="margin-top: 10px;">
                                </div>
                                <div class="col-12 col-md-2 col-sm-12">
                                    <p style="color: #000000;">Stanby Code
                                    </p>
                                </div>
                                <div class="col-12 col-md-2 col-sm-12">
                                    <select data-plugin="selectpicker" style="width: 30%; margin-top: 10px;"
                                        name="id_stanby">
                                        <option value="">Pilih</option>
                                        @foreach ($stanbys as $stanby)
                                        <option value="{{ $stanby->id }}">{{ $stanby->kode }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-sm-12">
                                    <a href="" class="btn btn-raised btn-primary btn-block waves-effect waves-classic"
                                        style="width: 30%; margin-top: 10px;">
                                        Save
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="panel" style="margin-left: 50px;">
                        <header class="panel-heading text-center">
                            <div class="panel-actions"></div>
                            <h1 class="panel-title"
                                style="background:#0267ca; color: #fff; font-size: large; text-align: left;">
                                Unit
                                Status</h1>
                        </header>
                        <div class="card" style="color: #000000; margin-left: 50px;">
                            <div class="card-block">
                                <form action="" class="form-inline">
                                    <div class="col-12 col-md-6 col-sm-12">
                                        <p>Nomor Unit : {{ $units }}</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-12 col-md-4 col-sm-12">
                                                <p style="margin-top: 1rem;">Loader</p>
                                            </div>
                                            <div class="col-12 col-md-8 col-sm-12">
                                                <select data-plugin="selectpicker"
                                                    style="width: 50%; margin-top: 10px;">
                                                    <option>Mustard</option>
                                                    <option>Ketchup</option>
                                                    <option>Relish</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-sm-12">
                                        <p id="id_proses">Kode Proses : 200</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-12 col-md-4 col-sm-12">
                                                <p style="margin-top: 1rem;">Loading Point</p>
                                            </div>
                                            <div class="col-12 col-md-8 col-sm-12 mt-10">
                                                <select data-plugin="selectpicker"
                                                    style="width: 50%; margin-top: 10px;">
                                                    <option>Mustard</option>
                                                    <option>Ketchup</option>
                                                    <option>Relish</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-sm-12">
                                        <p id="id_material">Kode Material : 200</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-12 col-md-4 col-sm-12">
                                                <p style="margin-top: 1rem;">Dumping Area</p>
                                            </div>
                                            <div class="col-12 col-md-8 col-sm-12 mt-10">
                                                <select data-plugin="selectpicker"
                                                    style="width: 50%; margin-top: 10px;">
                                                    <option>Mustard</option>
                                                    <option>Ketchup</option>
                                                    <option>Relish</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-sm-12">
                                        <p id="id_aktifitas">Kode Aktivitas : 200</p>
                                    </div>
                                    <div class="col-12 col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-12 col-md-4 col-sm-12">
                                                <p style="margin-top: 1rem;">Jarak (KM)</p>
                                            </div>
                                            <div class="col-12 col-md-8 col-sm-12 mt-10">
                                                <select data-plugin="selectpicker"
                                                    style="width: 50%; margin-top: 10px;">
                                                    <option>Mustard</option>
                                                    <option>Ketchup</option>
                                                    <option>Relish</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-sm-12 mt-10">

                                    </div>
                                    <div class="col-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-12 col-md-2 col-sm-12">
                                                <p style="margin-top: 1rem;">Total Ritasi</p>
                                            </div>
                                            <div class="col-12 col-md-2 col-sm-12">
                                                <input type="text" class="form-control" name="type_numberic"
                                                    placeholder="Total Ritasi" style="margin-top: 10px;">
                                            </div>
                                            <div class="col-12 col-md-8 col-sm-12"><a href=""
                                                    class="btn btn-raised btn-primary btn-block waves-effect waves-classic"
                                                    style="width: 30%;margin-top: 10px; margin-left: 100px;"
                                                    data-toggle="modal" data-target="#dataritasi">
                                                    Add Ritasi
                                                </a></div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12 col-sm-12 mt-20">
                                        <a href=""
                                            class="btn btn-raised btn-primary btn-block waves-effect waves-classic"
                                            style="width: 70%;">
                                            Add Loading Point
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 mt-15">
                        <!-- Panel Basic -->
                        <div class="panel" style="margin-left: 30px;">
                            <header class="panel-heading text-center">
                                <div class="panel-actions"></div>
                                <h1 class="panel-title"
                                    style="background:#0267ca; color: #fff; font-size: large; text-align: left;">
                                    Standby
                                    Status</h1>
                                <div class="panel-actions">
                                    <button type="button" class="btn"
                                        style="background:#0267ca; color: #fff; width: 5rem;" data-toggle="modal"
                                        data-target="#datastanby">Add</button>
                                </div>
                            </header>
                            <div class="panel-body mt-10">
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{$message}}</p>
                                </div>
                                @endif
                                <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable"
                                    id="tableStanby">
                                    <thead>
                                        <tr>
                                            <th>Standby</th>
                                            <th>Start Time (1)</th>
                                            <th>Start Time (2)</th>
                                            <th>Start Time (3)</th>
                                            <th>Start Time (4)</th>
                                            <th>End Time (1)</th>
                                            <th>End Time (2)</th>
                                            <th>End Time (3)</th>
                                            <th>End Time (4)</th>
                                            <th>Keterangan</th>
                                            <th>Breakdown</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{csrf_field()}}
                                        @foreach ($stanby_status as $stanby_time)
                                        <tr>
                                            <td>{{ $stanby_time->kode }}</td>
                                            <td>{{ $stanby_time->start_time_1 }}</td>
                                            <td>{{ $stanby_time->start_time_2 }}</td>
                                            <td>{{ $stanby_time->start_time_3 }}</td>
                                            <td>{{ $stanby_time->start_time_4 }}</td>
                                            <td>{{ $stanby_time->end_time_1 }}</td>
                                            <td>{{ $stanby_time->end_time_2 }}</td>
                                            <td>{{ $stanby_time->end_time_3 }}</td>
                                            <td>{{ $stanby_time->end_time_4 }}</td>
                                            <td>{{ $stanby_time->keterangan  }}</td>
                                            <td>{{ $stanby_time->breakdown }}</td>
                                            <td>
                                                <a href="{{ route('daily-activity.update', $stanby_time->id) }}"
                                                    class="button mr-10">
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
                    <!-- Modal Data Unit -->
                    <div class="modal fade" id="datastanby" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background: #80808038;">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Standby Time</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Standby Code:</label>
                                                    <input name="id_stanby" type="text" class="form-control" name=""
                                                        readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Start Time:</label>
                                                    <input name="start_time_1" type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>End Time:</label>
                                                    <input name="end_time_1" type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Start Time:</label>
                                                    <input name="start_time_2" type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>End Time:</label>
                                                    <input name="end_time_2" type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Start Time:</label>
                                                    <input name="start_time_3" type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>End Time:</label>
                                                    <input name="end_time_3" type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Start Time:</label>
                                                    <input name="start_time_4" type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>End Time:</label>
                                                    <input name="end_time_4" type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Keterangan:</label>
                                                    <input name="keterangan" type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Breakdown:</label>
                                                    <select name="breakdown" data-plugin="selectpicker"
                                                        style="width: 70%; margin-top: 10px;">
                                                        <option value="SCM">SCM</option>
                                                        <option value="USM">USM</option>
                                                        <option value="TRM">TRM</option>
                                                        <option value="ICM">ICM</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <button type="submit" style="width: 100%;"
                                                    class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Data Unit End -->

                    <!-- Modal Data Unit -->
                    <div class="modal fade" id="dataritasi" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background: #80808038;">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Ritasi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Standby Code:</label>
                                                    <input name="id_stanby" type="text" class="form-control" name=""
                                                        readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Start Time:</label>
                                                    <input name="start_time_1" type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>End Time:</label>
                                                    <input name="end_time_1" type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Start Time:</label>
                                                    <input name="start_time_2" type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>End Time:</label>
                                                    <input name="end_time_2" type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Start Time:</label>
                                                    <input name="start_time_3" type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>End Time:</label>
                                                    <input name="end_time_3" type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Start Time:</label>
                                                    <input name="start_time_4" type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>End Time:</label>
                                                    <input name="end_time_4" type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Keterangan:</label>
                                                    <input name="keterangan" type="text" class="form-control" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Breakdown:</label>
                                                    <select name="breakdown" data-plugin="selectpicker"
                                                        style="width: 70%; margin-top: 10px;">
                                                        <option value="SCM">SCM</option>
                                                        <option value="USM">USM</option>
                                                        <option value="TRM">TRM</option>
                                                        <option value="ICM">ICM</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <button type="submit" style="width: 100%;"
                                                    class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Data Unit End -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Page -->
    <!-- Core  -->
    <script src="{{asset("global/vendor/babel-external-helpers/babel-external-helpers.js")}}">
    </script>
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
    <script src="{{asset("global/vendor/select2/select2.full.min.js")}}"></script>
    <script src="{{asset("global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.js")}}">
    </script>
    <script src="{{asset("global/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js")}}">
    </script>
    <script src="{{asset("global/vendor/bootstrap-select/bootstrap-select.js")}}"></script>
    <script src="{{asset("global/vendor/icheck/icheck.min.js")}}"></script>
    <script src="{{asset("global/vendor/switchery/switchery.js")}}"></script>
    <script src="{{asset("global/vendor/asrange/jquery-asRange.min.js")}}"></script>
    <script src="{{asset("global/vendor/ionrangeslider/ion.rangeSlider.min.js")}}"></script>
    <script src="{{asset("global/vendor/asspinner/jquery-asSpinner.min.js")}}"></script>
    <script src="{{asset("global/vendor/clockpicker/bootstrap-clockpicker.min.js")}}">
    </script>
    <script src="{{asset("global/vendor/ascolor/jquery-asColor.min.js")}}"></script>
    <script src="{{asset("global/vendor/asgradient/jquery-asGradient.min.js")}}"></script>
    <script src="{{asset("global/vendor/ascolorpicker/jquery-asColorPicker.min.js")}}">
    </script>
    <script src="{{asset("global/vendor/bootstrap-maxlength/bootstrap-maxlength.js")}}">
    </script>
    <script src="{{asset("global/vendor/jquery-knob/jquery.knob.js")}}"></script>
    <script src="{{asset("global/vendor/bootstrap-touchspin/bootstrap-touchspin.min.js")}}">
    </script>
    <script src="{{asset("global/vendor/jquery-labelauty/jquery-labelauty.js")}}"></script>
    <script src="{{asset("global/vendor/bootstrap-datepicker/bootstrap-datepicker.js")}}">
    </script>
    <script src="{{asset("global/vendor/timepicker/jquery.timepicker.min.js")}}"></script>
    <script src="{{asset("global/vendor/datepair/datepair.min.js")}}"></script>
    <script src="{{asset("global/vendor/datepair/jquery.datepair.min.js")}}"></script>
    <script src="{{asset("global/vendor/jquery-strength/password_strength.js")}}"></script>
    <script src="{{asset("global/vendor/jquery-strength/jquery-strength.min.js")}}">
    </script>
    <script src="{{asset("global/vendor/multi-select/jquery.multi-select.js")}}"></script>
    <script src="{{asset("global/vendor/typeahead-js/bloodhound.min.js")}}"></script>
    <script src="{{asset("global/vendor/typeahead-js/typeahead.jquery.min.js")}}"></script>
    <script src="{{asset("global/vendor/jquery-placeholder/jquery.placeholder.js")}}">
    </script>

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
    <script src="{{asset("global/js/Plugin/select2.js")}}"></script>
    <script src="{{asset("global/js/Plugin/bootstrap-tokenfield.js")}}"></script>
    <script src="{{asset("global/js/Plugin/bootstrap-tagsinput.js")}}"></script>
    <script src="{{asset("global/js/Plugin/bootstrap-select.js")}}"></script>
    <script src="{{asset("global/js/Plugin/icheck.js")}}"></script>
    <script src="{{asset("global/js/Plugin/switchery.js")}}"></script>
    <script src="{{asset("global/js/Plugin/asrange.js")}}"></script>
    <script src="{{asset("global/js/Plugin/ionrangeslider.js")}}"></script>
    <script src="{{asset("global/js/Plugin/asspinner.js")}}"></script>
    <script src="{{asset("global/js/Plugin/clockpicker.js")}}"></script>
    <script src="{{asset("global/js/Plugin/ascolorpicker.js")}}"></script>
    <script src="{{asset("global/js/Plugin/bootstrap-maxlength.js")}}"></script>
    <script src="{{asset("global/js/Plugin/jquery-knob.js")}}"></script>
    <script src="{{asset("global/js/Plugin/bootstrap-touchspin.js")}}"></script>
    <script src="{{asset("global/js/Plugin/card.js")}}"></script>
    <script src="{{asset("global/js/Plugin/jquery-labelauty.js")}}"></script>
    <script src="{{asset("global/js/Plugin/bootstrap-datepicker.js")}}"></script>
    <script src="{{asset("global/js/Plugin/jt-timepicker.js")}}"></script>
    <script src="{{asset("global/js/Plugin/datepair.js")}}"></script>
    <script src="{{asset("global/js/Plugin/jquery-strength.js")}}"></script>
    <script src="{{asset("global/js/Plugin/multi-select.js")}}"></script>
    <script src="{{asset("global/js/Plugin/jquery-placeholder.js")}}"></script>

    <script src="{{asset("global/vendor/datatables.net/jquery.dataTables.js")}}"></script>
    <script src="{{asset("global/vendor/datatables.net-bs4/dataTables.bootstrap4.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-scroller/dataTables.scroller.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-responsive/dataTables.responsive.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-buttons/dataTables.buttons.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-buttons/buttons.html5.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-buttons/buttons.flash.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-buttons/buttons.print.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-buttons/buttons.colVis.js")}}">
    </script>
    <script src="{{asset("global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js")}}">
    </script>
    <script src="{{asset("mmenu/assets/examples/js/forms/advanced.js")}}"></script>
    <script src="{{asset("global/js/Plugin/datatables.js")}}"></script>

    <script src="{{asset("mmenu/assets/examples/js/tables/datatable.js")}}"></script>

    <script>
        $(document).ready(function () {
            $("select.proses").change(function () {
                var selectedCountry = $(this).children("option:selected").text();
                document.getElementById("id_proses").innerHTML = "Kode Proses: " + selectedCountry;
                // alert("You have selected the country - " + selectedCountry);
            });
        });
        $(document).ready(function () {
            $("select.material").change(function () {
                var selectedCountry = $(this).children("option:selected").text();
                document.getElementById("id_material").innerHTML = "Kode Material: " + selectedCountry;
                // alert("You have selected the country - " + selectedCountry);
            });
        });
        $(document).ready(function () {
            $("select.aktivitas").change(function () {
                var selectedCountry = $(this).children("option:selected").text();
                document.getElementById("id_aktifitas").innerHTML = "Kode Aktivitas: " +
                    selectedCountry;
                // alert("You have selected the country - " + selectedCountry);
            });
        });
        //delete post
        $(document).on('click', '.delete-modal', function () {
            $('.modal-title').text('Delete');
            $('#id_delete').val($(this).data('id'));
            $('#deleteModal').modal('show');
            id = $('#id_delete').val();
        });
        $('.modal-footer').on('click', '.delete', function () {
            $.ajax({
                type: 'DELETE',
                url: 'daily-activity/' + id,
                data: {
                    "_token": "{{csrf_token()}}",
                },
                success: function (data) {
                    toastr.success('Successfully deleted!', 'Success Alert', {
                        timeOut: 5000
                    });
                    $datatable.row($('.stanby_time' + data['id'])).remove().draw();
                }
            });
        });

    </script>
</body>

</html>
