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

            @yield('content')

        </div>
        <!-- /#wrapper -->
        <!-- Scripts -->
        <script src="/js/app.js"></script>
    </body>
</html>