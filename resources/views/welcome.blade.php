<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'ASCOM - SMSA')</title>

    <!-- GLOBAL STYLES - Include these on every page. -->
    <link href="css/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">

    <!-- Icones -->
    <link href="/icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- THEME STYLES - Include these on every page. -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/plugins.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- begin TOP NAVIGATION -->
    <nav class="navbar-top" role="navigation">

                <!-- begin BRAND HEADING -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".sidebar-collapse">
                        <i class="fa fa-bars"></i> Menu
                    </button>
                    <div class="navbar-brand">
                        <a href="/">
                            <img src="/img/flex-admin-logo@1x.png" data-1x="/img/flex-admin-logo@1x.png" data-2x="/img/flex-admin-logo@2x.png" class="hisrc img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <!-- end BRAND HEADING -->

                <div class="nav-top">

                    <!-- begin LEFT SIDE WIDGETS -->
                    <ul class="nav navbar-left">
                        <li class="tooltip-sidebar-toggle">
                            <a href="#" id="sidebar-toggle" data-toggle="tooltip" data-placement="right" title="Alternar Barra Lateral">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                        <!-- You may add more widgets here using <li> -->
                    </ul>
                    <!-- end LEFT SIDE WIDGETS -->

                <!-- begin MESSAGES/ALERTS/TASKS/USER ACTIONS DROPDOWNS -->
                <ul class="nav navbar-right">

                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}"> <i class="fa fa-lock"></i> Login</a></li>
                        <li><a href="{{ url('/register') }}"> <i class="fa fa-edit"></i> Registrar</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i> Bem Vindo! </i> {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif

                </ul>
                <!-- /.nav -->
                <!-- end MESSAGES/ALERTS/TASKS/USER ACTIONS DROPDOWNS -->

                </div>

    </nav>










<!-- begin SIDE NAVIGATION -->
<nav class="navbar-side" role="navigation">
    <div class="navbar-collapse sidebar-collapse collapse">
        <ul id="side" class="nav navbar-nav side-nav">
            <!-- begin SIDE NAV USER PANEL -->
            <li class="side-user hidden-xs">
                <img class="img" src="/img/Logo_PMBV.png" alt="">

                <div class="clearfix"></div>
            </li>
            <!-- end SIDE NAV USER PANEL -->
            <!-- begin SIDE NAV SEARCH -->
            <!--            <li class="nav-search">
                            <form role="form">
                                <input type="search" class="form-control" placeholder="Search...">
                                <button class="btn">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </li>-->
            <!-- end SIDE NAV SEARCH -->
            <!-- begin DASHBOARD LINK -->
            <li>
                <a class="active" href="/">
                    <i class="fa fa-home"></i> Início
                </a>
            </li>
            <!-- end DASHBOARD LINK -->
            <!-- begin CHARTS DROPDOWN -->
            <li class="panel">
                <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#charts">
                    <i class="fa fa-file-text-o"></i> Controles <i class="fa fa-caret-down"></i>
                </a>
                <ul class="collapse nav" id="charts">
                    <li>
                        <a href="/">
                            <i class="fa fa-angle-double-right"></i> Controles de Contratos
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-angle-double-right"></i> Novo Controle <i class="fa fa-file-text-o"></i>
                        </a>
                    </li>
                    <!--                    <li>
                                            <a href="/controle">
                                                <i class="fa fa-angle-double-right"></i> Relatórios <i class="fa fa-file-pdf-o"></i> 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/morris">
                                                <i class="fa fa-angle-double-right"></i> <span class="fa fa-briefcase"></span> Credores
                                            </a>
                                        </li>    -->
                </ul>
            </li>
            <!-- end CHARTS DROPDOWN -->
            <!-- begin USERS LINK -->
            <!--            <li>
                            <a href="/users">
                                <i class="fa fa-users"></i> Usuários
                            </a>
                        </li>-->
            <!-- end CALENDAR LINK -->
            <!-- begin CALENDAR LINK -->
            <!--            <li>
            
                            <a href="/calendar">
                                <i class="fa fa-calendar"></i> Calendário
                            </a>
                        </li>-->

        </ul>
        <!-- /.side-nav -->
    </div>
    <!-- /.navbar-collapse -->
</nav>
<!-- /.navbar-side -->
<!-- end SIDE NAVIGATION -->











<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">

<div class="content">  





                <!-- begin PAGE TITLE AREA -->
                <!-- Use this section for each page's title and breadcrumb layout. In this example a date range picker is included within the breadcrumb. -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>Dashboard
                                <small>Content Overview</small>
                            </h1>
                            <ol class="breadcrumb">
                                <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
                                <li class="pull-right">
                                    <div id="reportrange" class="btn btn-green btn-square date-picker">
                                        <i class="fa fa-calendar"></i>
                                        <span class="date-range"></span> <i class="fa fa-caret-down"></i>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- end PAGE TITLE AREA -->

                <!-- begin DASHBOARD CIRCLE TILES -->
                <div class="row">
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading dark-blue">
                                    <i class="fa fa-users fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded">
                                    Users
                                </div>
                                <div class="circle-tile-number text-faded">
                                    265
                                    <span id="sparklineA"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading green">
                                    <i class="fa fa-money fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content green">
                                <div class="circle-tile-description text-faded">
                                    Revenue
                                </div>
                                <div class="circle-tile-number text-faded">
                                    $32,384
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading orange">
                                    <i class="fa fa-bell fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content orange">
                                <div class="circle-tile-description text-faded">
                                    Alerts
                                </div>
                                <div class="circle-tile-number text-faded">
                                    9 New
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading blue">
                                    <i class="fa fa-tasks fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content blue">
                                <div class="circle-tile-description text-faded">
                                    Tasks
                                </div>
                                <div class="circle-tile-number text-faded">
                                    10
                                    <span id="sparklineB"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading red">
                                    <i class="fa fa-shopping-cart fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content red">
                                <div class="circle-tile-description text-faded">
                                    Orders
                                </div>
                                <div class="circle-tile-number text-faded">
                                    24
                                    <span id="sparklineC"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading purple">
                                    <i class="fa fa-comments fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content purple">
                                <div class="circle-tile-description text-faded">
                                    Mentions
                                </div>
                                <div class="circle-tile-number text-faded">
                                    96
                                    <span id="sparklineD"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end DASHBOARD CIRCLE TILES -->
















</div>
<!-- /.page-content -->

</div>
<!-- /#page-wrapper -->
<!-- end MAIN PAGE CONTENT -->

</div>
<!-- /#wrapper -->

<!-- Scripts -->
<script src="/js/app.js"></script>

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->
    <!-- HubSpot Messenger -->
    <script src="/js/plugins/messenger/messenger.min.js"></script>
    <script src="/js/plugins/messenger/messenger-theme-flat.js"></script>
    <!-- Date Range Picker -->
    <script src="/js/plugins/daterangepicker/moment.js"></script>
    <script src="/js/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Morris Charts -->
    <script src="/js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="/js/plugins/morris/morris.js"></script>
    <!-- Flot Charts -->
    <script src="/js/plugins/flot/jquery.flot.js"></script>
    <script src="/js/plugins/flot/jquery.flot.resize.js"></script>
    <!-- Sparkline Charts -->
    <script src="/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- Moment.js -->
    <script src="/js/plugins/moment/moment.min.js"></script>
    <!-- jQuery Vector Map -->
    <script src="/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/js/plugins/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/js/demo/map-demo-data.js"></script>
    <!-- Easy Pie Chart -->
    <script src="/js/plugins/easypiechart/jquery.easypiechart.min.js"></script>
    <!-- DataTables -->
    <script src="/js/plugins/datatables/jquery.dataTables.js"></script>
    <script src="/js/plugins/datatables/datatables-bs3.js"></script>

    <!-- THEME SCRIPTS -->
    <script src="/js/flex.js"></script>
    <script src="/js/demo/dashboard-demo.js"></script>

</body>
</html>