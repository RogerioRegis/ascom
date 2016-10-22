<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'ASCOM - SMSA')</title>

    <!-- Styles 
    <link href="/css/app.css" rel="stylesheet">-->

    <!-- PACE LOAD BAR PLUGIN - This creates the subtle load bar effect at the top of the page. -->
    <link href="/css/plugins/pace/pace.css" rel="stylesheet">
    <script src="/js/plugins/pace/pace.js"></script>

    <!-- GLOBAL STYLES - Include these on every page. -->
    <link href="css/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">

    <!-- Icones -->
    <link href="/icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="/css/plugins/messenger/messenger.css" rel="stylesheet">
    <link href="/css/plugins/messenger/messenger-theme-flat.css" rel="stylesheet">
    <link href="/css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
    <link href="/css/plugins/morris/morris.css" rel="stylesheet">
    <link href="/css/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="/css/plugins/datatables/datatables.css" rel="stylesheet">

    <!-- THEME STYLES - Include these on every page. -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/plugins.css" rel="stylesheet">

    <!-- THEME DEMO STYLES - Use these styles for reference if needed. Otherwise they can be deleted. -->
    <link href="/css/demo.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
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




<!-- begin ALERTS DROPDOWN -->
                        <li class="dropdown">
                            <a href="#" class="alerts-link dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell"></i> 
                                <span class="number">0</span><i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-scroll dropdown-alerts">

                                <!-- Alerts Dropdown Heading -->
                                <li class="dropdown-header">
                                    <i class="fa fa-bell"></i> 0 Novos Alertas
                                </li>

                                <!-- Alerts Dropdown Body - This is contained within a SlimScroll fixed height box. You can change the height using the SlimScroll jQuery features. -->
                                <li id="alertScroll">
                                    <ul class="list-unstyled">

                                        
                                        <li>
                                            <a href="#">
                                                <div class="alert-icon green pull-left">
                                                    <i class="fa fa-money"></i>
                                                </div>
                                                ...
                                                <span class="small pull-right">
                                                    <strong>
                                                        <em> ... </em>
                                                    </strong>
                                                </span>
                                            </a>
                                        </li>
                                        

                                    </ul>
                                </li>

                                <!-- Alerts Dropdown Footer -->
                                <li class="dropdown-footer">
                                    <a href="#">Vizualizar Todos os Alertas</a>
                                </li>

                            </ul>
                            <!-- /.dropdown-menu -->
                        </li>
                        <!-- /.dropdown -->
                        <!-- end ALERTS DROPDOWN -->





                        <!-- begin USER ACTIONS DROPDOWN -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>  <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li>
                                    <a href="{{ url('/perfil') }}">
                                        <i class="fa fa-user"></i> Meu Perfil
                                    </a>
                                </li>
                                
                                <li class="divider"></li>

                                <li>
                                    <a href="{{ url('#') }}">
                                        <i class="fa fa-gear"></i> Configurações
                                    </a>
                                </li>
                                <li>
                                    <a class="logout_open" href="#logout">
                                        <i class="fa fa-sign-out"></i> Sair
                                        <strong>{{ Auth::user()->name }}</strong>
                                    </a>
                                </li>
                            </ul>
                            <!-- /.dropdown-menu -->
                        </li>
                        <!-- /.dropdown -->
                        <!-- end USER ACTIONS DROPDOWN -->




                    

                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Registrar</a></li>
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



            <!-- begin MAIN PAGE CONTENT -->
            <div id="page-wrapper">

                <div class="page-content">  

                    @yield('content')

                </div>
                <!-- /.page-content -->

            </div>
            <!-- /#page-wrapper -->
            <!-- end MAIN PAGE CONTENT -->




    
    </div>
    <!-- /#wrapper -->


    <!-- Scripts -->
    <script src="/js/app.js"></script>

    <!-- /#logout -->
    <!-- Logout Notification jQuery -->
    <script src="js/plugins/popupoverlay/logout.js"></script>
    <!-- HISRC Retina Images -->
    <script src="/js/plugins/hisrc/hisrc.js"></script>


<!-- Logout Notification Box -->
<div id="logout">
    <div class="logout-message">
        <img class="img img-logout" src="/img/logo_PMBV.png" alt="pmbv">
        <h3>
            <i class="fa fa-sign-out text-green"></i> Pronto para ir?
        </h3>
        <p>Selecione "Sair" abaixo se você está pronto<br> para encerrar sua sessão atual.</p>
        <ul class="list-inline">
            <li>
  
                                    <a href="{{ url('/logout') }}" class="btn btn-green" 
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        <strong>Sair Agora</strong>
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>



            </li>
            <li>
                <button class="logout_close btn btn-green">Cancelar</button>
            </li>
        </ul>
    </div>
</div>
<!-- /#logout -->



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
