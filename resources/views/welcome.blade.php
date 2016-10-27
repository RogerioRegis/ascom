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
                                        <i class="fa fa-sign-out"></i> Sair <strong>{{ Auth::user()->name }}</strong>
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
            <!-- /.navbar-top -->
            <!-- end TOP NAVIGATION -->



            <!-- begin SIDE NAVIGATION -->
            <nav class="navbar-side" role="navigation">
                <div class="navbar-collapse sidebar-collapse collapse">
                    <ul id="side" class="nav navbar-nav side-nav">
                        <!-- begin SIDE NAV USER PANEL -->
                        <li class="side-user hidden-xs">
                            <img class="img" src="/img/Logo_PMBV.png" alt="">

                            <div class="clearfix"></div>
                        </li>

                        <!-- begin DASHBOARD LINK -->
                        <li>
                            <a class="active" href="/">
                                <i class="fa fa-home"></i> Início
                            </a>
                        </li>
                        <!-- end DASHBOARD LINK -->
                        

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
                                <h1>Painel de Instrumentos
                                    <small>Visão Geral do Conteúdo</small>
                                </h1>
                                <ol class="breadcrumb">
                                    <li class="active"><i class="fa fa-home"></i> Home</li>
                                    @include('section.datahora')
                                </ol>
                            </div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <!-- end PAGE TITLE AREA -->

                    
                    @include('section.dashboard')
                    

                </div>
                <!-- /.page-content -->

            </div>
            <!-- /#page-wrapper -->
            <!-- end MAIN PAGE CONTENT -->

        </div>
        <!-- /#wrapper -->

        <!-- Scripts -->
        <script src="/js/app.js"></script>

        @include('section.footer')

    </body>
</html>