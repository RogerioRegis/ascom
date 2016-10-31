<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('section.head')
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
                        

                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Registrar</a></li>
                        @else
                        <li>
                            <a role="button" aria-expanded="false">
                                <i class="text-orange"> Bem Vindo! </i> <strong>{{ Auth::user()->name }}</strong>
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


            <!-- begin USER ACTIONS DROPDOWN -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li>
                        <a href="/perfil">
                            <i class="fa fa-user"></i> Meu Perfil
                        </a>
                    </li>

                    <li class="divider"></li>

                    <li>
                        <a href="#">
                            <i class="fa fa-gear fa-spin"></i> Configurações
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


                    </ul>
                    <!-- /.nav -->
                    <!-- end MESSAGES/ALERTS/TASKS/USER ACTIONS DROPDOWNS -->
                </div>
            </nav>
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
                        <!-- end SIDE NAV USER PANEL -->
                        <!-- begin SIDE NAV SEARCH -->
                                    <li class="nav-search">
                                        <form role="form">
                                            <input type="search" class="form-control" placeholder="Search...">
                                            <button class="btn">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </li>
                        <!-- end SIDE NAV SEARCH -->

                        <!-- begin DASHBOARD LINK -->
                        <!-- begin DASHBOARD LINK -->
                        <li>
                            <a class="active" href="/home">
                                <i class="fa fa-home"></i> INÍCIO
                            </a>
                        </li>

                        <li>
                            <a class="active" href="/demandas">
                                <i class="fa fa-bullhorn"></i> DEMANDAS
                            </a>
                        </li>

                        <li>
                            <a class="active" href="/clipping">
                                <i class="fa fa-paperclip"></i> CLIPPING
                            </a>
                        </li>
                        
                        <li>
                            <a class="active" href="/deadlines">
                                <i class="fa fa-bell"></i> DEADLINE
                            </a>
                        </li>

                        <li>
                            <a class="active" href="/entrevistas">
                                <i class="fa fa-microphone"></i> ENTREVISTAS
                            </a>
                        </li>

                        <li>
                            <a class="active" href="/calendario">
                                <i class="fa fa-calendar"></i> CALENDÁRIO
                            </a>
                        </li>

                        <li>
                            <a class="active" href="/relatorios">
                                <i class="fa fa-file-pdf-o"></i> RELATÓRIOS
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

                <div class="page-content">  

                    @yield('content')

                    
                
                </div>
                <!-- /.page-content -->
            
            <hr>
            
            </div>
            <!-- /#page-wrapper -->
            <!-- end MAIN PAGE CONTENT -->

        </div>
        <!-- /#wrapper -->

        <!-- Scripts -->
        @include('section.footer')

    </body>
</html>